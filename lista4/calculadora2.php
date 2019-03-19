<?php
$n1= $_POST["n1"];
$n2= $_POST["n2"];

if($_POST["operation"]=="adicao"){
    
    print "Resultado da soma: ".($n1+$n2);
}elseif($_POST["operation"]=="sub"){
    
    print "Resultado da subtração: ".($n1-$n2);
}elseif($_POST["operation"]=="mult"){
    
    print "Resultado da multiplicação: ".($n1*$n2);
}else{
    print "Resultado da divisão: ".($n1/$n2);
}
?>

