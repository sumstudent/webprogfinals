CREATE DATABASE deo_solo_eccommerce;

USE deo_solo_eccommerce;

CREATE TABLE IF NOT EXISTS users(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS profile(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(255) NOT NULL,
  middlename VARCHAR(255),
  lastname VARCHAR(255) NOT NULL,
  suffixname VARCHAR(255)
  /*
  not sure if will implement, trying to cut corners
  profile_id INT(6) unsigned,
  FOREIGN KEY(profile_id) REFERENCES users(id)
  */
);
