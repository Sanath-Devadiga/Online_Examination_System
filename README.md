
# Online Examination System

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/your-username/your-repo/graphs/commit-activity)
[![Open Source Love svg1](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)](https://opensource.org/)

## Overview

The Online Examination System is a web-based application designed to facilitate conducting examinations online. It provides a platform for administrators to create and manage exams, and for students to take these exams and receive their results. This system aims to replace traditional paper-based exams with a more efficient and convenient online solution.

### Key Features

-   **User Authentication:** Secure login for administrators and students.
-   **Exam Creation:** Administrators can create, edit, and delete exams.
-   **Question Management:** Support for various question types (e.g., multiple choice, true/false).
-   **Exam Taking:** Students can take exams online with a timer.
-   **Automated Grading:** Instant grading upon exam submission.
-   **Result Reporting:** Detailed reports for administrators and students.
-   **User Management:** Administrators can manage student accounts.

## Installation

Follow these steps to set up the Online Examination System on your local machine or server.

### Prerequisites

-   [ ]  **Web Server:** (e.g., Apache, Nginx)
-   [ ]  **PHP:** Version 7.2 or higher
-   [ ]  **MySQL:** Version 5.6 or higher
-   [ ]  **Composer:** Dependency Manager for PHP

### Step-by-Step Instructions

1.  **Clone the repository:**

    3.  **Database Configuration:**

    -   Create a new database in MySQL.
    -   Rename `.env.example` to `.env` and update the database credentials:

env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
        6.  **Access the application:**

    Open your web browser and navigate to the project URL.

## Usage

### Administrator

1.  **Login:**
    -   Access the admin login page via `/admin/login`.
    -   Enter your credentials (default: username - `admin`, password - `password`).

    ![Admin Login Screenshot](link-to-admin-login-screenshot.png)

2.  **Dashboard:**
    -   The dashboard provides an overview of the system.

    ![Admin Dashboard Screenshot](link-to-admin-dashboard-screenshot.png)

3.  **Exam Management:**
    -   Create, edit, and delete exams from the "Exams" section.

    ![Exam Management Screenshot](link-to-exam-management-screenshot.png)

4.  **Question Management:**
    -   Add, edit, and delete questions for each exam.

    ![Question Management Screenshot](link-to-question-management-screenshot.png)

5.  **User Management:**
    -   Manage student accounts (create, edit, delete).

    ![User Management Screenshot](link-to-user-management-screenshot.png)

### Student

1.  **Login:**
    -   Access the student login page via `/student/login`.
    -   Enter your credentials (provided by the administrator).

    ![Student Login Screenshot](link-to-student-login-screenshot.png)

2.  **Exam List:**
    -   View available exams on the exam list page.

    ![Exam List Screenshot](link-to-exam-list-screenshot.png)

3.  **Taking Exams:**
    -   Click on an exam to start. Follow the instructions and answer the questions.

    ![Taking Exam Screenshot](link-to-taking-exam-screenshot.png)

4.  **Results:**
    -   View your results after submitting the exam.

    ![Results Screenshot](link-to-results-screenshot.png)

> **Note:** Replace the placeholder image links with actual screenshots of the application.

## Contribution

We welcome contributions from the community! To contribute to the Online Examination System, follow these guidelines:

1.  **Fork the repository.**
2.  **Create a new branch** for your feature or bug fix.
3.  **Make your changes** and ensure the code is well-documented.
4.  **Test your changes** thoroughly.
5.  **Submit a pull request** with a clear description of your changes.

### Code Style

-   Follow the PSR-12 coding standard.
-   Write clear and concise commit messages.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Technologies Used

-   PHP
-   MySQL
-   HTML
-   CSS
-   JavaScript
-   [ ]  Laravel (or relevant framework)
-   [ ]  Bootstrap (or relevant CSS framework)

## Troubleshooting

### Issue: Database connection error

**Solution:**
-   Verify that the database server is running.
-   Double-check the database credentials in the `.env` file.
-   Ensure the database exists and the user has the necessary permissions.

### Issue: Page not found error

**Solution:**
-   Ensure the web server is correctly configured to point to the `public` directory.
-   Verify that `mod_rewrite` is enabled (if using Apache).
-   Check the route definitions in the application.

### Issue: Composer install fails

**Solution:**
-   Make sure you have the correct version of PHP installed.
-   Check the PHP extensions required by the project and enable them in `php.ini`.
-   Update composer to the latest version.

