```
  _                                 _          ______                      
 | |                               | |        |  ____|                     
 | |  __ _  _ __  __ _ __   __ ___ | | ______ | |__  ___   _ __  _ __ ___  
 | | / _` || '__|/ _` |\ \ / // _ \| ||______||  __|/ _ \ | '__|| '_ ` _ \
 | || (_| || |  | (_| | \ V /|  __/| |        | |  | (_) || |   | | | | | |
 |_| \__,_||_|   \__,_|  \_/  \___||_|        |_|   \___/ |_|   |_| |_| |_|
                                                                           
```

A Laravel-based CRUD form application that demonstrates essential Laravel features with a user-friendly interface.

---

## 🚀 Features

* ✅ **CRUD Operations** — Create, Read, Update, and Delete data using Laravel resources.
* 🌐 **Localization Support** — Multi-language support using Laravel's built-in localization.
* 📁 **File Upload** — Upload and manage files using the form.
* 📄 **Form Validation** — Server-side validation for safe and structured data input.
* 📊 **Pagination** — Paginate and manage records efficiently.
* 🎨 **Blade Templates** — Clean and reusable UI using Blade templating engine.
* 🔒 **Security** — CSRF protection, input validation, and secure file handling.
* 🔧 **Modern UI** — Mobile-responsive and easy-to-use design.

---

## 📁 Folder Structure

```
laravel_project/form-submit
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   └── views/
├── routes/
├── storage/
└── tests/
```

---

## 🛠️ Installation

### Prerequisites

* PHP >= 8.0
* Composer
* MySQL / MariaDB
* Node.js and npm (optional, for frontend assets)

### Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/prince1604/Laravel-form.git
   cd laravel-form
   ```
2. Install dependencies:

   ```bash
   composer install
   ```
3. Create a .env file:

   ```bash
   cp .env.example .env
   ```
4. Generate application key:

   ```bash
   php artisan key:generate
   ```
5. Set up your database in `.env`:

   ```env
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
6. Run migrations:

   ```bash
   php artisan migrate
   ```
7. Serve the application:

   ```bash
   php artisan serve
   ```

   Visit [http://localhost:8000](http://localhost:8000)

---

## 💡 Usage

* Visit the home page to create a new form entry.
* View the list of entries.
* Edit or delete entries using the buttons provided.

---

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

---

## 📄 License

This project is licensed under the Apache 2.0 License.

---

## 📬 Contact

For suggestions, feel free to open an issue or contact via GitHub.

---

## 📌 Note on `laravel.sql` File

The `laravel.sql` file provided in this repository is for reference purposes only.

You **do not** need to manually import this SQL file into your database.

Instead, this Laravel project uses Laravel's built-in migration system to automatically create all required database tables and structure.

✅ **How to Set Up the Database:**

1. Make sure your `.env` file is properly configured with your MySQL credentials.
2. Create a new database (e.g., `form-submit`) in your MySQL server.
3. Run the following command:

   ```bash
   php artisan migrate
   ```

This will automatically create all necessary tables without any manual SQL imports.
