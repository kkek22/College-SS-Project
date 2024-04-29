CREATE DATABASE IF NOT EXISTS ss_project;

USE ss_project;

CREATE TABLE IF NOT EXISTS contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    phone_number VARCHAR(20),
    lead_source VARCHAR(50),
    project_name VARCHAR(100),
    services VARCHAR(255),
    budget VARCHAR(20),
    description TEXT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
