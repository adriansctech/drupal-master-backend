<?php
  
$films = [];
$films = [
  'first_film' => [
    'id' => '00',
    'title' => 'Terminator 2',
    'director' => 'James Cameron',
    'year' => '1991',
    'duration' => '132',
  ],
  'second_film' => [
    'id' => '01',
    'title' => 'The mask',
    'director' => 'Chuck Russell',
    'year' => '1994',
    'duration' => '96',
  ],
  'third_film' => [
    'id' => '03',
    'title' => 'Hook',
    'director' => 'Steven Spielberg',
    'year' => '1991',
    'duration' => '75',
  ],
  'fourth_film' => [
    'id' => '04',
    'title' => 'The ghostbusters',
    'director' => 'John de Cuir',
    'year' => '1984',
    'duration' => '96',
  ],
  'fivth_film' => [
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
    foreach ($films as $key => $value) {
      echo "<td>" . $value['id'];
      echo "<td>" . $value['title'];
      echo "<td>" . $value['director'];
      echo "<td>" . $value['year'];
      echo "<td>" . $value['duration'];
      echo "</td></td></td></td></td></tr>";
    }    
  echo "</tbody>";
echo "</table>";