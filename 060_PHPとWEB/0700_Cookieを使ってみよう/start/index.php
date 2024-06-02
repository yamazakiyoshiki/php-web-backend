<?php
setcookie('VISIT_COUNT', 1, [
  'expires' => time() + 60 * 60 * 24 * 30,
  'path' => '/'
]);
// $_COOKIE['VISIT_COUNT'] = 0;
var_dump($_COOKIE['VISIT_COUNT']);
