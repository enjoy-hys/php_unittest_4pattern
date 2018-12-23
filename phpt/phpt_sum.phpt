--TEST--
1 + 2 is 3
--FILE--
<?php
    require_once 'sum.php';
    $result = sum(1, 2);
    var_dump($result);
?>
--EXPECT--
int(5)
