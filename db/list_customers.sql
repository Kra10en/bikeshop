SELECT p.`f-name`, p.`l-name`, p.`e-mail`, p.`phone-num`
FROM person AS p
INNER JOIN `customer` AS c ON c.`person-id` = p.`person-id`;
