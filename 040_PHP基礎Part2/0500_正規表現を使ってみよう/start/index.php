<?php
$char = 'j';
if (preg_match("/.+/i", $char, $result)) {
  echo "検索成功";
  print_r($result);
} else {
  echo "検索失敗";
}
