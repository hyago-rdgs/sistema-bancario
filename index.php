<?php 
    $saldo = 1_000;
    $titular_conta = "Hyago Rodrigues";

    echo "***************\n"; 
    echo "Titular: $titular_conta\n";
    echo "Saldo: $saldo\n";
    echo "***************\n";

    do {
        echo "1. Consultar Saldo da Conta\n";
        echo "2. Sacar Valor\n";
        echo "3. Depositar Valor\n";
        echo "4. Sair\n";

        $resposta = (int) fgets(STDIN);

        switch ($resposta) {
            case 1:
                echo "***************\n"; 
                echo "Titular: $titular_conta\n";
                echo "Saldo: $saldo\n";
                echo "***************\n";
                break;

            case 2:
                echo "Quanto Deseja Sacar?\n";
                $valor_saque = fgets(STDIN);
                if ($valor_saque > $saldo) {
                    echo "Saldo Insulficiente!\n";
                } else {
                    $saldo -= $valor_saque;
                    echo "\033[2J\033[1;1H";
                }
                break;

            case 3:
                echo "Quanto Deseja Depositar?";
                $valor_deposito = fgets(STDIN);
                $saldo += $valor_deposito;
                break;
            
            case 4:
                echo "Até mais!\n";
                break;
    
            default:
                echo "Opção Inválida\n";
                break;
        }

    } while ($resposta != 4);