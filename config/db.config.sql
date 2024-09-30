-- Drop Database/Schema if Exists
DROP DATABASE IF EXISTS `loan_management`;

-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS `loan_management`;

-- Use the loan_management database
USE `loan_management`;

-- Create users table
CREATE TABLE IF NOT EXISTS `users` (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,       -- Ensure unique username
    email VARCHAR(100) NOT NULL UNIQUE,         -- Ensure unique email
    password VARCHAR(255) NOT NULL,
    role ENUM('Admin', 'Clerk') NOT NULL DEFAULT 'Clerk',      -- Only admin or clerk roles
    is_active ENUM('Active', 'Pending', 'Deactivated') NOT NULL DEFAULT 'Active',             -- Only active users can log in
    creator INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_creator FOREIGN KEY (creator) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Create customers table
CREATE TABLE IF NOT EXISTS `customers` (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,                 -- Customer's name
    lname VARCHAR(100) NOT NULL,                 -- Customer's name
    email VARCHAR(100) NOT NULL UNIQUE,         -- Customer's email (unique)
    dob DATE NOT NULL,                           -- Customer's date of birth
    phone_number VARCHAR(20) NOT NULL UNIQUE,          -- Customer's phone number
    id_number VARCHAR(20) NOT NULL UNIQUE,      -- Unique ID number
    address VARCHAR(255) NOT NULL,               -- Customer's address
    is_active ENUM('Active', 'Pending', 'Deactivated') NOT NULL DEFAULT 'Active',             -- Only active users can log in
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    registerd_by INT NOT NULL,
    CONSTRAINT fk_registerd_by FOREIGN KEY (registerd_by) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Create loan products table
CREATE TABLE IF NOT EXISTS `loan_products` (
    loan_product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,                  -- Name of the loan product
    product_code VARCHAR(100) NOT NULL UNIQUE,            -- Unique code for the loan product
    min_amount DECIMAL(10, 2) NOT NULL,         -- Minimum loan amount
    max_amount DECIMAL(10, 2) NOT NULL,         -- Maximum loan amount
    monthly_rate DECIMAL(5, 2) NOT NULL,       -- Interest rate
    currency ENUM('USD', 'KES') NOT NULL,       -- Currency type
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create loans table
CREATE TABLE IF NOT EXISTS `loans` (
    loan_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT NOT NULL,                    -- Foreign key to customers table
    product_id INT NOT NULL,                     -- Foreign key to loan_products table
    loan_amount DECIMAL(10, 2) NOT NULL,
    interest_rate DECIMAL(5, 2) NOT NULL,
    loan_status ENUM('Pending', 'Approved', 'Disbursed', 'Repaid', 'Rejected') DEFAULT 'Pending',
    approved_by INT,                             -- Admin or clerk who approved the loan (foreign key to users table)
    approval_date TIMESTAMP NULL,
    disbursement_date TIMESTAMP NULL,
    repayment_date TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    due_date DATE NOT NULL,
    qualifications TEXT,                         -- Qualifications required for the loan
    CONSTRAINT fk_customer_id FOREIGN KEY (customer_id) REFERENCES customers(customer_id) ON DELETE CASCADE,
    CONSTRAINT fk_product_id FOREIGN KEY (product_id) REFERENCES loan_products(loan_product_id) ON DELETE CASCADE,
    CONSTRAINT fk_approved_by FOREIGN KEY (approved_by) REFERENCES users(user_id) ON DELETE SET NULL
);

-- Indexes for faster queries
CREATE INDEX idx_username ON users(username);
CREATE INDEX idx_email ON users(email);
CREATE INDEX idx_customer_email ON customers(email);
CREATE INDEX idx_customer_id_number ON customers(id_number);
CREATE INDEX idx_product_code ON loan_products(code);
