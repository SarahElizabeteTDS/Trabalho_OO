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
        print "Arrumar bonitinho depois";
    }
    //metodos (futuros)
    //
    //

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
$carta6 = new Carta(6, "Espectro Ágil", "F-5FM Tiger II (biposto)", "Possui um assento adicional para um co-piloto. É conhecida por sua agilidade e foi um dos principais caças da FAB antes da chegada dos modelos mais recentes.");
array_push($baralho, $carta6);
$carta7 = new Carta(7, "Pantera Negra", "F-39F Gripen (versão biposto)", "Versão de treinamento do moderno caça sueco, com dois assentos. Seu nome é uma referência a um felino icônico e simboliza a sofisticação e a força do modelo.");
array_push($baralho, $carta7);
$carta8 = new Carta(8, "Defensor do Pantanal", "EMB-314 Super Tucano", "Este avião é conhecido por suas capacidades de ataque leve e treinamento. Seu nome faz referência a uma região brasileira rica em biodiversidade, onde ele frequentemente opera.");
array_push($baralho, $carta8);
$carta9 = new Carta(9, "Guardião do Atlântico", "P-3AM Orion (patrulha naval, apoio a caças)", "Este não é um caça, mas um patrulheiro naval essencial para a proteção das águas brasileiras. Seu nome reflete sua função de vigilância e proteção sobre o vasto oceano Atlântico.");
array_push($baralho, $carta9);
$carta10 = new Carta(10, "Fúria do Sul", "A-1B AMX", "Este caça é conhecido por sua força e versatilidade em combate. Seu nome faz referência à sua origem e poder de ataque, especialmente em missões no hemisfério sul.");
array_push($baralho, $carta10);

$sorteada = array_rand($baralho); // ver se isso vai dar certo

//agora comeca o programa principal de verdade
$opcao = 0;
$encerrar = false;
do 
{
    print "\n-----------MENU-----------\n";
    print "1- Ver todas as cartas!!!\n";
    print "2- Adivinhar :)\n";
    print "3- Ver pontuação atual!\n";
    print "4- Dica ;)\n";
    print "5- Desistir :(\n";
    print "0- SAIR\n";
    $opcao = readline("Selecione a opção: ");
    switch($opcao) 
    {
    case 0:
        print "\nPrograma encerrado!\n";
        system("clear");
    break;

    case 1:
        //mostrar todas as cartas bonitinhas e separadas com o tostring e o foreach
    break;

    case 2:
        //deixar o usuario advinhar, fazer o esquema de pontuacao aqui
    break;

    case 3:
        //so mostrar a pontuacao bonitinha
    break;

    case 4:
        //so dar um getDica aqui
    break;

    case 5:
        print "Que decepção...\nA carta certa era a: ";
        //falta arrumar a variavel que sorteia a carta     
        $encerrar = true;
    break;

    default:
        print "Opção inválida\n";
        system("clear");
    }
}while($opcao != 0 || $encerrar == true);
