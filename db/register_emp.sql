DELIMITER //
DROP PROCEDURE add_employee //
CREATE or REPLACE PROCEDURE add_employee
(param_fname varchar(55), param_lname varchar(55), param_password text)
BEGIN
	DECLARE param_personid int;
	INSERT INTO person (`f-name`, `l-name`) VALUES(param_fname, param_lname);
	SELECT MAX(`person-id`) INTO param_personid FROM person;
	INSERT INTO employee(`person-id`, password) VALUES(param_personid, param_password);
END;
//
DELIMITER ;
