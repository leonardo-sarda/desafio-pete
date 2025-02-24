<?php
function cakes($recipe, $ingredients){
  // Desenvolver o código nesta function,
  $bolos = 999;
  foreach ($recipe as $ingrediente => $quantidade) {
    if (isset($ingredients[$ingrediente])) {
      $boloIngrediente = intdiv($ingredients[$ingrediente], $quantidade);

      if ($boloIngrediente < $bolos){
        $bolos = $boloIngrediente;
      }
    }else{
      return 0;
    }
  }
  return $bolos;
  
}
// Abaixo estão os casos de uso:
var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
  === 2); 

var_dump(cakes(
  ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], 
  ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]) 
  === 0); 

var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
  === 3); 
