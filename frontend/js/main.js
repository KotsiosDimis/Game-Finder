// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    // Get the search form and results container elements
    const searchForm = document.getElementById('searchForm');
    const searchResults = document.getElementById('searchResults');

    // Handle the search form submission
    searchForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission behavior

        // Get the search query from the input field
        const searchQuery = document.querySelector('input[name="search"]').value;

        // Call the search API with the search query
        fetch(`backend/api/search.php?query=${encodeURIComponent(searchQuery)}`)
            .then(response => response.json())
            .then(data => {
                // Check if the request was successful
                if (data.success) {
                    displayResults(data.data); // Display the search results
                } else {
                    displayError(data.error); // Display the error message
                }
            })
            .catch(error => {
                console.error('Error:', error);
                displayError('An error occurred while searching. Please try again.');
            });
    });

    // Function to display search results
    function displayResults(results) {
        searchResults.innerHTML = ''; // Clear previous results

        if (results.length > 0) {
            results.forEach(result => {
                // Create a card element for each game result
                const resultElement = document.createElement('div');
                resultElement.className = 'card mb-2';
                resultElement.innerHTML = `
                    <div class="card-body">
                        <h5 class="card-title">${result.name}</h5>
                        <p class="card-text">Released: ${result.released || 'N/A'}</p>
                        <p class="card-text">Rating: ${result.rating || 'N/A'}</p>
                    </div>
                `;
                searchResults.appendChild(resultElement);
            });
        } else {
            searchResults.innerHTML = '<p>No results found.</p>';
        }
    }

    // Function to display an error message
    function displayError(errorMessage) {
        searchResults.innerHTML = `<p class="text-danger">${errorMessage}</p>`;
    }
});
