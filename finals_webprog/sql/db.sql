CREATE DATABASE deo_solo_eccommerce;

USE deo_solo_eccommerce;

CREATE TABLE IF NOT EXISTS users(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255),
  email VARCHAR(255)
  /*
  todo research about how to hash a password
  if this is done you are 1/3 done in the project
  */
);

CREATE TABLE IF NOT EXISTS profile(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(255),
  middlename VARCHAR(255),
  lastname VARCHAR(255),
  suffixname VARCHAR(255),
  profile_id INT(6) unsigned,
  FOREIGN KEY(profile_id) REFERENCES users(id)
);
