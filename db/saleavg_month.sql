DELIMITER //
DROP PROCEDURE avgBikeSale //
CREATE PROCEDURE avgBikeSale()
BEGIN 
	DECLARE `current_time` datetime;
	SELECT SUBDATE(CURRENT_DATE, INTERVAL 30 DAY) INTO `current_time`;
SELECT AVG(`pulls-total`) FROM pulls
INNER JOIN sale ON sale.`pulls-id` = pulls.`pulls-id`
WHERE sale.`sale-datetime` < current_time;
END;
//
DELIMITER ;
