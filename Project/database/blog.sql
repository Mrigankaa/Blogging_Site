CREATE TABLE users (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
);

create TABLE blogs (
  blog_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  blog Varchar(255) NOT NULL,
  user_id INT(11),
  FOREIGN KEY(user_id) REFERENCES users(id)
  )
