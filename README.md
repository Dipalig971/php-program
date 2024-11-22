# Student Form

A simple web application for managing student data using PHP and MySQL. The application demonstrates the use of CRUD (Create, Read, Update, Delete) operations with a clean and responsive interface built using Bootstrap.

## Features:
- Add a new student (Create)
- View all students in a table (Read)
- Edit student details (Update)
- Delete a student (Delete)
- Responsive design with Bootstrap 5
- Secure data handling with prepared statements (SQL Injection prevention)

## Prerequisites:
- PHP >= 7.4
- MySQL Database
- Web Server (e.g., Apache, Nginx, XAMPP)

### Folder Structure
```
/project-folder
├── config/
│   └── config.php    // Contains the database connection and CRUD logic
├── index.php         // Main page for adding products
├── showdata.php      // Displays the product list
├── updatedata.php    // Page for updating product details
└── README.md         // Documentation file
```

---


### Dependencies
- **PHP Sessions:** Used to pass data between pages.
- **Bootstrap 5.3.3:** For styling and responsive layout.

---
### Setup Instructions
1. **Clone or Download** the repository to your local machine.
2. Place the project folder in your web server's root directory (`htdocs` for XAMPP).
3. **Import Database:**
   - Open **phpMyAdmin** in your browser.
   - Create a new database named `student`.
   - Import the following SQL script to create the necessary table:
     ```sql
     CREATE TABLE product (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL,
         age INTEGER NOT NULL,
         phone INTEGER NOT NULL
     );
     ```
4. Update the database credentials in `config/config.php` if necessary:
   ```php
   private $localhost = "localhost";
   private $username = "root";
   private $password = ""; /
   private $database = "student";
   ```
5. **Run the Application:**
   - Open your browser and navigate to: `http://localhost/project-folder/index.php`.

---

## Add Detail

![Screenshot 2024-11-22 115151](https://github.com/user-attachments/assets/89aa2998-c5b2-43e6-a6ab-2ca51b356374)

## Show Data

![Screenshot 2024-11-22 115218](https://github.com/user-attachments/assets/ffdd9c31-5dc7-4df9-83c9-79645f75ba0b)

## Update Data

![Screenshot 2024-11-22 115228](https://github.com/user-attachments/assets/d3a3c60a-b888-4621-b534-b7cae095c0cc)

## video
