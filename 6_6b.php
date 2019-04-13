<?php

$string = "aabCcCCddDDeFFgGGhhhhIJJkLLmmmmnOpQrrrSssTTUV";

preg_match_all("/[a-z]{2}[A-Z]{2,}/", $string, $totalMatches);

print_r($totalMatches);