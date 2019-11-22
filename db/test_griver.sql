DROP DATABASE IF EXISTS test_griver;
CREATE DATABASE test_griver;
USE test_griver;

/* Company */
CREATE TABLE company (
    id INT NOT NULL AUTO_INCREMENT,
    company_name VARCHAR(100) NOT NULL,
    company_rfc VARCHAR(100) NOT NULL,
    company_address VARCHAR(100) NOT NULL,
    business_stream VARCHAR(100) NOT NULL,
    company_website_url VARCHAR(255) NOT NULL,
    company_country VARCHAR(50),
    PRIMARY KEY (id)
);

/* Contact */
CREATE TABLE contact (
    id INT NOT NULL AUTO_INCREMENT,
    company_id INT NOT NULL,
    contact_name VARCHAR(50) NOT NULL,
    contact_address VARCHAR(100) NOT NULL,
    contact_email VARCHAR(100) NOT NULL,
    contact_phone VARCHAR(10) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FK_Company_Contact FOREIGN KEY (company_id) REFERENCES company (id)
);

/* INSERTS ----------------------------------------------------------------------*/
/* Company */
INSERT INTO company (company_name, company_rfc, company_address, business_stream, company_website_url, company_country) 
    VALUES ( 'Company 1', '1111111111', 'Dirección 1, Colonia 1', 'Bussiness 1', 'www.company1.com', 'Pais 1');
INSERT INTO company (company_name, company_rfc, company_address, business_stream, company_website_url, company_country) 
    VALUES ( 'Company 2', '2222222222', 'Dirección 2, Colonia 2', 'Bussiness 2', 'www.company2.com', 'Pais 2');
INSERT INTO company (company_name, company_rfc, company_address, business_stream, company_website_url, company_country) 
    VALUES ( 'Company 3', '3333333333', 'Dirección 3, Colonia 3', 'Bussiness 3', 'www.company3.com', 'Pais 3');

/* Contact */
INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 1, 'Name 1', 'Dirección 1, Colonia 1', 'name1@name1.com', '1111111111');
INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 1, 'Name 2', 'Dirección 2, Colonia 2', 'name2@name2.com', '2222222222');
INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 1, 'Name 3', 'Dirección 3, Colonia 3', 'name3@name3.com', '3333333333');

INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 2, 'Name 4', 'Dirección 4, Colonia 4', 'name4@name4.com', '4444444444');
INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 2, 'Name 5', 'Dirección 5, Colonia 5', 'name5@name5.com', '5555555555');
INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 2, 'Name 6', 'Dirección 6, Colonia 6', 'name6@name6.com', '6666666666');

INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 3, 'Name 7', 'Dirección 7, Colonia 7', 'name7@name7.com', '7777777777');
INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 3, 'Name 8', 'Dirección 8, Colonia 8', 'name8@name8.com', '8888888888');
INSERT INTO contact (company_id, contact_name, contact_address, contact_email, contact_phone) 
    VALUES ( 3, 'Name 9', 'Dirección 9, Colonia 9', 'name9@name9.com', '9999999999');
