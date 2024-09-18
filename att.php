<?php

class Carta
{
    //atributos
    private int $numero;
    private string $nome;
    private string $modelo;
    private string $dica;

    //construct
    public function __construct($num, $nome, $modelo, $dica)
    {
        $this->numero = $num;
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->dica = $dica;
    }

    //tostring
    public function __toString()
    {   
        $representacoesAviao = [
            "F-39E Gripen" => "\n
        +---------------------------+
        |          Carta 01         |
        +---------------------------+
        |                           |
        |        F-39E Gripen       |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |   Modelo: F-39E Gripen    |
        +---------------------------+
        |          Carta 01         |
        +---------------------------+
        \n",
            "F-5EM Tiger II" => "\n
        +---------------------------+
        |          Carta 02         |
        +---------------------------+
        |                           |
        |       F-5EM Tiger II      |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |   Modelo: F-5EM Tiger II  |
        +---------------------------+
        |          Carta 02         |
        +---------------------------+
        \n",
            "A-1M AMX" => "\n
        +---------------------------+
        |          Carta 03         |
        +---------------------------+
        |                           |
        |          A-1M AMX         |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |   Modelo: A-1M AMX        |
        +---------------------------+
        |          Carta 03         |
        +---------------------------+
        \n",
            "Super Tucano A-29" => "\n
        +---------------------------+
        |          Carta 04         |
        +---------------------------+
        |                           |
        |     Super Tucano A-29     |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |  Modelo: Super Tucano A-29|
        +---------------------------+
        |          Carta 04         |
        +---------------------------+
        \n",
            "Mirage 2000" => "\n
        +---------------------------+
        |          Carta 05         |
        +---------------------------+
        |                           |
        |     Super Mirage 2000     |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |  Modelo: Mirage 2000      |
        +---------------------------+
        |          Carta 05         |
        +---------------------------+
        \n",
            "F-5FM Tiger II" => "\n
        +---------------------------+
        |          Carta 06         |
        +---------------------------+
        |                           |
        |       F-5FM Tiger II      |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |  Modelo: F-5FM Tiger II   |
        +---------------------------+
        |          Carta 06         |
        +---------------------------+
        \n",
            "F-39F Gripen" => "\n
        +---------------------------+
        |          Carta 07         |
        +---------------------------+
        |                           |
        |        F-39F Gripen       |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |  Modelo: F-39F Gripen     |
        +---------------------------+
        |          Carta 07         |
        +---------------------------+
        \n",
            "EMB-314 Super Tucano" => "\n
        +---------------------------+
        |          Carta 08         |
        +---------------------------+
        |                           |
        |    EMB-314 Super Tucano   |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |Modelo:EMB-314 Super Tucano|
        +---------------------------+
        |          Carta 08         |
        +---------------------------+
        \n",
            "P-3AM Orion" => "\n
        +---------------------------+
        |          Carta 09         |
        +---------------------------+
        |                           |
        |        P-3AM Orion        |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |  Modelo: P-3AM Orion      |
        +---------------------------+
        |          Carta 09         |
        +---------------------------+
        \n",
            "A-1B AMX" => "\n
        +---------------------------+
        |          Carta 10         |
        +---------------------------+
        |                           |
        |          A-1B AMX         |
        |                           |
        |            ___            |
        |   ________/   \________   |
        |   \                   /   |
        |    \___           ___/    |
        |        \    |    /        |
        |         \___|___/         |
        |                           |
        |  Modelo: A-1B AMX         |
        +---------------------------+
        |          Carta 10         |
        +---------------------------+
        \n"
        ];

        return "\nNúmero da carta: " . $this->numero . "\nNome da aeronave: " . $this->nome . "\nModelo da areonave: " . $this->modelo . "\nRepresentação da carta: " . $representacoesAviao[$this->modelo];
    }

    //gets and setts (setts serão menos necessarios, visto que o construct está no codigo)

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getDica(): string
    {
        return $this->dica;
    }

    public function setDica(string $dica): self
    {
        $this->dica = $dica;

        return $this;
    }
}

//settando todas as cartas e colocando elas dentro do array "baralho"

