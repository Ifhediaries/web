CREATE DATABASE icfai_freshers_event;  
  
USE icfai_freshers_event;  
  
CREATE TABLE event_schedule (  
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
  event_name VARCHAR(255) NOT NULL,  
  event_description TEXT NOT NULL,  
  event_date DATE NOT NULL,  
  event_time TIME NOT NULL  
);  
  
CREATE TABLE registrations (  
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
  name VARCHAR(255) NOT NULL,  
  email VARCHAR(255) NOT NULL,  
  phone VARCHAR(20) NOT NULL,  
  college VARCHAR(255) NOT NULL  
);  
  
CREATE TABLE gallery (  
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
  image_name VARCHAR(255) NOT NULL,  
  image_description TEXT NOT NULL  
);  
  
INSERT INTO event_schedule (event_name, event_description, event_date, event_time)  
VALUES  
  ('Freshers' Party', 'Welcome to ICFAI University Hyderabad!', '2023-08-20', '18:00:00'),  
  ('Orientation Program', 'Get to know your university!', '2023-08-21', '10:00:00'),  
  ('Cultural Event', 'Showcase your talent!', '2023-08-22', '19:00:00');  
  
INSERT INTO gallery (image_name, image_description)  
VALUES  
  ('image1.jpg', 'Freshers\' Party'),  
  ('image2.jpg', 'Orientation Program'),  
  ('image3.jpg', 'Cultural Event');
