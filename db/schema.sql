CREATE TABLE student(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    name VARCHAR(255) NOT NULL ,
    email VARCHAR(255) NOT NULL ,
    phone VARCHAR(50) NOT NULL ,
    spec VARCHAR(255) NOT NULL ,
    year ENUM('1','2','3','4','5')  NOT NULL ,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    PRIMARY KEY(id)
);


CREATE TABLE admins(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  created_at DATETIME NOT NULL DEFAULT now(),
 PRIMARY KEY(id)
);

INSERT INTO admins (name, email,`password`)
VALUES
  ("abdo","abdosayed40000@gmail.com","$2y$10$Nz6kyEWTGyDSK78eNZFAo.j5vQgvlJdD.VLBAf.EO0VKamIUrp0ii");