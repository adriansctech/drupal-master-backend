<?php

$string1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquet dignissim velit eget tempus. Donec consequat a lectus in pharetra. Nunc id luctus nulla, nec hendrerit nibh";
$string2 = "Mauris tempor posuere magna, ac lacinia lorem iaculis ac. Proin maximus, diam sed vulputate lacinia, erat lacus bibendum arcu, varius iaculis odio neque id lorem. Ut varius auctor massa, sed tempus enim sollicitudin eget. Mauris feugiat neque vel libero mattis ultricies. Proin non massa non lorem dignissim bibendum vitae a dolor. Quisque pharetra est at scelerisque cursus. Phasellus nec aliquam sapien, a faucibus ligula. Suspendisse semper mollis est quis rutrum. Mauris laoreet sapien et leo auctor, et porta tortor vestibulum. Praesent lectus purus, gravida vel ex vel, viverra posuere mauris. Quisque vel dolor dolor. ";


if (strlen($string1) > strlen($string2)) {
  echo "La cadena 1, es mayor en " . (strlen($cadena1) - strlen($cadena2)). "caracteres";
}elseif (strlen($string1) < strlen($string2)) {
  echo "La cadena 2, es mayor en " . (strlen($string2) - strlen($string1)) . "caracteres";
}else{
  echo "Las cadena tienen ". strlen($cadena) ." mismos caracteres "; 
}