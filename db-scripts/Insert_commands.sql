insert into `school`.`family` (`address`,`city`,`home_state`,`zip_code`) values ('5706 Woodmont St','Pittsburgh','PA',98033);
insert into `school`.`family` (`address`,`city`,`home_state`,`zip_code`) values ('424 Noble St','Pittsburgh','PA',15232);


insert into `school`.`user_info` (`family_id`,`name`,`gender`,`dob`,`email`, `secondary_email`,
`primary_phone`,`secondary_phone`,`is_parent`,`allergies`,`is_photo`,`emer_name`, `emer_phone`, 
`emer_relation`) values (1,'Kinori Rosnow','male','1995-02-02','k@pitt.edu',null,1231234567,null,'yes','failure',TRUE,'Maya',1231234567,'GF');
insert into `school`.`user_info` (`family_id`,`name`,`gender`,`dob`,`email`, `secondary_email`,
`primary_phone`,`secondary_phone`,`is_parent`,`allergies`,`is_photo`,`emer_name`, `emer_phone`, `emer_relation`) 
values ( 1, 'Tejasvi Medi', 'male', '1993-07-26', 'k@pitt.edu', NULL, 1231234567, NULL, 'yes', 'failure', 1, 'Sue', 1231237876, 'Sis');




insert into `school`.`contact` (`name`,`phone_number`,`users_id`) 
values ('Grant Gittes',1234567890,2);



insert into `school`.`payment` (`users_id`,`paid_on`, `payment_method`,`status`,`fees_paid`) 
values (2,'2019-12-04','credit card','paid',101.01);



insert into `school`.`program` (`program_name`,`description`,`start_date`,`end_date`,`fees`,`age_lower`,`age_upper`) 
values ('DBMS','description here','2020-01-01','2020-04-29',99.99,10,15);


INSERT INTO `school`.`enroll` (`users_id`,`program_id`) 
VALUES (1,1);


INSERT INTO `school`.`classes` (`program_id`,`name`,`schedule`,`fees`) 
VALUES (1, 'Math','Sundays 2:00pm', 75.00);


INSERT INTO `school`.`assignment` ( `assignment_name`, `classes_id`, `total_points`, `description`, `due_date`) 
VALUES ('Homework 1', 1, 10, 'complete all 10 questions', '2019-12-04');



INSERT INTO `school`.`Graded` ( `users_id`, `assignment_id`,`grade` ) 
VALUES (1,1, 'A+');



INSERT INTO `school`.`teaches` ( `users_id`, `classes_id`) 
VALUES(1,1);



INSERT INTO `school`.`time_sheet` ( `users_id`, `hourly_rate`, `dates`, `total_hours`, `paid_on`) 
VALUES (1, 10.50, '2019/12/04',8, '2019/12/04');



INSERT INTO `school`.`expense_sheet` ( `program_id`, `item`, `description`, `merchant`, `expense`, `payment_type`, `status`, `dates`) 
VALUES (1, 'Chairs','Chairs for the classroom','Office Depot', 90.00, 'VISA', 'Paid','2019/12/02' )










