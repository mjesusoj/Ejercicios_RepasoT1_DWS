<?php
    // Paso 1: Array con 10 valores aleatorios de 1 a 100
    $array = [];

    for ($i=0;$i<10;$i++){
        $array[] = mt_rand(1,100);
    }

    // Paso 2: Seleccionar un valor aleatorio del array y guardarlo en una cookie
    $posicion_aleatoria = mt_rand(0, count($array));
    $valor_aleatorio = $posicion_aleatoria;
    setcookie("valor_aleatorio", $valor_aleatorio,time()+30000);

    // Paso 3: Buscar el primer valor divisible por 3 del array
    $encontrado = 0;
    $i = 0;
    while($i<count($array) && $encontrado==0){
        if ($array[$i]%3 == 0){
            $valor = $array[$i];
            $encontrado=1;
        }
        $i++;
    }

    // Paso 4: Indicar si el valor es mayor, menor o igual que el del punto 2
    if ($valor > $valor_aleatorio){
        echo "El valor divisible es mayor que el valor aleatorio" . "<br/>";
    }else if($valor <= $valor_aleatorio){
        echo "El valor divisible es menor o igual que el valor aleatorio" . "<br/>";
    }

    // Paso 5: Mostrar los valores de los puntos 2 y 3
    echo "Valor aleatorio del array " . $valor_aleatorio . "<br/>";
    echo "Valor divisble por 3 es: " . $valor . "<br/>";

    // Paso 6: Mostrar todo el array usando var_dump
    var_dump($array);
?>