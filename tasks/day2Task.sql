CREATE TABLE Employee (
    id INT(11) NOT NULL AUTO_INCREMENT,
    job_title VARCHAR(30) NOT NULL,
    salary INT(20) NOT NULL,
    manager VARCHAR(15) NOT NULL,
    fname VARCHAR(15) NOT NULL,
    lname VARCHAR(15) NOT NULL,
    PRIMARY KEY(id)
); 
CREATE TABLE Employee (
    id INT(11) NOT NULL AUTO_INCREMENT,
    job_title VARCHAR(30) NOT NULL,
    salary INT(20) NOT NULL,
    manager_id VARCHAR(15) NOT NULL,
    fname VARCHAR(15) NOT NULL,
    lname VARCHAR(15) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (manager_id) REFERENCES managers(manager_id) 
); 
---------------------------------------------------
CREATE TABLE Department (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(15) NOT NULL,
    manager VARCHAR(15) NOT NULL,
    PRIMARY KEY(id)
);
---------------------------------------------------
CREATE TABLE project(
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(15) NOT NULL,
    start_date DATE DEFAULT CURRENT_DATE,
    end_date DATE,
    PRIMARY KEY(id)
);
----------------------------------------------------
CREATE TABLE location(
    id INT(11) NOT NULL AUTO_INCREMENT,
    city VARCHAR(15) NOT NULL,
    country VARCHAR(15) NOT NULL,
    PRIMARY KEY(id)
);
-----------------------------------------------------
INSERT INTO `department` (`department_id`, `name`, `manager_id`) VALUES (NULL, 'developing', 1);
INSERT INTO `department` (`department_id`, `name`, `manager_id`) VALUES (NULL, 'marketing', 1);
INSERT INTO `department` (`department_id`, `name`, `manager_id`) VALUES (NULL, 'logistic', 2);
INSERT INTO `department` (`department_id`, `name`, `manager_id`) VALUES (NULL, 'managing', 2);
------------------------------------------------------
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager_id`,`fname`,`lname`) VALUES (NULL, 'front_end', 5000, 1,'ali','mohsen');
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager_id`,`fname`,`lname`) VALUES (NULL, 'back_end', 4000, 1,'anas','aseel');
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager_id`,`fname`,`lname`) VALUES (NULL, 'front_end', 8000, 1,'david','dansel');
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager_id`,`fname`,`lname`) VALUES (NULL, 'back_end', 3000, 1,'isa','monther');
------------------------------------------------------
INSERT INTO `location`(`location_id`,`city`,`country`) VALUES (NULL,'aqaba','jordan')
INSERT INTO `location`(`location_id`,`city`,`country`) VALUES (NULL,'amman','jordan')
INSERT INTO `location`(`location_id`,`city`,`country`) VALUES (NULL,'aqaba','jordan')
INSERT INTO `location`(`location_id`,`city`,`country`) VALUES (NULL,'irbid ','jordan')
------------------------------------------------------
INSERT INTO `project`(`project_id`,`name`,`employee_id`,`start_date`,`end_date`) VALUES (NULL,1,'LMS','2025-03-13','2025-04-19')
INSERT INTO `project`(`project_id`,`name`,`employee_id`,`start_date`,`end_date`) VALUES (NULL,1,'HR_system','2023-03-13','2024-04-19');
INSERT INTO `project`(`project_id`,`name`,`employee_id`,`start_date`,`end_date`) VALUES (NULL,2,'mini_website','2025-06-13','2024-09-19');
INSERT INTO `project`(`project_id`,`name`,`employee_id`,`start_date`,`end_date`) VALUES (NULL,2,'cake_shop','2022-01-13','2023-07-19');
-------------------------------------------------------
UPDATE `employee` SET salary =10000 WHERE id = 2
-------------------------------------------------------
DELETE FROM `location` WHERE id = 3