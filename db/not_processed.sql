SELECT i.`item-name`, i.`item-description` 
FROM items as i
WHERE i.`processed` = `false`;
