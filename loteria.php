<?php
menu();

function menu(){

    echo "solicite um jogo. (1) MEGA (2) QUINA (3) LOTOMANIA (4) LOTOFÁCIL (5) SAIR";
    $jogo = fgets(STDIN);

    switch ($jogo) {
        case 1:
            echo "as regras são: \n";
            //echo jogar()."\n";
            echo menu()."\n";
            break;

        case 2:
            $jogo = "quina \n";
            //echo jogar()."\n";
            echo menu()."\n";
            break;

        case 3:
            $jogo = "lotomania \n";
           // echo jogar()."\n";
            echo menu()."\n";
            break;

        case 4:
            $jogo = "lotofácil \n";
            //echo jogar()."\n";
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

function jogar($jogo, $dezenas, $apostas){

    if ($jogo == 1){
       // global  $possibilidades = 60;

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
        echo fgets(STDIN);

        switch ($dezenas){
            case 1:
                $dezenas = 6;
                $apostas = 3.50;
                break;
            case 2:
                $dezenas = 7;
                $apostas = 24.50;
                break;
            case 3:
                $dezenas = 8;
                $apostas = 98.00;
                break;
            case 4:
                $dezenas = 9;
                $apostas = 294.10;
                break;
            case 5:
                $dezenas = 10;
                $apostas = 735.00;
                break;
            case 6:
                $dezenas = 11;
                $apostas = 1617.00;
                break;
            case 7:
                $dezenas = 12;
                $apostas = 3234.00;
                break;
            case 8:
                $dezenas = 13;
                $apostas = 6006.00;
                break;
            case 9:
                $dezenas = 14;
                $apostas = 10510.50;
                break;
            case 10:
            $dezenas = 15;
            $apostas = 17517.50;
            break;
        }
        echo fgets(STDIN);
        echo "escolheu $dezenas dezenas & apostou R$ $apostas";

    }elseif ( $jogo == 2){
        // global  $possibilidades = 80;

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
        echo fgets(STDIN);
        switch ($dezenas){
            case 1:
                $dezenas = 5;
                $apostas = 1.50;
                break;
            case 2:
                $dezenas = 6;
                $apostas = 9.00;
                break;
            case 3:
                $dezenas = 7;
                $apostas = 31.50;
                break;
            case 4:
                $dezenas = 8;
                $apostas = 84.00;
                break;
            case 5:
                $dezenas = 9;
                $apostas = 189.00;
                break;
            case 6:
                $dezenas = 10;
                $apostas = 378.00;
                break;
            case 7:
                $dezenas = 11;
                $apostas = 693.00;
                break;
            case 8:
                $dezenas = 12;
                $apostas = 1188.00;
                break;
            case 9:
                $dezenas = 13;
                $apostas = 1930.50;
                break;
            case 10:
                $dezenas = 14;
                $apostas = 3003.00;
                break;
            case 11:
                $dezenas = 15;
                $apostas = 4504.50;
                break;
        }
        echo "escolheu $dezenas dezenas & apostou R$ $apostas";

    }elseif ($jogo == 3){
        // global  $possibilidades = 50;

        $apostas = 1.50;
        echo "O PREÇO DA APOSTA É ÚNICO E EQUIVALE À $apostas."; //Solicita do usuário quantas apostas ele quer gerar
        echo "ESCOLHA QUANTAS DEZENAS: \n 
        Digite (1) 15 dezenas\n
        Digite (2) 16 dezenas\n 
        Digite (3) 17 dezenas\n 
        Digite (4) 18 dezenas\n 
        Digite (5) 19 dezenas\n 
        Digite (6) 20 dezenas\n ";    //Solicita do usuário quantas dezenas ele quer apostar
        echo fgets(STDIN);

        switch ($dezenas){
            case 1:
                $dezenas = 15;
                $apostas = 1.50;
                break;
            case 2:
                $dezenas = 16;
                $apostas = 1.50;
                break;
            case 3:
                $dezenas = 17;
                $apostas = 1.50;
                break;
            case 4:
                $dezenas = 18;
                $apostas = 1.50;
                break;
            case 5:
                $dezenas = 19;
                $apostas = 1.50;
                break;
            case 6:
                $dezenas = 20;
                $apostas = 1.50;
                break;
        }
        echo "escolheu $dezenas dezenas & apostou R$ $apostas";
    }else {
        // global  $possibilidades = 25;

        $apostas = 1.50;
        echo "O PREÇO DA APOSTA É ÚNICO E EQUIVALE À $apostas."; //Solicita do usuário quantas apostas ele quer gerar
        echo "ESCOLHA QUANTAS DEZENAS: \n 
        Digite (1) 15 dezenas & apostar R$ 2.00\n
        Digite (2) 16 dezenas & apostar R$ 32.00\n 
        Digite (3) 17 dezenas & apostar R$ 272.00\n 
        Digite (4) 18 dezenas & apostar R$ 1632.00\n"; //Solicita do usuário quantas dezenas ele quer apostar
        echo fgets(STDIN);

        switch ($dezenas){
            case 1:
                $dezenas = 15;
                $apostas = 2.00 ;
                break;
            case 2:
                $dezenas = 16;
                $apostas = 32.00;
                break;
            case 3:
                $dezenas = 17;
                $apostas = 272.00;
                break;
            case 4:
                $dezenas = 18;
                $apostas = 1632.00;
                break;
        }
        echo "escolheu $dezenas dezenas & apostou R$ $apostas";
    }
}
jogar(1,10, 10); //função jogar chamada & PASSSAR VALORES AQUI PARA RODAR NO TERMINAL.

function sortear($possibilidades, $dezenas){

    $numSorteados = [];

    for ($i=1; $i<=$dezenas; $i++){

        $sorteado = 0;    //inicializado

        do{
            $sorteado = rand(1, $possibilidades);
        }while(in_array($sorteado, $numSorteados));

        $numSorteados[] = $sorteado;
    }
    sort($numSorteados); //Exibe as dezenas de cada apostas em ordem crescente
    return $numSorteados;
}