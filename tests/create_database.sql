CREATE DATABASE IF NOT EXISTS short;
use short;

-- Create table of exemple
CREATE TABLE IF NOT EXISTS short
(
    id INT NOT NULL AUTO_INCREMENT,
    uid VARCHAR(255) NOT NULL,
    url VARCHAR(1000) NOT NULL,
    last_click DATETIME NULL,
    PRIMARY KEY (id)
);
