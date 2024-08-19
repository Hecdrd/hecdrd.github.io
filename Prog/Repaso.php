<?php
    $A=$_POST['A']; 
    $B=$_POST['B'];
    function Resta($A, $B){
        $Resta=($A-$B); 
        return $Resta;
    }
    $Res1= Resta($A=$_POST['A'], $B=$_POST['B']);
    if(isset($_POST['Restar'])){
        echo "Su edad es: ", $Res1, " Anos";
    }
    function Suma($A, $B){
        $Suma=($A+$B)/2; 
        return $Suma;
    }
    $Res2= Suma($A=$_POST['A'], $B=$_POST['B']);
    if(isset($_POST['Promedio'])){
        echo "Su Promedio Es: ", $Res2; 
    }
    function Multi($A, $B){
        $Multi=($A*$B); 
        return $Multi;
    }
    $Res= Multi($A=$_POST['A'], $B=$_POST['B']);
    if(isset($_POST['Multiplicar'])){
        echo " Su Salario es : ", $Res;
    }
?>    