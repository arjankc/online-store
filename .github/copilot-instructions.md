# Online Store E-Commerce Application
PHP-based online store with admin panel and Docusaurus documentation site. Features customer-facing website, shopping cart, payment integration (eSewa, PayPal), and comprehensive admin management dashboard.

Always reference these instructions first and fallback to search or bash commands only when you encounter unexpected information that does not match the info here.

## Working Effectively

### Complete Bootstrap and Setup
- Install and start MySQL database server:
  - `sudo systemctl start mysql`
  - Create database (try each command until one works):
    - `sudo mysql -u root -e "CREATE DATABASE IF NOT EXISTS mystore;"` OR
    - `sudo mysql -e "CREATE DATABASE IF NOT EXISTS mystore;"` OR  
    - `mysql -u debian-sys-maint -p$(sudo grep password /etc/mysql/debian.cnf | head -1 | cut -d= -f2 | tr -d ' ') -e "CREATE DATABASE IF NOT EXISTS mystore;"`
  - Import database (use same user that worked above):
    - `sudo mysql -u root mystore < "database files/mystore.sql"` OR
    - `sudo mysql mystore < "database files/mystore.sql"` OR
    - `mysql -u debian-sys-maint -p$(sudo grep password /etc/mysql/debian.cnf | head -1 | cut -d= -f2 | tr -d ' ') mystore < "database files/mystore.sql"`
  - Verify setup: `mysql -u root -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'mystore';"` (or use debian-sys-maint if root fails)
    - Should show 7 tables (admins, categories, contact, customers, orders, order_details, products)
  - **Note**: If root user access fails, MySQL may require alternative authentication. This is normal and the application will still work.

- Install and start web server:
  - `sudo systemctl start apache2`
  - Copy project to web root: `sudo cp -r . /var/www/html/online-store`
  - Set permissions: `sudo chown -R www-data:www-data /var/www/html/online-store`

- Documentation site setup:
  - `cd docs`
  - `npm install` -- takes 90 seconds. NEVER CANCEL. Set timeout to 300+ seconds.
  - `npm run build` -- takes 25 seconds. NEVER CANCEL. Set timeout to 120+ seconds.

### Running the Applications
- **Main Website**: Navigate to `http://localhost/online-store`
  - ALWAYS verify database connection works by checking products load
  - Test user registration and login functionality
  
- **Admin Panel**: Navigate to `http://localhost/online-store/admin`
  - **Credentials**: admin@gmail.com / mystore
  - ALWAYS test admin login and product management after changes

- **Documentation Site**:
  - Development mode: `cd docs && npm run start` -- starts in ~8 seconds, serves at `http://localhost:3000`
  - Production build: `cd docs && npm run serve` -- serves built site at `http://localhost:3000`

## Database Configuration
The application uses MySQL database `mystore` with default connection settings in `files/connect.php`:
```php
$host="localhost";
$user="root"; 
$password="";
$dbname="mystore";
```
Update these values if your MySQL setup differs from defaults.

## Validation
- **ALWAYS test complete user workflows after making changes:**
  - Browse products from homepage: `curl -s http://localhost/online-store/ | grep -i "product"`
  - Verify products load from database: `curl -s http://localhost/online-store/product.php | grep -o "product" | wc -l` (should show > 0)
  - Test shopping cart functionality: `curl -s http://localhost/online-store/cart.php | grep -i "cart"`
  - Test customer registration/login pages load
  - Access admin panel: `curl -s http://localhost/online-store/admin/adminlogin.php | grep -i "admin login"`

- **ALWAYS test documentation site functionality:**
  - Build documentation successfully without errors
  - Verify site serves: `curl -s http://localhost:3000/ | grep -i "pahiran"` (should find site title)
  - Test both development (`npm run start`) and production (`npm run serve`) modes

- **Database integrity checks:**
  - Verify all 7 tables exist: `mysql -u root -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'mystore';"` 
  - Check sample data loaded: `mysql -u root -e "SELECT COUNT(*) FROM mystore.products;"` (should show 20 products)
  - Verify admin user: `mysql -u root -e "SELECT username FROM mystore.admins;"` (should show admin@gmail.com)
  - **Note**: If root access fails, substitute with working MySQL user from setup step

