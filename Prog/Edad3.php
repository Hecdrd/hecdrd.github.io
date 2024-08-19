<?php  
    function Resta($A, $B){
        $Suma=($A-$B); 
        return $Suma;
    }
    $Res= Resta($A=$_POST['A'], $B=$_POST['B']);
    echo "Su edad es: ", $Res, " Anos";  
?>    