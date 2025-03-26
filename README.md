# Student-Management-
The Student Management System is a web-based application designed to streamline student record management in educational institutions. Developed using PHP, HTML, CSS, and JavaScript, it enables administrators, teachers, and students to manage academic and personal data efficiently.
---

Step-by-Step Guide to Running the Project on Your Device

Step 1: Install Required Software

Ensure the target device has:

1. XAMPP 
2. Web Browser – Chrome, Firefox, or Edge
3. Text Editor – VS Code, Sublime Text

Step 2: Copy Project Files

1. Copy your project folder
2. Place it inside the htdocs directory of XAMPP:

C:\xampp\htdocs\student_management_system\



Step 3: Import Database

1. Open XAMPP Control Panel and start Apache & MySQL.
2. Open a browser and go to:

http://localhost/phpmyadmin/


3. Click "Databases" → Create a new database (use the same name as in config.php).
4. Click "Import", select the provided .sql file, and import it.(form.sql)
Step 4: Verify Database Configuration

Since you've provided a config.php file, just ensure:

The database name in config.php matches the created database.

Default credentials (username: root, password: "" for XAMPP) are correct.



Step 5: Run the Project

1. Open a browser and go to:

http://localhost/student_management_system/


2. Your project should now be live!



Step 6: Troubleshooting (If Needed)

If the site doesn’t load, ensure Apache & MySQL are running.

If there’s a database error, verify config.php settings.

If CSS/JS doesn’t load, check file paths in your code.



---

This should work smoothly! Let me know if you need any changes.

