<?php 

$arr = [ 42 , 12 , 85 , 3 , 5 , 13 , 8];

function bubblesort( $arr ){
$len = count( $arr );
$comp = 0;

for ( $i = 0 ; $i < $len ; $i++ ) {
    for( $k = 0; $k < $len - 1 ; $k++ ) {
        $comp++;

        if( $arr[$k] > $arr[$k+1] ){
            $temp =  $arr[$k+1];
            $arr[ $k + 1 ] = $arr[ $k ];
            $arr[ $k ] = $temp;
        }
    }
}
echo '<h4>' . $comp . ' Comparisons</h4>';
return $arr;
}



echo '<strong>Unsorted</strong><br>' . implode( ', ', $arr ) . '<br>';
$sorted = bubbleSort( $arr );
echo '<strong>Sorted</strong><br>' . implode( ', ', $sorted );
?>
