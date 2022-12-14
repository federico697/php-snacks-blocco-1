<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta -->

<?php 

$arrayVuoto = [];

for( $i = 0; count( $arrayVuoto ) < 15; $i++){

    $numeroRandom = rand( 1, 100 );

    if( !in_array( $numeroRandom, $arrayVuoto ) ){
        $arrayVuoto[] = $numeroRandom;
    }

}


for( $k = 0; $k < count($arrayVuoto); $k++ ){
    echo $arrayVuoto[$k];
    echo "<br>";
}
?>