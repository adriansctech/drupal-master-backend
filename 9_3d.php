<?php

/*
 * - Realiza una sentencia que devuelva, los empleados hombres contratados antes 
 * del año 1999 (inclusive), y que finalmente fueron despedidos, y las mujeres contratadas 
 * a partir de 1999 (inclusive) que no fueron despedidas. 
 */

print ("SELECT * FROM employees
WHERE employees.gender LIKE 'M' 
AND YEAR(hire_date) > 1998
UNION
SELECT * FROM employees
WHERE employees.gender LIKE 'F' 
AND YEAR(hire_date) > 1998
AND employees.emp_no NOT IN (SELECT emp_no FROM emp_fired);");