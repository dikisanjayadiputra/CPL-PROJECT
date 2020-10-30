<?php
if (isset($_POST['action'])) {
 switch ($_POST['action']) {
 case 'insert':
 insert();
 break;
 case 'select':
 select();
 break;
 }
}
 
function select() {
 echo "eksekusi fungsi yang dimaksud.";
 exit;
}
 
function insert() {
 echo "eksekusi fungsi yang dimaksud.";
 exit;
}
?>