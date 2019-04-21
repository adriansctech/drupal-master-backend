<?php

/*
 * Crea el script 9_4a.php. Haciendo uso de las funciones de mysqli, conecta con
 *  la base de datos y muestra los resultados, en forma de tablas HTML independientes, 
 * las sentencias creadas en 9.3a, 9.3b y 9.3c, limitando en cada una de ellas a 
 * 100 resultados. 
 */

$conn = new mysqli("XXX.X.X.X", "XXXX", "XXXXXXXX", "XXXXXXXX");

if ($conn->connect_errno) {
  die("Fallo a conectar a MYSQL: (" . $conn->connect_errno . ") " . $conn->connect->error);
}

$sql = "SELECT employees.emp_no AS Codigo, UPPER(first_name) AS Name, UPPER(last_name) AS Apellido, salaries.salary AS Sueldo FROM employees INNER JOIN salaries ON employees.emp_no = salaries.emp_no WHERE employees.hire_date> '1989-12-31' AND salaries.salary BETWEEN 60000 AND 65000 ORDER BY salaries.salary DESC LIMIT 100 ";
$result = $conn->query($sql);
print ("Query 9_3a </br>");
print ("<table>");
print ("<tr>");
print ("<th>Código</th>");
print ("<th>Name</th>");
print ("<th>Apellido</th>");
print ("<th>Sueldo</th>");
print("</tr>");
print ("<tr>");
while($row = $result->fetch_assoc()) {
  print("<td>" . $row['Codigo'] . "</td>");
  print("<td>" . $row['Name'] . "</td>");
  print("<td>" . $row['Apellido'] . "</td>");
  print("<td>" . $row['Sueldo'] . "</br>" . "</td>");
  print ("</tr>");
}
print ("</table>");


print ("Query 9_3b");
$sql = "SELECT dept_manager.emp_no AS Codigo FROM dept_manager LEFT JOIN employees ON dept_manager.emp_no = employees.emp_no WHERE dept_manager.emp_no NOT IN (SELECT emp_no FROM emp_fired WHERE date < '1989-12-31') LIMIT 100;";
$result = $conn->query($sql);
print ("<table>");
print ("<tr>");
print ("<th>Código</th>");
print("</tr>");
print ("<tr>");
while($row = $result->fetch_assoc()) {
  print("<td>" . $row['Codigo'] . "</td>");
  print("</tr>");  
}
print ("</table>");

print("Query 9_3c");
$sql = "SELECT employees.emp_no AS Codigo, employees.birth_date AS FechaNaci, employees.first_name AS Nombre, employees.last_name AS Apellido, salaries.salary AS Sueldo, dept_manager.dept_no AS dept_manager FROM employees INNER JOIN salaries ON employees.emp_no = salaries.emp_no INNER JOIN dept_manager ON employees.emp_no = dept_manager.emp_no WHERE salaries.salary > 100000 ";
$result = $conn->query($sql);
print ("<table>");
print ("<tr>");
print ("<th>Código</th>");
print ("<th>Fechanaci</th>");
print ("<th>Nombre</th>");
print ("<th>Apellido</th>");
print ("<th>Sueldo</th>");
print ("<th>Dept_manager</th>");
print("</tr>");
print ("<tr>");
while($row = $result->fetch_assoc()) {
  print("<td>" . $row['Codigo'] . "</td>");
  print("<td>" . $row['FechaNaci'] . "</td>");
  print("<td>" . $row['Nombre'] . "</td>");
  print("<td>" . $row['Apellido'] . "</td>");
  print("<td>" . $row['Sueldo'] . "</td>");
  print("<td>" . $row['dept_manager'] . "</td>");
  print("</tr>");  
}
print ("</table>");


$conn->close();