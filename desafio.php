<?php
    $titular = "Nickollas Silva";
    (float) $saldo = 1000;
    do{
        echo"*************\n";
        echo "Titular: $titular\n";
        echo "Saldo atual: R$$saldo\n";
        echo"*************\n";
        echo"1. Consultar saldo atual\n";
        echo"2. Sacar dinheiro\n";
        echo"3. Depositar dinheiro\n";
        echo"4. Sair\n";
        $operacao = fgets(STDIN);

        switch ($operacao) {
            case '1':
                echo "\n\n*******************\n";
                echo "* Titular: $titular\n";
                echo "* Saldo atual: R$$saldo\n";
                echo "*******************\n\n\n";
                break;
            case '2':
                echo "\n\n*******************\n";
                echo "* Titular: $titular\n";
                echo "* Saldo atual: R$$saldo\n";
                echo "* Informe o valor do saque: ";
                $saque = fgets(STDIN);
                if($saldo >= $saque){
                    $saldo -= $saque;
                    echo "Saque realizado com sucesso!\n";
                }else{
                    echo "Saldo indisponível\n";
                }
                echo "*******************\n\n\n";
                break;
            case '3':
                echo "\n\n*******************\n";
                echo "* Titular: $titular\n";
                echo "* Saldo atual: R$$saldo\n";
                echo "* Informe o valor do depósito: ";
                $deposito = fgets(STDIN);
                $saldo += $deposito;
                echo "Depósito realizado com sucesso!\n";
                echo "*******************\n\n\n";
                break;
            case '4':
                echo "\n\n**********************\n";
                echo "*\n";
                echo "* Até mais, $titular\n";
                echo "*\n";
                echo "**********************\n\n\n";
                break;
            default:
                echo "\n#################\n";
                echo("OPERAÇÃO INVÁLIDA\n");
                echo "#################\n";
        }
    }while($operacao != "4");