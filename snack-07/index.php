<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
$arrayAlunni = [
    [
       'nome' => 'alex',
       'cognome' => 'red',
       'voti' => [2, 4, 8, 5, 10]
    ],
    [
        'nome' => 'alessia',
        'cognome' => 'verdi',
        'voti' => [12, 6, 3, 9, 11]
     ]
];


for( $i = 0; $i < count($arrayAlunni); $i++ ){

    $mediaVoti = array_sum( $arrayAlunni[$i]['voti'] ) / count( $arrayAlunni[$i]['voti'] );

    echo $arrayAlunni[$i]['nome'] . ' - ' . $arrayAlunni[$i]['cognome'] . ' ' . 'la media dei voti è : ' . $mediaVoti;
    echo "<br>";

}
?>