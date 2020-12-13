DELIMITER //
DROP PROCEDURE delete_employee //
CREATE PROCEDURE delete_employee(param_employeeid int(6))
BEGIN
	DECLARE param_personid int;
	SELECT `person-id` INTO param_personid 
FROM employee where `employee-id` = param_employeeid;
DELETE from employee where `employee-id` = param_employeeid;
DELETE from person where param_personid = `person-id`;
END;
//
DELIMITER;
