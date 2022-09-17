<?php
include("class_lib7.5.php")
;$obj = new MyCloneable();
$obj->object1 = new SubObject();
$obj->object2 = new SubObject();
$obj2 = clone $obj;
print("<br>Original Object: ");
print_r($obj);
print("<br>Cloned Object: ");
print_r($obj2);
?>