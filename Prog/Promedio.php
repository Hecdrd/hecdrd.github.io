<?php  
    function Resta($A, $B){
        $Suma=($A+$B)/2; 
        return $Suma;
    }
    $Res= Resta($A=$_POST['A'], $B=$_POST['B']);
    echo "Su Promedio Es: ", $Res; 
?>    