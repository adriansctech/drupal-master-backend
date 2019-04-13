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
    echo "<td>" . $films['first_film']['id'];
    echo "<td>" . $films['first_film']['title'];
    echo "<td>" . $films['first_film']['director'];
    echo "<td>" . $films['first_film']['year'];
    echo "<td>" . $films['first_film']['duration'];
    echo "</td></td></td></td></td></tr>";
    echo "<tr>";
    echo "<td>" . $films['second_film']['id'];
    echo "<td>" . $films['second_film']['title'];
    echo "<td>" . $films['second_film']['director'];
    echo "<td>" . $films['second_film']['year'];
    echo "<td>" . $films['second_film']['duration'];
    echo "</td></td></td></td></td></tr>";
    echo "<tr>";
    echo "<td>" . $films['third_film']['id'];
    echo "<td>" . $films['third_film']['title'];
    echo "<td>" . $films['third_film']['director'];
    echo "<td>" . $films['third_film']['year'];
    echo "<td>" . $films['third_film']['duration'];
    echo "</td></td></td></td></td></tr>";
    echo "<tr>";
    echo "<td>" . $films['fourth_film']['id'];
    echo "<td>" . $films['fourth_film']['title'];
    echo "<td>" . $films['fourth_film']['director'];
    echo "<td>" . $films['fourth_film']['year'];
    echo "<td>" . $films['fourth_film']['duration'];
    echo "</td></td></td></td></td></tr>";
  echo "</tbody>";
echo "</table>";