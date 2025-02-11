CREATE TABLE Employee (
    id INT(11) NOT NULL AUTO_INCREMENT,
    job_title VARCHAR(30) NOT NULL,
    salary INT(20) NOT NULL,
    manager VARCHAR(15) NOT NULL,
    fname VARCHAR(15) NOT NULL,
    lname VARCHAR(15) NOT NULL,
    PRIMARY KEY(id)
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
INSERT INTO `department` (`id`, `name`, `manager`) VALUES (NULL, 'developing', 'mohammad');
INSERT INTO `department` (`id`, `name`, `manager`) VALUES (NULL, 'marketing', 'ali');
INSERT INTO `department` (`id`, `name`, `manager`) VALUES (NULL, 'logistic', 'anas');
INSERT INTO `department` (`id`, `name`, `manager`) VALUES (NULL, 'managing', 'david');
------------------------------------------------------
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager`,`fname`,`lname`) VALUES (NULL, 'front_end', 5000, 'mohammad','ali','mohsen');
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager`,`fname`,`lname`) VALUES (NULL, 'back_end', 4000, 'mohammad','anas','aseel');
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager`,`fname`,`lname`) VALUES (NULL, 'front_end', 8000, 'mohammad','david','dansel');
INSERT INTO `employee` (`id`, `job_title`,`salary`, `manager`,`fname`,`lname`) VALUES (NULL, 'back_end', 3000, 'mohammad','isa','monther');
------------------------------------------------------
INSERT INTO `location`(`city`,`country`) VALUES ('aqaba','jordan')
INSERT INTO `location`(`id`,`city`,`country`) VALUES (2,'amman','jordan')
INSERT INTO `location`(`id`,`city`,`country`) VALUES (3,'aqaba','jordan')
INSERT INTO `location`(`id`,`city`,`country`) VALUES (4,'irbid ','jordan')
------------------------------------------------------
INSERT INTO `project`(`id`,`name`,`start_date`,`end_date`) VALUES (NULL,'LMS','2025-03-13','2025-04-19')
INSERT INTO `project`(`id`,`name`,`start_date`,`end_date`) VALUES (NULL,'HR_system','2023-03-13','2024-04-19');
INSERT INTO `project`(`id`,`name`,`start_date`,`end_date`) VALUES (NULL,'mini_website','2025-06-13','2024-09-19');
INSERT INTO `project`(`id`,`name`,`start_date`,`end_date`) VALUES (NULL,'cake_shop','2022-01-13','2023-07-19');
-------------------------------------------------------
UPDATE `employee` SET salary =10000 WHERE id = 2
-------------------------------------------------------
DELETE FROM `location` WHERE id = 3