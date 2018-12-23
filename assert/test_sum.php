<?php
    require_once 'sum.php';

    $result = sum(1, 2);
    assert($result === 5, '1+2 is 3');
