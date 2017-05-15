<?php
menu();

function menu(){
    echo "solicite um jogo. (1) MEGA (2) QUINA (3) LOTOMANIA (4) LOTOFÁCIL (5) SAIR";
    $jogo = fgets(STDIN);

    switch ($jogo) {
        case 1:
            echo "as regras são: jogar()";
            echo menu();
            break;

        case 2:
            $jogo = "quina";
            echo menu();
            break;

        case 3:
            $jogo = "lotomania";
            echo menu();
            break;

        case 4:
            $jogo = "lotofácil";
            echo menu();
            break;

        case 5:
            exit();
            break;

        default:
            echo "opcao inválida";
            menu();

    }
    return $jogo;
}
function sortear($possibilidades, $dezenas){

    $numSorteados = [];

    for ($i=1; $i<=$dezenas; $i++){

        $sorteado = 0;    //inicializado

        do{
            $sorteado = rand(1, $possibilidades);
        }while(in_array($sorteado, $numSorteados));

        $numSorteados[] = $sorteado;
    }
    sort($numSorteados);
    return $numSorteados;
}