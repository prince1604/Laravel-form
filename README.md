# Laravel Complete Form

A Laravel-based CRUD form application that demonstrates essential Laravel features with a user-friendly interface.

---

## 🚀 Features

- ✅ **CRUD Operations** — Create, Read, Update, and Delete data using Laravel resources.
- 🌐 **Localization Support** — Multi-language support using Laravel's built-in localization.
- 📁 **File Upload** — Upload and manage files using the form.
- 📄 **Form Validation** — Server-side validation for safe and structured data input.
- 📊 **Pagination** — Paginate and manage records efficiently.
- 🎨 **Blade Templates** — Clean and reusable UI using Blade templating engine.
- 🔒 **Security** — CSRF protection, input validation, and secure file handling.
- 🔧 **Modern UI** — Mobile-responsive and easy-to-use design.

---

## 📁 Folder Structure
laravel_project/form-submit
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│ └── views/
├── routes/
├── storage/
└── tests/


---

## 🛠️ Installation

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL / MariaDB
- Node.js and npm (optional, for frontend assets)

### Steps

1. Clone the repository:

   git clone https://github.com/prince1604/Laravel-form.git
   cd laravel-form

3. Install dependencies:
   composer install

4. Create a .env file:
   cp .env.example .env

5. Generate application key:
   php artisan key:generate

6. Set up your database in .env:
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

7. Run migrations:
   php artisan migrate

8. Serve the application:
   php artisan serve
Visit http://localhost:8000



💡 Usage
Visit the home page to create a new form entry.

View the list of entries.

Edit or delete entries using the buttons provided.


🤝 Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

📄 License
This project is licensed under the Apache 2.0 License.

📬 Contact
For suggestions, feel free to open an issue or contact via GitHub.









