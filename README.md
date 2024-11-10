# Game Finder - Web-Based Search Engine for Games

## Overview

Game Finder is a web-based search engine designed to help users easily find video games using an external API. The system allows users to search for game information based on various criteria, such as genre, release year, and more. The application is designed to be hosted on the university server (users.iee.ihu.gr), but can be hosted on any preferred server.

**URL**: [Insert URL Here]

## Features

- **Game Search**: Users can search for games by name, genre, or other criteria using data from a third-party API (e.g., OMDb API).
- **Search Results**: Results are presented with relevant information about each game, such as title, genre, release date, and a brief description.
- **Advanced Query Handling**: Supports complex queries, including logical operators and wildcards for more refined searches.
- **Search Result Sorting**: Users can sort search results based on relevance or other fields.
- **Pagination**: Results can be paginated, with customizable options such as the number of results per page and the current page number.
- **Detailed Game View**: When users select a game from the search results, they can view detailed information based on the API's available data.
- **User-Friendly Front-End**: The front-end is intuitive and designed for an excellent user experience.

## User Requirements

### Functional Requirements

- **Game Search Functionality**: 
  - Users should be able to search for games using keywords, genres, and other filters.
  - The system will retrieve data from an external API and display the results in an easy-to-read format.
  
- **Search Result Management**:
  - Results should be presented with the option to sort by relevance, release date, etc.
  - The search results should be paginated, with options for the user to select the number of results per page and navigate between pages.
  
- **Advanced Search**:
  - Users should be able to use logical operators (AND, OR) and wildcards in their search queries to refine their results.

- **Game Detail View**:
  - When selecting a game, users should be able to see more detailed information, such as a description, release year, and developer (depending on the API).

- **Flexible Front-End**:
  - The front-end should be responsive and user-friendly, with easy navigation and clear presentation of results.

### Non-Functional Requirements

- **Performance**:
  - The search engine should be fast and responsive, even with a large set of data.
  
- **Scalability**:
  - The application should be able to handle an increasing number of users and game queries.

- **Security**:
  - The system should handle data securely, especially user inputs, to prevent common vulnerabilities like injection attacks.

- **Cross-Platform Compatibility**:
  - The web application should be compatible with all major browsers and devices.

## Technology Stack

- **Front-End**:
  - HTML, CSS, JavaScript (ES6+)
  - jQuery (for AJAX requests)
  - Responsive design with Bootstrap or a similar framework

- **Back-End**:
  - PHP (for server-side logic)
  - API integration (e.g., OMDb API)

- **Hosting**:
  - University server (users.iee.ihu.gr) or any other hosting platform

## Development Setup

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-repo/game-finder.git
