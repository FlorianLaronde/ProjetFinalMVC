<?php

// mes constantes REGEXP

define('REGEXP_STR_NO_NUMBER', "/^[A-Za-z-éèêëàâäôöûüç\' ]+$/");

define('REGEXP_STR_NUMBER', "/^[0-9]+$/");

define('REGEXP_DATE', "/^\d{4}-\d{2}-\d{1,2}$/");

define('REGEXP_PHONE', "/^([+0-9]{1,3}[0-9]{8,12})|[0-9]{8,15}$/");

define('REGEXP_MAIL', "/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/");

define('REGEXP_DATEHOUR', "/^([0-9]{4})-([0-1][0-9])-([0-3][0-9])\s([0-1][0-9]|[2][0-3]):([0-5][0-9]):([0-5][0-9])$/");

define('REGEXP_PSEUDO','/^[A-Za-z-éèêëàâäôöûüç0-9\-\.]+$/');

define('REGEXP_PASS', '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/');


?>