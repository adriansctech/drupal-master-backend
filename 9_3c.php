<?php

/*
 * - Realiza una sentencia con el JOIN adecuado que devuelva el listado completo 
 * de empleados con salarios mayor de 100.000. Para los empleados que hayan sido 
 * directores de departamento, se mostrará una columna llamada "dep_manager" con 
 * el código de departamento. 
 */

print ("SELECT employees.emp_no AS Codigo, 
employees.birth_date AS FechaNaci, 
employees.first_name AS Nombre,
employees.last_name AS Apellido, 
salaries.salary AS Sueldo, 
dept_manager.dept_no AS dept_manager
FROM employees
INNER JOIN salaries
ON employees.emp_no = salaries.emp_no
INNER JOIN dept_manager
ON employees.emp_no = dept_manager.emp_no
WHERE salaries.salary > 100000;");
