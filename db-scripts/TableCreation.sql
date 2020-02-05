-- need defaults
-- need constraints
-- need defaults
CREATE SCHEMA `school`;



CREATE TABLE `school`.`student` (
	`student_id` INT NOT NULL, 
	`name` VARCHAR(50) NOT NULL,
	`level` VARCHAR(10), 
	`allergies` VARCHAR(50),
	`is_photo` BOOLEAN NOT NULL,
	`email` VARCHAR(30), 
	`emergency_name` VARCHAR(50), 
	`emergency_contact` BIGINT, 
	`emergency_relation` VARCHAR(15),
	PRIMARY KEY (`student_id`)
);



CREATE TABLE `school`.`guardian` (
	`guardian_id` INT NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`phone_number` INT NOT NULL,
	PRIMARY KEY (`guardian_id`)
);




CREATE TABLE `school`.`oversees` (
	`student_id` INT NOT NULL,
	`guardian_id` INT NOT NULL,
	PRIMARY KEY (`student_id`,`guardian_id`),
	INDEX (`student_id`),
	INDEX(`guardian_id`),
	FOREIGN KEY (`student_id`) REFERENCES student(`student_id`),
	FOREIGN KEY (`guardian_id`) REFERENCES guardian(`guardian_id`)
);



 
CREATE TABLE `school`.`parent` (
	`parent_id` INT NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`phone_number` INT NOT NULL,
	`email` VARCHAR(30) NOT NULL,
	PRIMARY KEY (`parent_id`)
);




CREATE TABLE `school`.`has` (
	`student_id` INT NOT NULL,
	`parent_id` INT NOT NULL,
	PRIMARY KEY (`student_id`,`parent_id`),
	INDEX (`student_id`),
	INDEX(`parent_id`),
	FOREIGN KEY (`student_id`) REFERENCES student(`student_id`),
	FOREIGN KEY (`parent_id`) REFERENCES parent(`parent_id`)
);




CREATE TABLE `school`.`fees` (
	`payment_id` INT NOT NULL,
	`student_id` INT NOT NULL,
	`paid_on` DATE NOT NULL, 
	`status` VARCHAR(10) NOT NULL,
	`start_date` DATE NOT NULL,
	`end_date` DATE NOT NULL,
	PRIMARY KEY (`payment_id`,`student_id`),
	FOREIGN KEY (`student_id`) REFERENCES student(`student_id`)
);




CREATE TABLE `school`.`class` (
	`class_id` INT NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`schedule` VARCHAR(50) NOT NULL DEFAULT 'TBD',
    PRIMARY KEY (`class_id`)
);




CREATE TABLE `school`.`graded` (
	`student_id` INT NOT NULL,  
	`class_id` INT NOT NULL,
	`assignment_no` INT NOT NULL,
	`grade` VARCHAR(3) NOT NULL DEFAULT 'TBD',
	PRIMARY KEY (`student_id`,`class_id`,`assignment_no`),
	INDEX (`student_id`),
	INDEX(`class_id`),
	FOREIGN KEY (`student_id`) REFERENCES student(`student_id`),
	FOREIGN KEY (`class_id`) REFERENCES class(`class_id`)
);




CREATE TABLE `school`.`attendance` (
	`student_id` INT NOT NULL,
	`class_id` INT NOT NULL,
	`date` DATE NOT NULL,
	`isattended` BOOLEAN NOT NULL,
	PRIMARY KEY (`student_id`,`class_id`,`date`),
	INDEX (`student_id`),
	INDEX(`class_id`),
	FOREIGN KEY (`student_id`) REFERENCES student(`student_id`),
	FOREIGN KEY (`class_id`) REFERENCES class(`class_id`)
);







CREATE TABLE `school`.`expense_sheet` (
	`expense_id` INT NOT NULL,
	`item` VARCHAR(20) NOT NULL,
	`description` VARCHAR(100),
	`merchant` VARCHAR(20) NOT NULL,
	`expense` FLOAT NOT NULL,  
	`payment_type` VARCHAR(10) NOT NULL,
	`status` VARCHAR(10) NOT NULL,
	`date` DATE NOT NULL,
	PRIMARY KEY (`expense_id`)
);






CREATE TABLE `school`.`staff` (
	`staff_id` INT NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`email` VARCHAR(50),
	`phone_no` BIGINT NOT NULL,   
	`start_date` DATE NOT NULL,
	`volunteer` VARCHAR(10) NOT NULL,
	`role` VARCHAR(20) NOT NULL,
	`address` VARCHAR(50) NOT NULL,
	`status` VARCHAR(10),
	PRIMARY KEY (`staff_id`)
);




CREATE TABLE `school`.`teaches` (
	`class_id` INT NOT NULL,
	`staff_id` INT NOT NULL,
	PRIMARY KEY (`class_id`, `staff_id`),
	INDEX (`class_id`),
	INDEX (`staff_id`),
	FOREIGN KEY (`class_id`) REFERENCES class(`class_id`),
	FOREIGN KEY (`staff_id`) REFERENCES staff(`staff_id`)
);



CREATE TABLE `school`.`fills` (
	`staff_id` INT NOT NULL,
	`expense_id` INT NOT NULL,
	PRIMARY KEY (`staff_id`,`expense_id`),
	INDEX (`staff_id`),
	INDEX(`expense_id`),
	FOREIGN KEY (`staff_id`) REFERENCES staff(`staff_id`),
	FOREIGN KEY (`expense_id`) REFERENCES expense_sheet(`expense_id`)
);






CREATE TABLE `school`.`time_sheet` (
	`staff_id` INT NOT NULL,        
	`hourly_rate` FLOAT NOT NULL,
	`date` DATE NOT NULL,
	`total_hours` INT NOT NULL DEFAULT 0,
	`paid_on` DATE NOT NULL,
	PRIMARY KEY (`staff_id`,`date`,`hourly_rate`),
	FOREIGN KEY (`staff_id`) REFERENCES staff(`staff_id`)
);
