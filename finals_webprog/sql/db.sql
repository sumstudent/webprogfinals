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
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  productName VARCHAR(255),
  pic_url VARCHAR(255),
  item_desc VARCHAR(350)
);

CREATE TABLE IF NOT EXISTS addresses(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  address VARCHAR(255) NOT NULL,
  FOREIGN KEY (id) REFERENCES users(id)
);

INSERT INTO product (productName, pic_url, item_desc)
VALUES
("NVIDIA RTX 2080ti Founder's Edition", "https://cdn.mos.cms.futurecdn.net/SY82Ar3e4Wcnnc3SoPnsYS.jpg",
  "Whether you’re looking for a more powerful graphics card or
get a jump start on Nvidia’s vision of a ray-traced future,
the GeForce RTX 2080 Ti is the world’s most powerful GPU on the market."),


("Ryzen 7 3700x","https://i.pcmag.com/imagery/reviews/011tQWI5Mth8tIUGOn5Q2q9-17.fit_scale.size_2698x1517.v_1569479130.jpg",
  "Performance. The AMD Ryzen 7 3700X has a 65W TDP, and with that fairly low amount of power,
it's able to deliver quite a lot. T
his processor can keep up with even the Intel Core i9-9900K,
a processor that considerably costs more and consumes more power,
with its TDP of 95W. The proof is in our benchmarks"),


("Intel Core i7-9700k","https://cdn.mos.cms.futurecdn.net/pTaZuCAZSwziDMx7TSCACF.jpg",
  "A First-Rate Choice for Discerning Gamers.
The Core i7-9700K is a little bit of a puzzle.
Intel dropped Hyper-Threading between the 8th and 9th Generation Core i7,
so though it has more cores (eight versus six),
it actually has fewer addressable threads than its Core i7-8700K predecessor.");
