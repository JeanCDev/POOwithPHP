<?php

  function soma(){

    // pega todos os parâmetros e coloca em um array
    $params = func_get_args();
    // conta quantos parâmetros foram passados
    $total = func_num_args();

    $sum=0;

    for($i = 0; $i<$total; $i++){

      $sum += $params[$i];

    }

    return $sum;

  }

  function stringTreat($string){

    echo str_word_count($string) . '<br>';
    print_r(explode(" ", $string));
    print_r(str_split($string));
    echo chr(65) .'<br>';
    echo ord('A') .'<br>';
    echo strtolower($string) .'<br>';
    echo strtoupper($string) .'<br>';
    echo ucfirst($string) .'<br>';
    echo ucwords($string) .'<br>'; // palavras com a primeira letra maiúscula
    echo strrev($string) .'<br>'; // inverte a string
    echo strpos($string, 'Uma') .'<br>'; // localização de uma substring
    echo substr_count($string, 'uma') .'<br>'; // conta as aparições de uma substring de uma substring
    echo substr($string, 0,5) .'<br>'; // Cria uma nova string a partir da primeira
    echo str_pad($string, 30, ' ', STR_PAD_RIGHT) .'<br>'; // Cria uma nova string para caber em um intervalo completando com espaços
    echo str_repeat($string, 5) .'<br>'; // Repete uma string
    echo str_replace('Uma','Olá', $string) .'<br>'; // Troca uma determinada palavra da string

  }

?>