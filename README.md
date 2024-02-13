# Phone Number Generator

This is a simple web application that generates random phone numbers based on user inputs for country code, random number, and quantity. It uses PHP for server-side processing and JavaScript with AJAX for asynchronous communication with the server.

## Features

- Input fields for country code, random number, and quantity
- Generate button to trigger the generation of phone numbers
- AJAX request to `generatenumbers.php` for generating phone numbers without page reload
- Displays the generated phone numbers in a list format
- Bootstrap styling for a clean and responsive UI

## Usage

1. Clone this repository to your local machine.
2. Ensure you have PHP installed.
3. Navigate to the project directory in your terminal.
4. Start the PHP built-in web server by running:
    ```
    php -S localhost:8000
    ```
5. Open your web browser and go to `http://localhost:8000`.
6. Fill out the form with the desired inputs and click "Generate Numbers" to see the generated phone numbers.

## Files

- `index.html`: Contains the HTML structure of the web application.
- `generatenumbers.php`: Handles the server-side processing of generating phone numbers.
- `script.js`: Provides client-side functionality for handling form submission and updating the UI.
- `README.md`: This file, providing information about the project.

## Author

Tony

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
