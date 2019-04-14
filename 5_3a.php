<?php
  
$films = [];
$films = [
  '0' => [
    'id' => '00',
    'title' => 'Terminator 2',
    'director' => 'James Cameron',
    'year' => '1991',
    'duration' => '132',
  ],
  '1' => [
    'id' => '01',
    'title' => 'The mask',
    'director' => 'Chuck Russell',
    'year' => '1994',
    'duration' => '96',
  ],
  '2' => [
    'id' => '03',
    'title' => 'Hook',
    'director' => 'Steven Spielberg',
    'year' => '1991',
    'duration' => '75',
  ],
  '3' => [
    'id' => '04',
    'title' => 'The ghostbusters',
    'director' => 'John de Cuir',
    'year' => '1984',
    'duration' => '96',
  ],
  '4' => [
    'id' => '05',
    'title' => 'E.T.',
    'director' => 'Steven Spielberg',
    'year' => '1981',
    'duration' => '102',
  ],
]; 

echo "<h3>LIST OF FILMS INSIDE ARRAY</h3>";
echo "<table>";    
  echo "<tbody>";
    echo "<tr></tr>";
    echo "<td>ID</td>";
    echo "<td>Title</td>";
    echo "<td>Director</td>";
    echo "<td>Year</td>";
    echo "<td>Duration</td>";
    echo "<tr>";    
    for ($i = 0; $i <= sizeof($films)-1; $i++) {    
      echo "<td>" . $films[$i]['id'];
      echo "<td>" . $films[$i]['title'];
      echo "<td>" . $films[$i]['director'];
      echo "<td>" . $films[$i]['year'];
      echo "<td>" . $films[$i]['duration'];
      echo "</td></td></td></td></td></tr>";
  }
  echo "</tbody>";
echo "</table>";