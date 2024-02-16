<?php
/*$Edad =18;
if($Edad< 18){
    echo "Usted es menor de edad";
}
elseif($Edad>=18 && $Edad <65){
    echo "Usted es mayor de edad"

}
else{
    echo "Usted es un adulto mayor";
}
*/
$diaSemana= 3;

Switch ($diaSemana) {
    case 1:
        echo "Lunes";
        break;
    
    case 2:
        echo "martes";
        break;
    case 3:
            echo "Miercoles";
            break;
        
    case 4:
            echo "Jueves";
            break;
    case 5: 
        echo "viernes";
        break;
    case 6:
            echo "Lunes";
            break;
        
    case 7:
            echo "martes";
            break;
    default :
    echo "Dia Invalido";
}

?>