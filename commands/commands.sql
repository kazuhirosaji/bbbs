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

INSERT INTO nations (name)
    VALUES ('JPN');
INSERT INTO nations (name)
    VALUES ('USA');
INSERT INTO nations (name)
    VALUES ('GER');
INSERT INTO nations (name)
    VALUES ('ITA');
INSERT INTO products (name,nation_id,description,created)
    VALUES ('日本酒', '1', '日本酒です', NOW());
INSERT INTO products (name,nation_id,description,created)
    VALUES ('赤ワイン', '4', '赤ワインです。', NOW());
INSERT INTO products (name,nation_id,description,created)
    VALUES ('Beer', '3', 'ビールです。', NOW());


create database test_bbbs;
grant all on test_bbbs.* to dbuser@localhost identified by '*******';


alter table nations add unique (name);