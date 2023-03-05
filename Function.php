<?php
function somar ($n,$a){
  $total=$n+$a;
  return $total;
}
$x=2;
$y=9;
$somar=somar($x, $y);
echo "Total: ".$somar."<br/>";


$ordem=[2,9,1,8,7,6,3];
sort($ordem);
print_r($ordem);
echo "<br/>";

function dividir($numero){
  $resul= $numero /2;
  return $resul;
}
$metade=dividir(4);
echo"A metade é: " .$metade. "<br/>";

function diz($n){
  $d=$n *0.1;
  return $d;
}
$dizimo=diz(100);
echo"seu Dizino é R$: ".$dizimo."<br/>";

function ir ($r){
    $renda=$r*0.15;
  return $renda;
}
$impostoDeRenda=ir(2000);
  echo"Imposto de renda R$ " .
  $impostoDeRenda. "<br/>"."<hr/>";
 function subsequente (){
    for ($i=0;$i<11;$i++){
  echo $i."<br/>"."<hr/>";
}
}

subsequente();

function capital($pais){
 $capitais=[
'Brasil'=> 'Brasilia',
'Franca'=> 'Paris', 
'Espanha'=> 'Madri'
 ];
 return $capitais[$pais]; 
}
$estado=// eu sei que é aqui
capital('Franca');
echo"A Capital é: " .$estado;
