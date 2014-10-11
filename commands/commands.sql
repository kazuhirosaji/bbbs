create database bbbs;
grant all on bbbs.* to dbuser@localhost identified by '*******';

use bbbs

CREATE TABLE nations (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);

CREATE TABLE products (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    nation_id INT,
    description TEXT DEFAULT NULL,
    link VARCHAR(255) DEFAULT NULL,
    image BLOB DEFAULT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);


