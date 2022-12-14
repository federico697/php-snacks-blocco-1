<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php 
$paragrafo = "Lorem 1 ipsum dolor sit amet consectetur adipisicing elit, 
Eaque ullam aut doloribus magni veniam rerum, impedit natus sed a repellendus,
consectetur quis illo fugit ducimus optio incidunt quas quidem blanditiis.

lorem 2 ipsum veniam rerum, impedit natus sed a repellendus,
dolor sit amet consectetur adipisicing elit.

lorem 3 ipsum Eaque ullam aut doloribus magni veniam rerum, impedit natus sed a repellendus,
dolor sit amet consectetur adipisicing elit.";

$arrayParagrafi = explode( '.', $paragrafo );

for($i = 0; $i < count($arrayParagrafi); $i++){

    if($arrayParagrafi[$i] !== ''){
        echo "<p>";
        echo $arrayParagrafi[$i];
        echo "</p>";
    }
    
}
?>

