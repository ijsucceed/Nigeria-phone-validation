-- SQL 
-- Table phone_numbers
-- @PHPOUT

DROP TABLE IF EXISTS phone_numbers_demo;

CREATE TABLE phone_numbers (
    user_id INT(11) AUTO_INCREMENT,
    numbers VARCHAR(11) UNIQUE KEY,
    PRIMARY KEY(user_id)
);