$baralho = array();
$carta1 = new Carta(1, "Caça Supremo", "F-39E Gripen", "Este caça brasileiro é um dos mais modernos e avançados da FAB. Seu desenvolvimento foi um esforço conjunto com um país europeu, e o nome dele faz referência a um felino conhecido por sua agilidade e precisão.");
array_push($baralho, $carta1);
$carta2 = new Carta(2, "Águia da Amazônia", "F-5EM Tiger II", "Este avião é um dos caças mais antigos da FAB, mas ainda desempenha um papel crucial. Seu nome é inspirado em um felino que também é símbolo de força e agilidade.");
array_push($baralho, $carta2);
$carta3 = new Carta(3, "Falcão Noturno", "A-1M AMX", "Este caça é conhecido por sua versatilidade e eficácia em diversas missões. Seu nome evoca uma ave de rapina, famosa por sua habilidade de caçar tanto de dia quanto à noite.");
array_push($baralho, $carta3);
$carta4 = new Carta(4, "Lobo Caçador", "Super Tucano A-29", "Este avião é conhecido por sua capacidade de realizar missões de ataque leve e treinamento. Seu nome faz referência a um animal conhecido por sua agilidade e habilidade em caçar em grupos.");
array_push($baralho, $carta4);
$carta5 = new Carta(5, "Guardião dos Céus", "Mirage 2000", "Este caça é um ícone da época em que a FAB contava com aeronaves de origem francesa. Embora já tenha sido substituído, ainda é lembrado por sua impressionante capacidade de combate.");
array_push($baralho, $carta5);
$carta6 = new Carta(6, "Espectro Ágil", "F-5FM Tiger II", "Possui um assento adicional para um co-piloto. É conhecida por sua agilidade e foi um dos principais caças da FAB antes da chegada dos modelos mais recentes.");
array_push($baralho, $carta6);
$carta7 = new Carta(7, "Pantera Negra", "F-39F Gripen", "Versão de treinamento do moderno caça sueco, com dois assentos. Seu nome é uma referência a um felino icônico e simboliza a sofisticação e a força do modelo.");
array_push($baralho, $carta7);
$carta8 = new Carta(8, "Defensor do Pantanal", "EMB-314 Super Tucano", "Este avião é conhecido por suas capacidades de ataque leve e treinamento. Seu nome faz referência a uma região brasileira rica em biodiversidade, onde ele frequentemente opera.");
array_push($baralho, $carta8);
$carta9 = new Carta(9, "Guardião do Atlântico", "P-3AM Orion", "Este não é um caça, mas um patrulheiro naval essencial para a proteção das águas brasileiras. Seu nome reflete sua função de vigilância e proteção sobre o vasto oceano Atlântico.");
array_push($baralho, $carta9);
$carta10 = new Carta(10, "Fúria do Sul", "A-1B AMX", "Este caça é conhecido por sua força e versatilidade em combate. Seu nome faz referência à sua origem e poder de ataque, especialmente em missões no hemisfério sul.");
array_push($baralho, $carta10);

//aqui é sorteada a carta, atraves do indice do array "baralho"
$chaveAleatoria = rand(1, count($baralho));
$sorteada = $baralho[$chaveAleatoria - 1];

//agora comeca o programa principal de verdade
$opcao = 0;
$ganhou = false;
$tentativas = 0;
$chute = 0;
do 
{
    print "\n-----------MENU-----------\n";
    print "1- Ver todas as cartas!!!\n";
    print "2- Adivinhar :)\n";
    print "3- Ver pontuação atual!\n";
    print "4- Dica ;)\n";
    print "5- Desistir :(\n";
    print "0- SAIR";
    print "\n--------------------------\n";
    $opcao = readline("Selecione a opção: ");
    switch($opcao) 
    {
    case 0:
        print "\nPrograma encerrado!\n";
        system("clear");
    break;

    case 1:
        $inx = 1;
        foreach($baralho as $b)
        {
            print "\n" . $inx . " - \n" . $b;
            $inx++;
        }
    break;

    case 2:
        $chute = readline("\nInforme o índice da carta: ");
        if ($ganhou == true) 
        {
            print "\nVocê já ganhou!\n";
        }
        else 
        {
            if ($chute == $chaveAleatoria) 
            {
                print "Parabéns, você acertou!\n";
                $ganhou = true;
            }
            else if ($chute != $chaveAleatoria && $chute > 0 && $chute <= count($baralho))
            {
                print "Uma pena, você errou!\n";
                $tentativas++;
            }
            else
            {
                print "Essa carta não existe...\n";
            }
        }
    break;

    case 3:
        if ($tentativas == 0) 
        {
            print "Você atingiu a pontuação 100! Será um gênio da probabilidade? Parabéns!\n";
        }
        elseif ($tentativas  > 0 && $tentativas <= 9) 
        {
            print "Sua pontuação é de: " . 100 - ($tentativas * 10);
        }
        else if ($tentativas == 10)
        {
            print "Você é absurdamente azarado no jogo, sua pontuação é 0! Sua vida amorosa está com sorte! haha\n";
        }
    break;

    case 4:
        print "\nPrecisa de dica, é? Lá vai então: \n" . $sorteada->getDica() . "\n";
    break;

    case 5:
        if ($ganhou == true) 
        {
            print "\nVocê já ganhou!\n";
        }
        else 
        {
            print "\nQue decepção... A carta certa era a: \n" . $sorteada;
            die;
        }
    break;

    default:
        print "Opção inválida\n";
        system("clear");
    }
}while($opcao != 0);
