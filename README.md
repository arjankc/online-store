# Online Store - 5th Semester Project

This project is an e-commerce website developed as part of the 5th-semester curriculum for the BCA (Bachelor of Computer Applications) program at Tribhuvan University, focusing on Management Information Systems (MIS) and E-business.

## Features

*   **Customer-facing Website:** A complete online store where customers can browse products, add them to their cart, and make purchases.
*   **Admin Panel:** A comprehensive dashboard for administrators to manage products, categories, orders, and view customer information.
*   **Shopping Cart:** A fully functional shopping cart that allows users to add, remove, and update products.
*   **Payment Integration:** The website integrates with two popular payment gateways:
    *   **eSewa:** A popular digital wallet in Nepal.
    *   **PayPal:** A globally recognized online payment system.
*   **Product Management:** Admins can easily add, edit, and delete products and product categories.
*   **Order Management:** Admins can view and manage customer orders.
*   **Customer Registration and Login:** Users can create accounts and log in to manage their information and view their order history.

## Technologies Used

*   **Frontend:**
    *   HTML5
    *   CSS3
    *   JavaScript
    *   jQuery
    *   Bootstrap
*   **Backend:**
    *   PHP
*   **Database:**
    *   MySQL (MariaDB)

## Setup Instructions

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/online-store.git
    ```
2.  **Database Setup:**
    *   Open your MySQL database management tool (e.g., phpMyAdmin).
    *   Create a new database named `mystore`.
    *   Import the `database files/mystore.sql` file into the `mystore` database. This will create the necessary tables and populate them with sample data.
3.  **Configure Database Connection:**
    *   Open the `files/connect.php` file.
    *   Update the database connection details if they differ from the default values:
        ```php
        $host="localhost";
        $user="root";
        $password="";
        $dbname="mystore";
        ```
4.  **Run the application:**
    *   Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
    *   Open your web browser and navigate to `http://localhost/online-store`.

## Admin Panel

*   **URL:** `http://localhost/online-store/admin`
*   **Username:** admin@gmail.com
*   **Password:** mystore

## Payment Gateway Configuration

### eSewa

The eSewa integration is configured for a test environment. To use it in a live environment, you will need to update the following in `esewa.php`:

*   **`scd` (merchant code):** Replace `epay_payment` with your live merchant code.
*   **`su` (success URL):** Update the success redirect URL to your live server.
*   **`fu` (failure URL):** Update the failure redirect URL to your live server.

### PayPal

The PayPal integration is configured with a sandbox account. To use it in a live environment, you will need to update the `client-id` in `handler/paypal.php` with your live PayPal client ID.
