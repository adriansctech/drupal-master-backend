<?php

/*
 * - Realiza una sentencia que devuelva, los empleados hombres contratados antes 
 * del año 1999 (inclusive), y que finalmente fueron despedidos, y las mujeres contratadas 
 * a partir de 1999 (inclusive) que no fueron despedidas. 
 */

print ("SELECT * FROM employees
WHERE employees.gender LIKE 'M' 
AND employees.hire_date < '1989-12-31'
AND employees.emp_no IN (SELECT emp_no FROM emp_fired)
UNION
SELECT * FROM employees
WHERE employees.gender LIKE 'F' 
AND employees.hire_date < '1989-12-31'
AND employees.emp_no NOT IN (SELECT emp_no FROM emp_fired);");