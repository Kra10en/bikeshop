SELECT e.`employee-id`, p.`f-name`, p.`l-name`, t.`datetime-in`, t.`datetime-out`
FROM timecard AS t
INNER JOIN employee AS e ON e.`employee-id` = t.`employee-id`
INNER JOIN person AS p ON p.`person-id` = p.`person-id`;
