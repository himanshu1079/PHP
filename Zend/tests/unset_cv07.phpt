--TEST--
unset() CV 7 (indirect unset() of global variable in import_request_variables())
--GET--
x=2
--FILE--
<?php
$_x = "1\n";
echo $_x;
import_request_variables("g","_");
echo $_x;
echo "\nok\n";
?>
--EXPECTF--
1
2
ok
