<?php
$start = session_start([
  'name'=> 'Kaizen']);
var_dump($start);
echo "<hr/>";

$status = session_status();
print_r($status);
echo "<hr/>";
$id=session_id();
$nome=session_name();
print_r($id);
echo "<br/>";
print_r($nome);
echo "<br/>";
print_r($_SESSION);
echo "<br/>";
//$_SESSION['teste']='Yakuza';
$_SESSION['teste2']='Yakuza';
print_r($_SESSION);
unset($_SESSION['teste2']);

//$reset=session_reset();
//print_r($reset);

$clear = session_unset();