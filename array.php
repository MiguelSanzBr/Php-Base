<?php
/*$carros[] =
    [
        "Fabricante" => "Wolskwagen",
        "Nome" => "Fusca",
        "Cor" => "Vermelho"
    ];

    $carros[] =
    [
        "Fabricante" => "Fiat",
        "Nome" => "Uno",
        "Cor" => "Preto"
    ];

    $carros[] =
    [
        "Fabricante" => "Chevrolet",
        "Nome" => "Opala",
        "Cor" => "Azul"
    ];

foreach ($carros as $r) 
{
    echo $r['Fabricante'];
}

#array associativo 
  $motos=[
    "marca"=>"susuki/",
    "tempo"=>3,
    "dono"=>'jasinto'
    ];
  $motos['pneu']='Michelin';
  print_r($motos["marca"]);
$Dados=[
  "pessoa"=> [
    [
        "id"=>1,
      "nome"=>"medina/",
     "curso"=>"Sei o nome"
  ],
     [
        "id"=>2,
      "nome"=>"kaizen",
     "sexu"=>"MACHO"
     ],
      [
          "id"=>3,
        "nome"=>"ana",
      "genero"=>"Muié"]
    ]
  ];
  print_r($Dados["pessoa"][0]["nome"]);
    $receitaDeBolo=[
      "fermento",
      "farinha",
      "ovo",
      "óleo",
      "açúcar",
      "leite"];
    shuffle($receitaDeBolo);
     print_r($receitaDeBolo);
 
  $Eu = [
   "olho" =>[
     "mesa"=>"almofada",
     "chão"=>"cadeira/",
     "varau"=>"roupa"],
     "pele"=>[
       "Cabelo"=>"vento",
       "corpo"=>"rede",
       "celulas"=>"átomos"
       ]
       ];
       print_r($Eu["olho"]["chão"]);
       
       $Animes=[
         "Big3"=>["One Piece","Naruto","Dragon Ball"],
         "BigM"=>["Beserk","Vinland Saga/","Vagabond"]
         ];
         print_r($Animes["BigM"][1]);
       echo "<hr>";
       */
       $inf=["cor"=>"branco",
             "sexo"=>"masculino",
             "celular"=>"motorola",
             "dedo"=>"indicador",
             "bike"=>"caloi"];
             ?>
    <table border = "1">
      <?php foreach ($inf as $chave=>$valor)?>
           <td><?php echo $chave;?><td/>
           <td><?php echo $valor;?><td/>
    </table>