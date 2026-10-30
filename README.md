\# CRUD Applications (PHP \& MySQL)



A clean and functional web application built with PHP and MySQL that allows users to perform basic CRUD (Create, Read, Update, Delete) operations.



\---



\## 🚀 Features



\* \*\*Create:\*\* Add new user/student records through a simple web form (`insert\_data.php`, `basicform.php`).

\* \*\*Read:\*\* Display all records dynamically on the main dashboard (`index.php`).

\* \*\*Update:\*\* Edit existing records with pre-filled inputs (`update\_page.php`).

\* \*\*Delete:\*\* Remove records from the database with immediate confirmation (`delete\_page.php`).

\* \*\*Modular Structure:\*\* Cleanly split header, footer, database connection, and custom CSS styling.



\---



\## 🛠️ Tech Stack



\* \*\*Front-end:\*\* HTML5, CSS3

\* \*\*Back-end:\*\* PHP

\* \*\*Database:\*\* MySQL

\* \*\*Local Server:\*\* XAMPP / Apache



\---



\## 📁 Project Structure



```text

crud\_applications/

├── basicform.php       # Form input interface

├── dbcon.php           # MySQL database connection script

├── delete\_page.php     # Deletion handler

├── footer.php          # Reusable footer layout

├── header.php          # Reusable header layout

├── index.php           # Main dashboard listing records

├── insert\_data.php     # Logic to insert new rows into MySQL

├── style.css           # Styling for tables, forms, and layout

└── update\_page.php     # Logic \& form to edit records

