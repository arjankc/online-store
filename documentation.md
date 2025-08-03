# Online Store - Project Documentation

This document provides a detailed overview of the Online Store project, including its database schema, file structure, and key functionalities.

## 1. Database Schema

The project uses a MySQL database named `mystore`. The database consists of the following tables:

### `admins`

Stores the login credentials for administrators.

| Column   | Type        | Description                                 |
| :------- | :---------- | :------------------------------------------ |
| `id`     | `int(11)`   | Primary key, auto-incremented.              |
| `username` | `varchar(30)` | The username of the administrator.          |
| `password` | `varchar(30)` | The password of the administrator.          |

### `categories`

Stores product categories.

| Column     | Type        | Description                                 |
| :--------- | :---------- | :------------------------------------------ |
| `id`       | `int(11)`   | Primary key, auto-incremented.              |
| `name`     | `varchar(30)` | The name of the category.                   |
| `created_at` | `timestamp` | The date and time the category was created. |
| `updated_at` | `timestamp` | The date and time the category was last updated. |

### `contact`

Stores contact form submissions from users.

| Column     | Type         | Description                                   |
| :--------- | :----------- | :-------------------------------------------- |
| `id`       | `int(11)`    | Primary key, auto-incremented.                |
| `email`    | `varchar(30)`  | The email address of the user.                |
| `msg`      | `mediumtext` | The message submitted by the user.            |
| `created_at` | `timestamp`  | The date and time the message was submitted. |
| `updated_at` | `timestamp`  | The date and time the message was last updated. |

### `customers`

Stores customer information and login credentials.

| Column     | Type        | Description                                   |
| :--------- | :---------- | :-------------------------------------------- |
| `id`       | `int(11)`   | Primary key, auto-incremented.                |
| `username` | `varchar(30)` | The username (email address) of the customer. |
| `password` | `text`      | The hashed password of the customer.          |
| `created_at` | `timestamp` | The date and time the customer registered.    |
| `updated_at` | `timestamp` | The date and time the customer was last updated. |

### `orders`

Stores information about customer orders.

| Column      | Type        | Description                                  |
| :---------- | :---------- | :------------------------------------------- |
| `id`        | `int(11)`   | Primary key, auto-incremented.               |
| `customer_id` | `int(11)`   | Foreign key referencing the `customers` table. |
| `address`   | `varchar(50)` | The shipping address for the order.          |
| `phone`     | `varchar(30)` | The phone number for the order.              |
| `total`     | `int(20)`   | The total amount of the order.               |
| `created_at`  | `timestamp` | The date and time the order was placed.      |
| `updated_at`  | `timestamp` | The date and time the order was last updated.  |

### `order_details`

Stores the details of each product in an order.

| Column     | Type      | Description                                    |
| :--------- | :-------- | :--------------------------------------------- |
| `id`       | `int(11)` | Primary key, auto-incremented.                 |
| `order_id` | `int(11)` | Foreign key referencing the `orders` table.    |
| `product_id` | `int(11)` | Foreign key referencing the `products` table.  |
| `quantity` | `int(11)` | The quantity of the product ordered.           |
| `created_at` | `timestamp` | The date and time the order detail was created. |
| `updated_at` | `timestamp` | The date and time the order detail was last updated. |

### `products`

Stores information about the products available in the store.

| Column      | Type         | Description                                     |
| :---------- | :----------- | :---------------------------------------------- |
| `id`        | `int(11)`    | Primary key, auto-incremented.                  |
| `name`      | `varchar(30)`  | The name of the product.                        |
| `price`     | `int(11)`    | The price of the product.                       |
| `picture`   | `varchar(30)`  | The file path of the product image.             |
| `description` | `mediumtext` | A detailed description of the product.          |
| `category_id` | `int(11)`    | Foreign key referencing the `categories` table. |
| `created_at`  | `timestamp`  | The date and time the product was added.        |
| `updated_at`  | `timestamp`  | The date and time the product was last updated.   |

## 2. File Structure

The project is organized into the following directories and files:

### Root Directory

*   `index.php`: The main landing page of the website.
*   `about.php`: The page that displays information about the store.
*   `cart.php`, `cart2.php`, `carthandler.php`, `cartremove.php`, `cartupdate.php`: Files related to shopping cart functionality.
*   `catview.php`: Displays products by category.
*   `contact.php`: The contact page with a form for user inquiries.
*   `customerforms.php`: Contains the customer registration and login forms.
*   `details.php`: Displays the detailed information of a single product.
*   `esewa.php`: Handles the eSewa payment gateway integration.
*   `product.php`: Displays all products.
*   `README.md`: The main README file for the project.
*   `documentation.md`: This file.

### `admin/`

This directory contains all the files for the admin panel.

*   `index.php`: The main dashboard for the admin panel.
*   `categories.php`, `cathandler.php`: Files for managing product categories.
*   `products.php`, `producthandler.php`, `prodelete.php`, `proshow.php`, `proupdate.php`, `proupdatehandler.php`: Files for managing products.
*   `orders.php`, `orderdelete.php`, `ordershow.php`: Files for managing customer orders.
*   `adminlogin.php`: The login page for administrators.
*   `adminfiles/`: Contains reusable components for the admin panel, such as the header, footer, and sidebar.

### `css/`

Contains the CSS files for styling the website.

*   `main.css`: The main stylesheet.
*   `util.css`: Utility classes.

### `database files/`

Contains the SQL dump files for the database.

*   `mystore.sql`: The main database schema with sample data.

### `files/`

Contains reusable PHP components for the main website.

*   `connect.php`: The database connection file.
*   `header.php`, `footer.php`, `head.php`, `banner.php`, `slider.php`: Reusable view components.

### `handler/`

Contains PHP files that handle form submissions and other backend logic.

*   `contact.php`: Handles the contact form submission.
*   `customerlogin.php`, `customerregister.php`, `customerlogout.php`, `customersession.php`: Handle customer authentication.
*   `orderhandler.php`: Handles the order submission process.
*   `paypal.php`: Handles the PayPal payment gateway integration.
*   `sucess.php`, `fail.php`: Success and failure pages for payment gateways.

### `images/`

Contains images used in the website design.

### `js/`

Contains JavaScript files for the website.

*   `main.js`: The main JavaScript file.

### `uploads/`

This directory stores the product images uploaded by the administrator.

### `vendor/`

Contains third-party libraries and plugins used in the project, such as Bootstrap and jQuery.
