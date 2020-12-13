SELECT p.`f-name`, p.`l-name`, p.`e-mail`, p.`phone-num`, e.`employee-id`
FROM person AS p
INNER JOIN `employee` AS e ON e.`person-id` = p.`person-id`;
