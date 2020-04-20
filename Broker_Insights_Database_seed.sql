DROP DATABASE IF EXISTs `insight_broker_code_challenge_database`;
CREATE DATABASE `insight_broker_code_challenge_database`;
USE `insight_broker_code_challenge_database`;

CREATE TABLE `customers` (
	`id` int(10) NOT NULL AUTO_INCREMENT ,
    `name` varchar(50) NOT NULL,
    `address` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `customers` (name, address) VALUES ('ABC Joinery', '12 Ascott Street, Dundee');
INSERT INTO `customers` (name, address) VALUES ('XYZ Plumbing', '24 Fleet Street, Glasgow');
INSERT INTO `customers` (name, address) VALUES ('Fast Taxis', '324b Bank Street, Aberdeen');

CREATE TABLE `policys` (
	`id` int(50) NOT NULL AUTO_INCREMENT,
    `insurer_name` varchar(50) NOT NULL,
    `type` varchar(50) NOT NULL,
    `premium` decimal(9, 2) NOT NULL,
    `customer_id` int(10) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `FK_customer_id` (`customer_id`),
    CONSTRAINT `FK_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
);

INSERT INTO `policys` (insurer_name, type, premium, customer_id) VALUES ('Aviva', 'Public Liability', 123.87, 1);
INSERT INTO `policys` (insurer_name, type, premium, customer_id) VALUES ('Allianz', 'Public Liability', 2321.45, 2);
INSERT INTO `policys` (insurer_name, type, premium, customer_id) VALUES ('Aviva', 'Motor Fleet', 59897.00, 3);
INSERT INTO `policys` (insurer_name, type, premium, customer_id) VALUES ('QBE', 'Public Liability', 6845.00, 3);