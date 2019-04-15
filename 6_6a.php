<?php

$users = [3 => 'foo', 24 => 'boB654', 26 => 'billanderson', 45 => 'paulmAc2'];

$finalValues = preg_grep("/^[a-z]*[a-z]{1,}[A-Z0-9]{1,}/", $users);
print_r($finalValues);
