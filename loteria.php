<?php
//O QUE FALTA: *Não gerar apostas duplicadas ou com número duplicados*

menu();
function menu(){

    echo "solicite um jogo. (1) MEGA (2) QUINA (3) LOTOMANIA (4) LOTOFÁCIL (5) SAIR";

    $jogo = fgets(STDIN);

    switch ($jogo) {
        case 1:
            echo jogar(1)."\n";
            echo menu()."\n";
            break;
        case 2:
            $jogo = "quina \n";
            echo jogar(2)."\n";
            echo menu()."\n";
            break;
        case 3:
            $jogo = "lotomania \n";
            echo jogar(3)."\n";
            echo menu()."\n";
            break;
        case 4:
            $jogo = "lotofácil \n";
            echo jogar(4)."\n";
            echo menu()."\n";
            break;
        case 5:
            exit();
            break;
        default:
            echo "opcao inválida \n";
            menu();
    }
    return $jogo;
}

function jogar($jogo){
    if ($jogo == 1){

        echo "ESCOLHA QUANTAS DEZENAS: \n 
        Digite (1) 6 dezenas & apostar 3.50\n 
        Digite (2) 7 dezenas & apostar 24.50\n 
        Digite (3) 8 dezenas & apostar 98.00\n 
        Digite (4) 9 dezenas & apostar 294.10\n 
        Digite (5) 10 dezenas & apostar 735.00\n 
        Digite (6) 11 dezenas & apostar 1617.00\n 
        Digite (7) 12 dezenas & apostar 3234.00\n 
        Digite (8) 13 dezenas & apostar 6006.00\n 
        Digite (9) 14 dezenas & apostar 10510.50\n 
        Digite (10) 15 dezenas & apostar 17517.50\n"; //Solicita do usuário quantas dezenas ele quer apostar & quantas apostas ele quer gerar

        $dezenas = trim(fgets(STDIN));

        switch ($dezenas){
            case 1:
                $dezenas = 6;
                $valor = 3.50;
                break;
            case 2:
                $dezenas = 7;
                $valor = 24.50;
                break;
            case 3:
                $dezenas = 8;
                $valor = 98.00;
                break;
            case 4:
                $dezenas = 9;
                $valor = 294.10;
                break;
            case 5:
                $dezenas = 10;
                $valor = 735.00;
                break;
            case 6:
                $dezenas = 11;
                $valor = 1617.00;
                break;
            case 7:
                $dezenas = 12;
                $valor = 3234.00;
                break;
            case 8:
                $dezenas = 13;
                $valor = 6006.00;
                break;
            case 9:
                $dezenas = 14;
                $valor = 10510.50;
                break;
            case 10:
                $dezenas = 15;
                $valor = 17517.50;
                break;

            default :
                echo "voce escolhe uma opccao invalida";
                jogar(1);
        }

        echo "Digite o numeo de apostas que deseja: ";
        $numeroApostas = trim(fgets(STDIN));

        for ($i=0; $i < $numeroApostas; $i++){
            print_r(sortear(60, $dezenas));

        }

        $valorTotal = $valor * $numeroApostas;
        echo "escolheu $dezenas dezenas & apostou R$ ". number_format($valorTotal, "2", ",", ".");

   }elseif ( $jogo == 2){

        echo "ESCOLHA QUANTAS DEZENAS: \n
        Digite (1) 5 dezenas & apostar 1.50\n
        Digite (2) 6 dezenas & apostar 9.00\n
        Digite (3) 7 dezenas & apostar 31.50\n
        Digite (4) 8 dezenas & apostar 84.00\n
        Digite (5) 9 dezenas & apostar 189.00\n
        Digite (6) 10 dezenas & apostar 378.00\n
        Digite (7) 11 dezenas & apostar 693.00\n
        Digite (8) 12 dezenas & apostar 1188.00\n
        Digite (9) 13 dezenas & apostar 1930.50\n
        Digite (10) 14 dezenas & apostar 3003.00\n
        Digite (11) 15 dezenas & apostar 4504.50\n"; //Solicita do usuário quantas dezenas ele quer apostar & quantas apostas ele quer gerar
        $dezenas = trim(fgets(STDIN));

        switch ($dezenas){
            case 1:
                $dezenas = 5;
                $valor = 1.50;
                break;
            case 2:
                $dezenas = 6;
                $valor = 9.00;
                break;
            case 3:
                $dezenas = 7;
                $valor = 31.50;
                break;
            case 4:
                $dezenas = 8;
                $valor = 84.00;
                break;
            case 5:
                $dezenas = 9;
                $valor = 189.00;
                break;
            case 6:
                $dezenas = 10;
                $valor = 378.00;
                break;
            case 7:
                $dezenas = 11;
                $valor = 693.00;
                break;
            case 8:
                $dezenas = 12;
                $valor = 1188.00;
                break;
            case 9:
                $dezenas = 13;
                $valor = 1930.50;
                break;
            case 10:
                $dezenas = 14;
                $valor = 3003.00;
                break;
            case 11:
                $dezenas = 15;
                $valor = 4504.50;
                break;
            default :
                echo "voce escolhe uma opccao invalida";
                jogar(2);
        }

        echo "Digite o numeo de apostas que deseja: ";
        $numeroApostas = trim(fgets(STDIN));

        for ($i=0; $i < $numeroApostas; $i++){
            print_r(sortear(80, $dezenas));
        }

        $valorTotal = $valor * $numeroApostas;

        echo "escolheu $dezenas dezenas & apostou R$ ". number_format($valorTotal, "2", ",", ".");

        } elseif ($jogo == 3){

        $valor = 1.50 ."\n";

        echo "\n O PREÇO DA APOSTA É ÚNICO E EQUIVALE À $valor \n"; //Solicita do usuário quantas apostas ele quer gerar

        echo "ESCOLHA QUANTAS DEZENAS: \n
        Digite (1) 15 dezenas\n
        Digite (2) 16 dezenas\n
        Digite (3) 17 dezenas\n
        Digite (4) 18 dezenas\n
        Digite (5) 19 dezenas\n
        Digite (6) 20 dezenas\n ";    //Solicita do usuário quantas dezenas ele quer apostar

        $dezenas = trim(fgets(STDIN));

        switch ($dezenas){
            case 1:
                $dezenas = 15;
                break;
            case 2:
                $dezenas = 16;
                break;
            case 3:
                $dezenas = 17;
                break;
            case 4:
                $dezenas = 18;
                break;
            case 5:
                $dezenas = 19;
                break;
            case 6:
                $dezenas = 20;
                break;
        }

        echo "Digite o numeo de apostas que deseja: ";
            $numeroApostas = trim(fgets(STDIN));

        for ($i=0; $i < $numeroApostas; $i++){
              print_r(sortear(50, $dezenas));
        }

        $valorTotal = $valor * $numeroApostas;

        echo "escolheu $dezenas dezenas & apostou R$ ". number_format($valorTotal, "2", ",", ".");

        jogar(3);


    }else {

        echo "ESCOLHA QUANTAS DEZENAS: \n
        Digite (1) 15 dezenas & apostar R$ 2.00\n
        Digite (2) 16 dezenas & apostar R$ 32.00\n
        Digite (3) 17 dezenas & apostar R$ 272.00\n
        Digite (4) 18 dezenas & apostar R$ 1632.00\n"; //Solicita do usuário quantas dezenas ele quer apostar

        $dezenas = trim(fgets(STDIN));

        switch ($dezenas){
            case 1:
                $dezenas = 15;
                $valor = 2.00 ;
                break;
            case 2:
                $dezenas = 16;
                $valor = 32.00;
                break;
            case 3:
                $dezenas = 17;
                $valor = 272.00;
                break;
            case 4:
                $dezenas = 18;
                $valor = 1632.00;
                break;
        }
        echo "Digite o numeo de apostas que deseja: ";
        $numeroApostas = trim(fgets(STDIN));

        for ($i=0; $i < $numeroApostas; $i++){
            echo (sortear(25, $dezenas));
        }

        $valorTotal = $valor * $numeroApostas;

        echo "escolheu $dezenas dezenas & apostou R$ ". number_format($valorTotal, "2", ",", ".");

        jogar(4);
    }

}
function sortear($possibilidades, $dezenas){
    $numSorteados = [];
    for ($i=1; $i<=$dezenas; $i++){
        $sorteado = 0;    //inicializado
        do{
            $sorteado = rand(1, $possibilidades);
        }while(in_array($sorteado, $numSorteados));  //in_array — Checa se um valor existe em um array
        $numSorteados[] = $sorteado;
    }
    sort($numSorteados); //Exibe as dezenas de cada apostas em ordem crescente
    return $numSorteados;
}