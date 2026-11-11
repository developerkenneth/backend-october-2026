CREATE TABLE `new_database` . `posts` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(1000) NOT NULL,
    `body` TEXT(2000) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NULL on UPDATE CURRENT_TIMESTAMP,
    -- setting index
    PRIMARY KEY (`id`) 
);