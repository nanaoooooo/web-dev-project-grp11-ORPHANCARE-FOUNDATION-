CREATE TABLE form_contact_us (
  contact_id INT PRIMARY KEY AUTO_INCREMENT,
  message TEXT,
  question TEXT,
  name VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL
);
