
CREATE DATABASE test;
CREATE USER `test`@`%` IDENTIFIED BY 'abcd';
GRANT ALL ON test.* TO `test`@`%`;

USE test;

DROP TABLE IF EXISTS test;
CREATE TABLE test (
    id int unsigned not null primary key AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL DEFAULT ''
);

INSERT INTO test (name) VALUES ('foo'), ('bar'), ('bazz');
