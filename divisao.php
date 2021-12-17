<?php

function  divisao($dividendo, $divisor)
{
    try{
        if($divisor == 0){
            throw new RangeException("O número não pode ser dividido por zero");
        }

        $resultado= $dividendo/ $divisor;

        echo "<strong>O resultado é: </strong>".$resultado;

    }catch(Exception){

        echo "Tentando imprimir valores";
    }
    finally{
        echo "<br/>Tratando exceções";
    }
}

divisao(10,0); //Divindo por zero será lançada uma exceção 