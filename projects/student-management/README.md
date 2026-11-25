# Student Management Project

A guided capstone project to apply PHP fundamentals and database skills.

## Planned features

- List students
- Add a student
- View a student
- Edit student details
- Delete a student with CSRF protection
- PDO prepared statements
- Server-side validation
- Escaped HTML output
- Basic authentication extension

## Suggested database

```sql
CREATE DATABASE php_course
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE php_course;

CREATE TABLE students (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(150) NOT NULL,
    email VARCHAR(190) NOT NULL UNIQUE,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
```

Build one feature at a time. Do not put database credentials in committed source files.
