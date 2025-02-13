# Laravel Front Test Project

## Requirements

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

## Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/yourusername/laravel-front-test.git
    cd laravel-front-test
    ```

2. Install PHP dependencies:

    ```sh
    composer install
    ```

3. Install Node.js dependencies:

    ```sh
    npm install
    ```

4. Copy the [.env.example](http://_vscodecontentref_/0) file to [.env](http://_vscodecontentref_/1):

    ```sh
    cp .env.example .env
    ```

5. Generate the application key:

    ```sh
    php artisan key:generate
    ```

6. Configure your [.env](http://_vscodecontentref_/2) file with your database credentials:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

7. Run the database migrations:

    ```sh
    php artisan migrate
    ```

8. (Optional) Seed the database with sample data:

    ```sh
    php artisan db:seed
    ```

9. Build the front-end assets:

    ```sh
    npm run dev
    ```

## Running the Project

1. Start the local development server:

    ```sh
    php artisan serve
    ```

2. Open your browser and navigate to:

    ```
    http://localhost:8000
    ```

## Additional Commands

- To watch for changes and automatically rebuild assets:

    ```sh
    npm run watch
    ```

- To run tests:

    ```sh
    php artisan test
    ```

## Troubleshooting

- If you encounter any issues, check the Laravel documentation or seek help from the community.

## License

This project is open-source and available under the [MIT license](LICENSE).