- **Manual UI validation (use browser to verify):**
  - Navigate to `http://localhost/online-store` - should show Product Overview with category buttons
  - Navigate to `http://localhost/online-store/admin` - should show admin dashboard with navigation
  - Navigate to `http://localhost:3000` (after starting docs server) - should show Pahiran documentation site
  - All pages should load without database connection errors

## Build and Deployment Timings
- **Documentation npm install**: 25-90 seconds depending on network -- NEVER CANCEL, use 300+ second timeout
- **Documentation build**: 15-25 seconds -- NEVER CANCEL, use 120+ second timeout  
- **Documentation development server startup**: 6-8 seconds
- **Apache/MySQL service startup**: Instantaneous
- **Database import**: 2-3 seconds for sample data

## Common Tasks

### Repository Structure
```
/                           # Main PHP application
├── index.php              # Homepage  
├── product.php             # Product listing
├── cart.php               # Shopping cart
├── contact.php             # Contact form
├── admin/                 # Admin panel
│   ├── index.php          # Admin dashboard
│   ├── products.php       # Product management
│   ├── orders.php         # Order management
│   └── adminlogin.php     # Admin login
├── files/                 # PHP includes
│   ├── connect.php        # Database connection
│   ├── header.php         # Common header
│   └── footer.php         # Common footer  
├── handler/               # Form processing
│   ├── orderhandler.php   # Order processing
│   ├── paypal.php         # PayPal integration
│   └── customerlogin.php  # Authentication
├── database files/        # SQL schema files
│   └── mystore.sql        # Main database dump
├── docs/                  # Docusaurus documentation
│   ├── package.json       # Node.js dependencies
│   ├── docs/              # Documentation content
│   └── src/               # Custom pages/components
├── css/                   # Stylesheets
├── js/                    # JavaScript files
├── images/                # Static images
└── uploads/               # Product image uploads
```

### Key Configuration Files
- **Database**: `files/connect.php` - MySQL connection settings
- **Documentation**: `docs/package.json`, `docs/docusaurus.config.js`
- **Payment**: `esewa.php` (eSewa config), `handler/paypal.php` (PayPal config)

### Database Schema Summary
- `admins`: Admin user credentials (default: admin@gmail.com/mystore)  
- `categories`: Product categories
- `products`: Product catalog with images and descriptions
- `customers`: Customer accounts and authentication
- `orders`: Order header information
- `order_details`: Individual order line items
- `contact`: Contact form submissions

### Payment Gateway Configuration
- **eSewa**: Test environment configured in `esewa.php`
  - Merchant code: `epay_payment` (test)
  - Update URLs and credentials for production
- **PayPal**: Sandbox configured in `handler/paypal.php`  
  - Update `client-id` for production environment

### Troubleshooting
- **Database connection fails**: Verify MySQL service running and credentials in `files/connect.php`
  - If root access fails during setup, MySQL may require authentication. This is normal.
  - The application will work with default credentials (root/no password) if properly configured
- **Products not loading**: Check database import completed successfully (should have 20 products)
- **Admin panel access denied**: Verify admin credentials (admin@gmail.com/mystore) 
- **Documentation build fails**: Ensure Node.js version compatibility and npm install completed
- **Apache permission errors**: Check file ownership with `sudo chown -R www-data:www-data /var/www/html/online-store`
- **Port conflicts**: Ensure Apache uses port 80 and docs server uses port 3000
- **PHP errors visible on page**: This is normal in development mode and doesn't affect functionality

### Important Notes
- **MySQL Authentication**: Different systems may require different MySQL authentication methods. The instructions provide fallback options.
- **No CI/CD**: This project has no existing build automation, linting, or continuous integration workflows
- **Payment Testing**: eSewa and PayPal integrations are in test/sandbox mode
- **File Uploads**: Product image uploads go to `uploads/` directory and require write permissions

Remember to ALWAYS test both customer-facing functionality and admin management features after making any changes to ensure full application integrity.