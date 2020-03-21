<?php
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercícios PHP - IFRN (Instituto Federal de Educação, Ciência e Tecnologia - RIO GRANDE DO NORTE)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="panel-group" id="accordion">
            <h1>Exercícios PHP - IFRN (Instituto Federal de Educação, Ciência e Tecnologia - RIO GRANDE DO NORTE)</h1>
            <hr>
            <!-- START EXERCÍCIO 01 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1) Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando
                            somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.</a>
                    </h2>
                </div>
                <!--
			<div id="collapse1" class="panel-collapse collapse in">
			-->
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $numAleatorioum1 = 1;
                        $numAleatorioum2 = 5;
                        $limite = 20;
                        $maior20 = 8;
                        $menorIgual20 = 5;
                        if ($numAleatorioum1 + $numAleatorioum2 > $limite) {
                            echo "{$numAleatorioum1} + {$numAleatorioum2} = " . ($numAleatorioum1 + $numAleatorioum2) . ". Logo, deve-se somar " . ($numAleatorioum1 + $numAleatorioum2) . " + {$maior20}, que dá " . ($numAleatorioum1 + $numAleatorioum2 + $maior20) . ".";
                        } else if ($numAleatorioum1 + $numAleatorioum2 <= $limite) {
                            echo "{$numAleatorioum1} + {$numAleatorioum2} = " . ($numAleatorioum1 + $numAleatorioum2) . ". Logo, deve-se subtrair " . ($numAleatorioum1 + $numAleatorioum2) . " - {$menorIgual20}, que dá " . ($numAleatorioum1 + $numAleatorioum2 - $menorIgual20) . ".";
                        } else {
                            echo "Erro.";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCÍCIO 01 -->
            <!-- START EXERCICIO 02 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">2) Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes</a>
                    </h2>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $numDividir = 92;
                        function divisivelPor($numDividir, $numDivisivel)
                        {
                            $trueDivisao = $numDividir % $numDivisivel == 0 ? "É divisível" : "Não é divisível.";
                            return $trueDivisao;
                        }
                        ?>
                        <p><?= "O número {$numDividir}"; ?> é divisível por 10?<br>
                            R: <?= ($numDividir % 10 == 0) ? "Sim." : "Não."; ?>
                        </p>
                        <p><?= "O número {$numDividir}"; ?> é divisível por 5?<br>
                            R: <?= ($numDividir % 5 == 0) ? "Sim." : "Não."; ?>
                        </p>
                        <p><?= "O número {$numDividir}"; ?> é divisível por 2?<br>
                            R: <?= ($numDividir % 2 == 0) ? "Sim." : "Não."; ?>
                        </p>
                        <p><?= "O número {$numDividir}"; ?> é divisível por 10, 5 e 2?<br>
                            R: <?= ($numDividir % 10 == 0 && $numDividir % 5 == 0 && $numDividir % 2 == 0) ? "Sim." : "Não."; ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 02 -->
            <!-- START EXERCICIO 03 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">3) Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a
                            a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.</a>
                    </h2>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $nomePessoa = "Danielle";
                        $sexoPessoa = "feminino";
                        $idadePessoa = 24;
                        $idadeLimite = 25;
                        //	Operador Ternário -> condição ? codigoUm : codigoDois;
                        $respEx3 = $sexoPessoa == "feminino" && $idadePessoa < $idadeLimite ? "Parabéns, {$nomePessoa}! Você está ACEITA!" : "Lamento, {$nomePessoa}! Você NÃO foi aceita.";
                        echo $respEx3;
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 03 -->
            <!-- START EXERCICIO 04 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">4) Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)</a>
                    </h2>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $numAleatorio = [100, 56, 840];
                        sort($numAleatorio);
                        print_r($numAleatorio);
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 04 -->
            <!-- START EXERCICIO 05 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">5) Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados</a>
                    </h2>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $triangulo1 = 1;
                        $triangulo2 = 2;
                        $triangulo3 = 5;
                        echo "Tamanho primeiro triângulo: {$triangulo1};<br>Tamanho do segundo triângulo: {$triangulo2};<br>Tamanho do terceiro triângulo: {$triangulo3}.<br>";
                        if ($triangulo1 != "" && $triangulo2 != "" && $triangulo3 != "") {
                            if ($triangulo1 == $triangulo2 && $triangulo2 == $triangulo3) {
                                echo "Com base nos tamanhos informados, o triângulo é do tipo equilatero.";
                            } else if ($triangulo1 != $triangulo3 && $triangulo1 != $triangulo2 && $triangulo2 != $triangulo3) {
                                echo "Com base nos tamanhos informados, o triângulo é do tipo escaleno.";
                            } else {
                                echo "Com base nos tamanhos informados, o triângulo é do tipo isosceles.";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 05 -->
            <!-- START EXERCICIO 06 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">6) Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe
                            mês com este número</a>
                    </h2>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $meses = [
                            "Janeiro", "Fevereiro",
                            "Março", "Abril",
                            "Maio", "Junho",
                            "Julho", "Agosto",
                            "Setembro", "Outubro",
                            "Novembro", "Dezembro"
                        ];
                        $numAleatorioumMes = rand(1, 13);
                        ?>
                        <li>Meses disponiveis:
                            <?php
                            for ($i = 0; $i < count($meses); $i++) {
                                $mesesDisponiveis = "{$meses[$i]}, ";
                                $mesesDisponiveisCorretos = str_replace("Dezembro,", "Dezembro.", $mesesDisponiveis);
                                echo $mesesDisponiveisCorretos;
                            }
                            ?>
                        </li>
                        <li>
                            <?= $respEx4 = $numAleatorioumMes >= 1 && $numAleatorioumMes <= 12 ? "Mês escolhido: {$meses[($numAleatorioumMes - 1)]}." : "O número {$numAleatorioumMes} não corresponde aos meses de 1 à 12." ?>
                        </li>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 06 -->
            <!-- START EXERCICIO 07 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">7) A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor
                            ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro
                            o aluno somente 3 dias</a>
                    </h2>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $biblioteca = [
                            "nomeLivro" => ["O Pequeno Marquinhos", "Danielle Moratte: Do Prefácio para o Mundo!"],
                            "tipoUsuario" => ["Professor", "Aluno"],
                            "diaEntrega" => [
                                "tipoUsuario" => [
                                    0 => [3],
                                    1 => [10],
                                ]
                            ]
                        ];
                        //var_dump($biblioteca);
                        //var_dump($biblioteca["nomeLivro"])
                        //var_dump($biblioteca["tipoUsuario"])
                        //var_dump($biblioteca["diaEntrega"]["tipoUsuario"]["Aluno"]);
                        $tipoUsuario = $biblioteca["tipoUsuario"][0];
                        $numAleatorioomeLivro = $biblioteca["nomeLivro"][0];
                        $diaEntregaUsuario = $biblioteca["diaEntrega"]["tipoUsuario"][0][0];
                        $diaRetiradaLivro = date_create(date("d-m-Y"));
                        date_add($diaRetiradaLivro, date_interval_create_from_date_string("{$diaEntregaUsuario} days"));
                        $diaDevolucaoLivro = date_format($diaRetiradaLivro, "d-m-Y");
                        echo "Um " . strtolower($tipoUsuario) . " retirou o livro '{$numAleatorioomeLivro}' em " . date("d-m-Y") . ". Por ele ser um " . strtolower($tipoUsuario) . ", ele deverá devolver o livro no dia {$diaDevolucaoLivro}.";
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 07 -->
            <!-- START EXERCICIO 08 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">8) Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto</a>
                    </h2>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $produtos = [
                            1 => "1- Livro",
                            2 => "2- Banana",
                            3 => "3- Maça",
                            4 => "4- Quiabo",
                            5 => "5- Melancia"
                        ];
                        $numAleatorioumeroLeitura = rand(1, 5);
                        //var_dump($produtos);
                        echo "Quantidade de números e produtos disponíveis: " . count($produtos) . ".<br>Dos " . count($produtos) . " números e produtos, verificaremos até o {$numAleatorioumeroLeitura}º número e produto:<br>";
                        for ($i = 1; $i <= $numAleatorioumeroLeitura; $i++) {
                            echo "{$produtos[$i]}<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 08 -->
            <!-- START EXERCICIO 09 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">9) Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir</a>
                    </h2>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $sonhoRepeat = "SOL" . PHP_EOL;
                        $vezesRepeat = rand(1, 10);
                        ?>
                        <?= "Número de vezes a serem repetidas: {$vezesRepeat}."; ?>
                        <br>
                        <?= str_repeat($sonhoRepeat, $vezesRepeat); ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 09 -->
            <!-- START EXERCICIO 10 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">10) Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos</a>
                    </h2>
                </div>
                <div id="collapse10" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $resultado = [
                            0 => 0,
                            1 => 0
                        ];
                        for ($i = 0; $i < 20; $i++) {
                            $numAleatorio = random_int(-100, 100);
                            $resultado[$numAleatorio < 0] += $numAleatorio < 0 ? 1 : $numAleatorio;
                            echo  $numAleatorio . PHP_EOL;
                        }
                        echo '<br>Somas dos positivos: ' . $resultado[0] . PHP_EOL;
                        echo '<br>Quantidade de negativos: ' . $resultado[1] . PHP_EOL;
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 10 -->
            <!-- START EXERCICIO 11 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">11) Criar um algoritmos que imprima a tabuada de um número</a>
                    </h2>
                </div>
                <div id="collapse11" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $tabuadaDe = rand(1, 10);
                        for ($i = $tabuadaDe; $i <= $tabuadaDe; $i++) {
                            for ($j = 1; $j <= 10; $j++) {
                                echo "{$i} * {$j} = " . ($i * $j) . "<br>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 11 -->
            <!-- START EXERCICIO 12 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">12) Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo:</a>
                    </h2>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
                    <div class="panel-body">
                        <li>Palavra: sonho</li>
                        <li>SONHO</li>
                        <li>SONHO SONHO</li>
                        <li>SONHO SONHO SONHO</li>
                        <li>SONHO SONHO SONHO SONHO</li>
                        <br>
                        <p>Resultado:</p>
                        <li><?= str_repeat(strtoupper("sonho "), 1); ?></li>
                        <li><?= str_repeat(strtoupper("sonho "), 2); ?></li>
                        <li><?= str_repeat(strtoupper("sonho "), 3); ?></li>
                        <li><?= str_repeat(strtoupper("sonho "), 4); ?></li>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 12 -->
            <!-- START EXERCICIO 13 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">13) Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução</a>
                    </h2>
                </div>
                <div id="collapse13" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $resultado = [
                            0 => 0,
                            1 => 0
                        ];
                        for ($i = 0; $i < rand(0, 300); $i++) {
                            $numAleatorio = rand(0, 300);
                            $resultado[$numAleatorio >= 100 && $numAleatorio <= 200] += $numAleatorio >= 100 && $numAleatorio <= 200;
                            if ($numAleatorio === 0) {
                                echo "Número 0 alcançado. Busca encerrada!";
                                return;
                            } else if ($numAleatorio != 0 && $numAleatorio >= 100 && $numAleatorio <= 200) {
                                echo  $numAleatorio . PHP_EOL;
                            }
                        }
                        echo "<br>Quantidade de números entre 100 e 200: " . $resultado[1] . PHP_EOL . " números encontrados.";
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 13 -->
            <!-- START EXERCICIO 14 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">14) Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos
                            que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico</a>
                    </h2>
                </div>
                <div id="collapse14" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                        $anos = 0;
                        $nome1 = "Chico";
                        $nome2 = "Juca";
                        $tamanho1 = 150 / 100;
                        $tamanho2 = 110 / 100;

                        $tamanhoUser1 = "{$tamanho1}";
                        $tamanhoUser2 = "{$tamanho2}";
                        while ($tamanho1 > $tamanho2) {
                            $cresAnoTamanho1 = (2 / 100);
                            $cresAnoTamanho2 = (3 / 100);
                            $tamanho1 = $tamanho1 + $cresAnoTamanho1;
                            $tamanho2 = $tamanho2 + $cresAnoTamanho2;
                            $anos = $anos + 1;
                        }
                        echo "Altura inicial de {$nome1}: {$tamanhoUser1} metros.<br>";
                        echo "Altura inicial de {$nome2}: {$tamanhoUser2} metros.<br>";
                        echo "Passando-se {$anos} anos, {$nome1} terá {$tamanho1} metros, enquanto {$nome2} terá {$tamanho2} metros (diferença de " . ($tamanho2 - $tamanho1) . " centímetros).";
                        ?>
                    </div>
                </div>
            </div>
            <!-- END EXERCICIO 14 -->
        </div>
    </div>
</body>

</html>