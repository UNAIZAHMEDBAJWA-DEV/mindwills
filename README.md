Yii2 Customer CRUD
This project is a simple Customer CRUD application built using the Yii2 Framework. It demonstrates the implementation of a basic CRUD (Create, Read, Update, Delete) functionality with proper architectural patterns.

Project Setup
Follow these steps to set up and run the project locally:

1. Clone the Repository
Clone this repository to your local machine using the following command:

bash
Copy
Edit
git clone https://github.com/UNAIZAHMEDBAJWA-DEV/mindwills.git
2. Install Dependencies
Navigate to the project directory and install the necessary dependencies using Composer:

bash
Copy
Edit
cd mindwills
composer install
3. Database Configuration
Create a database and update your .env file (or config/db.php) to match the database configuration.

php
Copy
Edit
'db' => [
    'dsn' => 'mysql:host=localhost;dbname=your_db_name',
    'username' => 'your_db_user',
    'password' => 'your_db_password',
    'charset' => 'utf8',
],
4. Run Migrations
Run the database migrations to create the necessary tables:

bash
Copy
Edit
php yii migrate
This will create the required tables (such as customer) in your database.

5. Run the Application
To run the Yii2 application, you can use the built-in PHP server:

bash
Copy
Edit
php yii serve
Now, you can access the application at http://localhost:8080.

CRUD Implementation
1. Create a New Customer
To create a new customer, visit the Customer Create page:

URL: http://localhost:8080/customer/create

On this page, you'll be able to enter customer details, such as name, email, and phone.

2. View All Customers
To view all customers, visit the Customer Index page:

URL: http://localhost:8080/customer/index

This page will display a table of all customers in the database.

3. Update Customer Details
To update customer details, visit the Customer Update page:

URL: http://localhost:8080/customer/update?id={customer_id}

You'll be able to modify customer details and save the changes.

4. Delete a Customer
To delete a customer, visit the Customer Delete page:

URL: http://localhost:8080/customer/delete?id={customer_id}

This will remove the customer from the database.

Commands Used
Gii CRUD Generator Command

To generate the CRUD operations for the Customer model, I used Yii2’s built-in Gii tool.

Generate Model
First, I created the model using the following command:

bash
Copy
Edit
php yii gii/model --modelClass=backend\\models\\Customer --tableName=customer
Generate CRUD for Customer
Then, I generated the CRUD operations using:

bash
Copy
Edit
php yii gii/crud --modelClass=backend\\models\\Customer --controllerClass=backend\\controllers\\CustomerController --viewPath=@backend/views/customer --interactive=0
Run Database Migrations
To create the database tables, I ran the migration command:

bash
Copy
Edit
php yii migrate
Folder Structure
The application is structured with a modular approach using frontend and backend modules:

markdown
Copy
Edit
- backend/
  - controllers/
  - models/
  - views/
    - customer/
      - create.php
      - index.php
      - update.php
      - delete.php
- common/
  - config/
  - models/
- frontend/
- config/
  - db.php
  - main.php
Conclusion
This project serves as a simple example of how to implement a basic CRUD system in Yii2. The focus is on demonstrating proper use of Yii2 features like Gii code generation and MVC architecture.
