CREATE USER 'user' @ 'localhost' IDENTIFIED BY 'password';
-- grant users privileges to a particular database
GRANT ALL PRIVILEGES ON *.* TO 'user'@'localhost';