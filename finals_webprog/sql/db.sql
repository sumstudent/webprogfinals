CREATE DATABASE deo_solo_eccommerce;

USE deo_solo_eccommerce;

CREATE TABLE IF NOT EXISTS users(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS profile(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(255) NOT NULL,
  middlename VARCHAR(255),
  lastname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  suffixname VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS product(
  id INT(6) USIGNED AUTO_INCREMENT PRIMARY KEY,
  productName VARCHAR(255),
  pic_url VARCHAR(255)
);

INSERT INTO product (productName, pic_url)
VALUES
("The New NVDIa RTX 2080ti Founder's Edition", "https://cdn.mos.cms.futurecdn.net/SY82Ar3e4Wcnnc3SoPnsYS.jpg"),
("The Ryzen 7 3700x","https://i.pcmag.com/imagery/reviews/011tQWI5Mth8tIUGOn5Q2q9-17.fit_scale.size_2698x1517.v_1569479130.jpg"),
("The Intel Core i7-9700k","https://cdn.mos.cms.futurecdn.net/pTaZuCAZSwziDMx7TSCACF.jpg");
