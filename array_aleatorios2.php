<?php
    // 1º Paso: Crear arrays vacíos 
    $array = [];
    $array_pares = [];
    $array_impares = [];
    
    // 2º paso: Realizar un bucle, para guardar 50 valores aleatorios entre 1 y 500
    for ($i=0;$i<50;$i++){
        $array[$i] = mt_rand(1,500);
    }

    // 3º paso: Buscar el valor par mayor
    $num_maximo = 0;
    for ($i=0;$i<count($array);$i++){
        if ($array[$i] % 2 == 0 && $array[$i] > $num_maximo){
            $array_pares = $array; 
            $num_maximo = $array[$i];
            $i++;
        }
    }

    // 4º paso: Mostrar los resultados
    echo "Número máximo " . $num_maximo;
    echo "<br/><br/>";
    print_r($array_pares);

    // 5º paso: Crear un array con los 3 valores impares mayores
    for ($i=0;$i<count($array);$i++){
        if ($array[$i] % 2 != 0){
            $array_impares = $array;
            rsort($array_impares);
            $i++;
            array_slice($array_impares,0,3);
        }
    }

    // Mostrar resultado
    echo "<br/><br/>";
    print_r($array_impares);
?>