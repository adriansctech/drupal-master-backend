<?php

/*
 * Crea el script 9_3a.php e imprime como cadena la siguiente sentencia. La sentencia 
 * se ejecutará directamente desde phpMyAdmin. Una vez lanzada y comprobado su funcionamiento, 
 * se incluirá en el script PHP en modo cadena, solo para su corrección. 
  - Realiza una sentencia que devuelva el código de empleado, nombre y apellidos, 
 * fecha de contratación y salario de aquellos empleados que empezaran en la empresa 
 * después de 1990 y hayan tenido un salario entre 60000 y 65000. Evita que se repitan 
 * resultados. Los resultados se ordenarán por salario, de mayor a menor, y el nombre 
 * y apellidos se mostrará en mayúsculas. 
*/

print ("SELECT employees.emp_no AS Código, 
UPPER(first_name) AS Nombre , 
UPPER(last_name) AS Apellidos, 
salaries.salary AS Salario
FROM employees 
INNER JOIN salaries
ON employees.emp_no = salaries.emp_no
WHERE employees.hire_date> '1989-12-31' 
AND salaries.salary BETWEEN 60000 AND 65000
ORDER BY salaries.salary DESC;");