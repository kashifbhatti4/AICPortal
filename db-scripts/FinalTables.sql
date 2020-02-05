CREATE SCHEMA `school`;


CREATE TABLE `school`.`family` (
	`family_id` INT NOT NULL AUTO_INCREMENT,
	`address` VARCHAR(50) NOT NULL,
	`city` VARCHAR(20) NOT NULL,
	`home_state` VARCHAR(20) NOT NULL,
	`zip_code` INT NOT NULL,
	PRIMARY KEY (`family_id`)
);


CREATE TABLE `school`.`user_info` (
	`users_id` INT NOT NULL AUTO_INCREMENT, 
	`family_id` INT NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`gender` VARCHAR(10) NOT NULL,
	`dob` DATE NOT NULL,
	`email` VARCHAR(30), 
	`secondary_email` VARCHAR(30),
	`primary_phone` BIGINT,
	`secondary_phone` BIGINT,
	`is_parent` VARCHAR(10) NOT NULL,
	`allergies` VARCHAR(50),
	`is_photo` VARCHAR(10) NOT NULL,
	`emer_name` VARCHAR(50), 
	`emer_phone` BIGINT, 
	`emer_relation` VARCHAR(20),
	PRIMARY KEY (`users_id`),
	FOREIGN KEY (`family_id`) REFERENCES family(`family_id`)
);



CREATE TABLE `school`.`contact` (
	`contact_id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
	`phone_number` BIGINT NOT NULL,
	`users_id` INT NOT NULL,
	PRIMARY KEY (`contact_id`),
	FOREIGN KEY (`users_id`) REFERENCES user_info (`users_id`)
);



CREATE TABLE `school`.`payment` (
	`payment_id` INT NOT NULL AUTO_INCREMENT,
	`users_id` INT NOT NULL,
	`paid_on` DATE NOT NULL, 
	`payment_method` VARCHAR(20) NOT NULL,
	`status` VARCHAR(10) NOT NULL,
	`fees_paid` FLOAT NOT NULL,
	PRIMARY KEY (`payment_id`),
	FOREIGN KEY (`users_id`) REFERENCES user_info(`users_id`)
);




CREATE TABLE `school`.`program` (
	`program_id` INT NOT NULL AUTO_INCREMENT,
	`program_name` VARCHAR(20) NOT NULL,
	`description` VARCHAR(100) NOT NULL,
	`start_date` DATE NOT NULL,
	`end_date` DATE NOT NULL,
	`fees` FLOAT NOT NULL,
	`age_lower` INT NOT NULL,
	`age_upper` INT NOT NULL,
    PRIMARY KEY (`program_id`)
);



CREATE TABLE `school`.`enroll` (
	`users_id` INT NOT NULL,
	`program_id` INT NOT NULL,
	PRIMARY KEY (`users_id`,`program_id`),
	INDEX (`users_id`),
	INDEX(`program_id`),
	FOREIGN KEY (`users_id`) REFERENCES user_info(`users_id`),
	FOREIGN KEY (`program_id`) REFERENCES program(`program_id`)
);



CREATE TABLE `school`.`classes` (
	`classes_id` INT NOT NULL AUTO_INCREMENT,
	`program_id` INT NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`schedule` VARCHAR(50) NOT NULL DEFAULT 'TBD',
	`fees` FLOAT NOT NULL,
    PRIMARY KEY (`classes_id`),
	FOREIGN KEY (`program_id`) REFERENCES program(`program_id`)
);


CREATE TABLE `school`.`assignment` (
	`assignment_id` INT NOT NULL AUTO_INCREMENT,
	`assignment_name` VARCHAR(20) NOT NULL,
	`classes_id` INT NOT NULL,
	`total_points` INT NOT NULL,
	`description` VARCHAR(50) NOT NULL,
	`due_date` DATE NOT NULL,
    PRIMARY KEY (`assignment_id`),
	FOREIGN KEY (`classes_id`) REFERENCES classes(`classes_id`)
);


CREATE TABLE `school`.`Graded` (
	`users_id` INT NOT NULL,  
	`assignment_id` INT NOT NULL,
	`grade` VARCHAR(3) NOT NULL DEFAULT 'TBD',
	PRIMARY KEY (`users_id`,`assignment_id`),
	INDEX (`users_id`),
	INDEX (`assignment_id`),
	FOREIGN KEY (`users_id`) REFERENCES user_info(`users_id`),
	FOREIGN KEY (`assignment_id`) REFERENCES assignment(`assignment_id`)
);



CREATE TABLE `school`.`attendance` (
	`users_id` INT NOT NULL,
	`dates` DATE NOT NULL,
	`isattended` BOOLEAN NOT NULL,
	PRIMARY KEY (`users_id`,`dates`),
	FOREIGN KEY (`users_id`) REFERENCES user_info(`users_id`)
);



CREATE TABLE `school`.`teacher_info` (
	`users_id` INT NOT NULL, 
	`start_date` DATE NOT NULL,
	`volunteer` VARCHAR(10) NOT NULL,
	`role` VARCHAR(20) NOT NULL,
	`status` VARCHAR(10),
	PRIMARY KEY (`users_id`),
	FOREIGN KEY  (`users_id`) REFERENCES user_info(`users_id`)
);

CREATE TABLE `school`.`teaches` (
	`users_id` INT NOT NULL,
	`classes_id` INT NOT NULL,
	PRIMARY KEY (`users_id`,`classes_id`),
	INDEX (`users_id`),
	INDEX(`classes_id`),
	FOREIGN KEY (`users_id`) REFERENCES teacher_info(`users_id`),
	FOREIGN KEY (`classes_id`) REFERENCES classes(`classes_id`)
);



CREATE TABLE `school`.`time_sheet` (
	`users_id` INT NOT NULL,        
	`hourly_rate` FLOAT NOT NULL,
	`dates` DATE NOT NULL,
	`total_hours` INT NOT NULL DEFAULT 0,
	`paid_on` DATE NOT NULL,
	PRIMARY KEY (`users_id`,`dates`,`total_hours`),
	FOREIGN KEY (`users_id`) REFERENCES teacher_info(`users_id`)
);



CREATE TABLE `school`.`expense_sheet` (
	`expense_id` INT NOT NULL AUTO_INCREMENT,
	`program_id` INT NOT NULL, 
	`item` VARCHAR(20) NOT NULL,
	`description` VARCHAR(100) NOT NULL,
	`merchant` VARCHAR(20) NOT NULL,
	`expense` FLOAT NOT NULL,  
	`payment_type` VARCHAR(10) NOT NULL,
	`status` VARCHAR(10) NOT NULL,
	`dates` DATE NOT NULL,
	PRIMARY KEY (`expense_id`),
	FOREIGN KEY (`program_id`) REFERENCES program(`program_id`)
);














