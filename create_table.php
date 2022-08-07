<?php
include "./database/database.php";
// sql to create role table
$role_table = "CREATE TABLE if NOT EXISTS  roles (
  id INT  AUTO_INCREMENT PRIMARY KEY,
  role VARCHAR(30) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
if ($db_obj->createTable($role_table)) {
  echo " roles created successfully.<br>";
} else {
  echo "Error creating  role table: ";
}


// sql to create table user_table
$users_table = "CREATE TABLE if NOT EXISTS  users(
  id INT  AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  contact VARCHAR(10) NOT NULL UNIQUE,
  role_id INT ,
  FOREIGN KEY (role_id) REFERENCES roles(id),
  password Text NOT NULL,
  is_verfied  int NOT NULL DEFAULT '0',
  otp  int NOT NULL DEFAULT '0',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

if ($db_obj->createTable($users_table)) {
  echo "Table user_table created successfully <br>";
} else {
  echo "Error creating  users table. ";
}

// course table

$courses_table = "CREATE TABLE if NOT EXISTS  courses (
  id INT  AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  img VARCHAR(255) NOT NULL,
  info VARCHAR(255) NOT NULL,
  user_id INT ,
  questions_id JSON,
  FOREIGN KEY (user_id) REFERENCES users(id),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
if ($db_obj->createTable($courses_table)) {
  echo "Table course_table created successfully.<br>";
} else {
  echo "Error creating  courses table.";
}

// question table

$question_table = "CREATE TABLE if NOT EXISTS questions (
  id INT  AUTO_INCREMENT PRIMARY KEY,
  question  TEXT,
  user_id INT ,
  FOREIGN KEY (user_id) REFERENCES users(id),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
if ($db_obj->createTable($question_table)) {
echo "Table question  created successfully.<br>";}
else {
  echo "Error creating  questions table.";
}

// option table


$options_table = "CREATE TABLE if NOT EXISTS  options (
  id INT  AUTO_INCREMENT PRIMARY KEY,
  option_text TEXT,
  question_id INT ,
  FOREIGN KEY (question_id) REFERENCES questions(id),
  is_correct BOOLEAN,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   
   )";
if ($db_obj->createTable($options_table)) {
echo "Table options  created successfully.";
} else {
echo "Error creating  options table.";
}











