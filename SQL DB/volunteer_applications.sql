CREATE TABLE volunteer_applications (
  application_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  age INT NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  know_orphan_care TEXT,
  why_volunteer TEXT,
  area VARCHAR(255) NOT NULL
);
