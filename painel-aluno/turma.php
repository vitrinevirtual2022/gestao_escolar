<?php

@session_start();
require_once("../conexao.php");


$cpf_usuario = @$_SESSION['cpf_usuario'];

$query = $pdo->query("SELECT * FROM alunos where cpf = '$cpf_usuario'  order by id asc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_aluno = $res[0]['id'];

$id_mat = $_GET['id'];
$id_per = @$_GET['id_periodo'];

$query = $pdo->query("SELECT * FROM matriculas where id = '$id_mat' order by id desc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_turma = $res[0]['turma'];

$query_2 = $pdo->query("SELECT * FROM turmas where id = '$id_turma' ");
$res_2 = $query_2->fetchAll(PDO::FETCH_ASSOC);
$disciplina = $res_2[0]['disciplina'];
$horario = $res_2[0]['horario'];
$dia = $res_2[0]['dia'];
$ano = $res_2[0]['ano'];
$data_final = $res_2[0]['data_final'];
$data_inicio = $res_2[0]['data_inicio'];
$professor = $res_2[0]['professor'];


//RECUPERAR O TOTAL DE MESES ENTRE DATAS
$d1 = new DateTime($data_inicio);
$d2 = new DateTime($data_final);
$intervalo = $d1->diff($d2);
$anos = $intervalo->y;
$meses = $intervalo->m + ($anos * 12);

$data_finalF = implode('/', array_reverse(explode('-', $data_final)));

$query_resp = $pdo->query("SELECT * FROM disciplinas where id = '$disciplina' ");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$nome_disc = $res_resp[0]['nome'];


$query_resp = $pdo->query("SELECT * FROM professores where id = '$professor' ");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$nome_prof = $res_resp[0]['nome'];
$email_prof = $res_resp[0]['email'];
$imagem_prof = $res_resp[0]['foto'];


if ($data_final < date('Y-m-d')) {
    $concluido = 'Sim';
} else {
    $concluido = 'Não';
}


$query_resp = $pdo->query("SELECT * FROM matriculas where turma = '$id_turma' ");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$total_alunos = @count($res_resp);

$id_get_periodo = @$_GET['id_periodo'];

$query_resp = $pdo->query("SELECT * FROM aulas where turma = '$id_turma' and periodo = '$id_get_periodo'");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$total_aulas = @count($res_resp);


$query_resp = $pdo->query("SELECT * FROM mensagens where turma = '$id_turma'");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$conteudo = $res_resp[0]['conteudo'];
$data_msg = $res_resp[0]['data'];


$query_resp = $pdo->query("SELECT * FROM periodos where id = '$id_get_periodo' ");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$nome_periodo = $res_resp[0]['nome'];
$maximo_nota = $res_resp[0]['total_pontos'];


//RECUPERAR A % DE FREQUENCIA DO ALUNO
$contador = 0;
$query = $pdo->query("SELECT * FROM periodos where turma = '$id_turma' order by id asc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalPorcentagemSoma = 0;
$totalPorcentagemSomaF = 0;
for ($i = 0; $i < count($res); $i++) {
    foreach ($res[$i] as $key => $value) {
    }

    $nome = $res[$i]['nome'];
    $id_periodo = $res[$i]['id'];


    $query_p = $pdo->query("SELECT * FROM aulas where periodo = '$id_periodo' ");
    $res_p = $query_p->fetchAll(PDO::FETCH_ASSOC);
    if (@count($res_p) > 0) {
        $contador = $contador + 1;


        //CALCULAR FREQUÊNCIA
        $query2 = $pdo->query("SELECT * FROM chamadas where turma = '$id_turma' and aluno = '$id_aluno' and periodo = '$id_periodo'");
        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
        $total_presencas2 = 0;
        $total_chamadas2 = 0;
        $porcentagem2 = 0;
        $totalPorcentagem = 0;

        $totalPorcentagemF = 0;
        for ($i2 = 0; $i2 < count($res2); $i2++) {
            foreach ($res2[$i2] as $key => $value) {
            }
            $total_chamadas2 = count($res2);
            $presenca = @$res2[$i2]['presenca'];

            if ($presenca == 'P') {
                $total_presencas2 = $total_presencas2 + 1;
            }

            $porcentagem2 = ($total_presencas2 * 100) / $total_chamadas2;

        }


        $totalPorcentagem = $totalPorcentagem + $porcentagem2;
        $totalPorcentagemSoma = $totalPorcentagem + $totalPorcentagemSoma;

    }
}

$totalPorcentagemSoma = $totalPorcentagemSoma / $contador . ' ';
$totalPorcentagemSomaF = number_format($totalPorcentagemSoma, 2, ',', '.');

if ($totalPorcentagemSoma < $media_porcentagem_presenca) {
    $cor_presenca2 = 'text-danger';
} else {
    $cor_presenca2 = 'text-success';
}


//RECUPERAR AS NOTAS POR PERIODO
$query = $pdo->query("SELECT * FROM periodos where turma = '$id_turma' order by id asc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_notas_curso = 0;
for ($i = 0; $i < count($res); $i++) {
    foreach ($res[$i] as $key => $value) {
    }

    $nome = $res[$i]['nome'];
    $id_periodo = $res[$i]['id'];
    $minimo_media = $res[$i]['minimo_media'];


    $query_n = $pdo->query("SELECT * FROM notas where periodo = '$id_periodo' and aluno = '$id_aluno'");
    $res_n = $query_n->fetchAll(PDO::FETCH_ASSOC);
    $total_notas_periodo = 0;

    for ($in = 0; $in < count($res_n); $in++) {
        foreach ($res_n[$in] as $key => $value) {
        }

        $total_notas_periodo = $total_notas_periodo + $res_n[$in]['nota'];


    }

    $total_notas_curso = $total_notas_curso + $total_notas_periodo;

}


?>

<h6>

    <?php echo strtoupper($nome_disc) ?>

    <?php if ($total_notas_curso >= $media_pontos_minimo_aprovacao) { ?>
        <a title="Retirar Certificado"
           href="../rel/certificado.php?id_turma=<?php echo $id_turma ?>&id_aluno=<?php echo $id_aluno ?>"
           target="_blank">
            <img src="../img/ico-certificado.png" width="30px">
        </a>
    <?php } ?>

</h6>
<hr>

<small>
    <div class="mb-3">

        <span class="mr-3"><i><b>Disciplina Concluída </b> <?php echo $concluido ?></i></span>
        <span class="mr-3"><i><b>Dias de Aula </b> <?php echo $dia ?></i></span>
        <span class="mr-3"><i><b>Horário Aula </b> <?php echo $horario ?></i></span>
        <span class="mr-3"><i><b>Ano Início </b> <?php echo $ano ?></i></span>
        <span class="mr-3"><i><b>Data da Conclusão </b> <?php echo $data_finalF ?></i></span>
    </div>
</small>

<hr>

<small>
    <div class="mb-3">
        <span class="mr-3">
            <img src="../img/professores/<?php echo $imagem_prof ?>" width="40px"/>
        </span>
        <span class="mr-3"><i><b>Professor:</b> <?php echo $nome_prof ?>
        </span>
        <span class="mr-3"><i><b>Email Professor </b> <?php echo $email_prof ?>
        </span>
        <a href="index.php?pag=turma&funcao=chat&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>&aluno=<?php echo $id_aluno ?>&professor=<?php echo $professor; ?>"
           title="Enviar mensagens"
           class='text-primary mr-1' title='Enviar mensagem'>
            <i class='far fa-comments'></i>
        </a>
    </div>
</small>
<hr>


<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <a class="text-dark"
           href="index.php?pag=turma&funcao=msg&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>"
           title="Fazer Chamada">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mensagens do Professor
                            </div>
                            <div class="text-xs text-secondary"> Clique para visualizá-las</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    </a>
</div>


<div class="col-xl-3 col-md-6 mb-4">
    <a class="text-dark"
       href="index.php?pag=turma&funcao=periodos&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>&frequencia=sim"
       title="Informações da Turma">
        <div class="card text-dark shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold  text-dark text-uppercase">FREQUÊNCIA</div>
                        <div class="text-xs text-secondary"><span
                                    class="<?php echo $cor_presenca2 ?>"><?php echo $totalPorcentagemSomaF ?>% </span>
                            De Frequência
                        </div>
                    </div>
                    <div class="col-auto" align="center">
                        <i class="fas fa-calendar-day fa-2x  text-dark"></i><br>
                        <span class="text-xs"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


<div class="col-xl-3 col-md-6 mb-4">
    <a class="text-dark"
       href="index.php?pag=turma&funcao=periodos&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>&boletim=sim"
       title="Informações da Turma">
        <div class="card text-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold  text-primary text-uppercase">BOLETIM</div>
                        <div class="text-xs text-secondary"> Relatório de Notas</div>
                    </div>
                    <div class="col-auto" align="center">
                        <i class="fas fa-file-invoice fa-2x  text-primary"></i><br>
                        <span class="text-xs"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


<div class="col-xl-3 col-md-6 mb-4">
    <a class="text-dark"
       href="index.php?pag=turma&funcao=periodos&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>&aulas=sim"
       title="Aulas do Curso">
        <div class="card text-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold  text-info text-uppercase">AULAS</div>
                        <div class="text-xs text-secondary"> Conteúdos e Material de Estudos</div>
                    </div>
                    <div class="col-auto" align="center">
                        <i class="fas fa-video fa-2x  text-info"></i><br>
                        <span class="text-xs"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


</div>


<div class="modal" id="modal-periodos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $nome_disc ?>
                    <?php if (@$_GET['boletim'] != "") { ?>
                        - <small><small>Mínimo para Aprovação <?php echo $media_pontos_minimo_aprovacao ?>
                                Pontos</small></small>
                    <?php } ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $query = $pdo->query("SELECT * FROM periodos where turma = '$id_turma' order by id asc ");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                $total_notas_curso = 0;
                for ($i = 0; $i < count($res); $i++) {
                    foreach ($res[$i] as $key => $value) {
                    }

                    $nome = $res[$i]['nome'];
                    $id_periodo = $res[$i]['id'];
                    $minimo_media = $res[$i]['minimo_media'];


                    //RECUPERAR AS NOTAS POR PERIODO
                    $query_n = $pdo->query("SELECT * FROM notas where periodo = '$id_periodo' and aluno = '$id_aluno'");
                    $res_n = $query_n->fetchAll(PDO::FETCH_ASSOC);
                    $total_notas_periodo = 0;

                    for ($in = 0; $in < count($res_n); $in++) {
                        foreach ($res_n[$in] as $key => $value) {
                        }

                        $total_notas_periodo = $total_notas_periodo + $res_n[$in]['nota'];


                        if ($total_notas_periodo < $minimo_media) {
                            $cor_nota = 'text-danger';
                        } else {
                            $cor_nota = 'text-primary';
                        }


                    }

                    $total_notas_curso = $total_notas_curso + $total_notas_periodo;

                    if ($total_notas_curso < $media_pontos_minimo_aprovacao) {
                        $classe_media_nota = 'text-danger';
                    } else {
                        $classe_media_nota = 'text-primary';
                    }


                    $query_p = $pdo->query("SELECT * FROM aulas where periodo = '$id_periodo' ");
                    $res_p = $query_p->fetchAll(PDO::FETCH_ASSOC);

                    if (@count($res_p) > 0) {


                        //CALCULAR FREQUÊNCIA
                        $query2 = $pdo->query("SELECT * FROM chamadas where turma = '$id_turma' and aluno = '$id_aluno' and periodo = '$id_periodo'");
                        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                        $total_presencas = 0;
                        $total_chamadas = 0;
                        $porcentagem = 0;
                        $porcentagemF = 0;
                        for ($i2 = 0; $i2 < count($res2); $i2++) {
                            foreach ($res2[$i2] as $key => $value) {
                            }
                            $total_chamadas = count($res2);
                            $presenca = @$res2[$i2]['presenca'];

                            if ($presenca == 'P') {
                                $total_presencas = $total_presencas + 1;
                            }

                            $porcentagem = ($total_presencas * 100) / $total_chamadas;
                            $porcentagemF = number_format($porcentagem, 2, ',', '.');

                            if ($porcentagem < $media_porcentagem_presenca) {
                                $cor_presenca = 'text-danger';
                            } else {
                                $cor_presenca = 'text-success';
                            }

                        }


                        ?>

                        <?php if (@$_GET['frequencia'] != "") { ?>
                            <a title="Clique para Ver as Frequências"
                               href="index.php?pag=turma&funcao=frequencias&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>&id_periodo=<?php echo $id_periodo ?>"
                               name="btn-salvar-aula" class="text-dark"><?php echo $nome ?> - <span
                                        class="<?php echo $cor_presenca ?>"><?php echo $porcentagemF ?></span> % de
                                Frequência. </a>
                            <hr>
                        <?php } ?>


                        <?php if (@$_GET['boletim'] != "") { ?>
                            <a title="Gerar Boletim do Período"
                               href="../rel/boletim_periodo.php?id_turma=<?php echo $id_turma ?>&id_periodo=<?php echo $id_periodo ?>"
                               target="_blank" class="text-dark"><?php echo $nome ?> - <span
                                        class="<?php echo $cor_nota ?>"><?php echo $total_notas_periodo ?></span>
                                pontos. </a>
                            <hr>
                        <?php } ?>


                        <?php if (@$_GET['aulas'] != "") { ?>
                            <a title="Ver Grade do Curso"
                               href="index.php?pag=turma&funcao=aulas&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>&id_periodo=<?php echo $id_periodo ?>"
                               class="text-dark"><?php echo $nome ?> - <?php echo @count($res_p) ?> Aulas </a>
                            <hr>
                        <?php } ?>


                    <?php }
                } ?>

                <?php if (@$_GET['boletim'] != "") { ?>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="../rel/boletim_geral.php?id_turma=<?php echo $id_turma ?>" target="_blank"
                               title="Gerar Boletim">
                                <i class='fas fa-clipboard text-primary mr-1'></i>Boletim Geral </a>
                        </div>

                        <div class="col-md-6" align="right">
                            <span class="<?php echo $classe_media_nota ?>"><?php echo $total_notas_curso ?> Pontos no Total</span>
                        </div>
                    </div>
                <?php } ?>

            </div>


        </div>
    </div>
</div>


<div class="modal" id="modal-aulas" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $nome_disc ?> - <?php echo $nome_periodo ?>
                    - <?php echo $total_aulas ?> Aulas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <span class=""><b>Registro das Aulas e Frequência</b></span>
                <small>
                    <div id="listar-aulas" class="mt-2">

                    </div>
                </small>


            </div>


        </div>

    </div>
</div>

</div>


<div class="modal" id="modal-aulas-grade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $nome_disc ?> - <?php echo $nome_periodo ?>
                    - <?php echo $total_aulas ?> Aulas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <span class=""><b>Registro das Aulas</b></span> <br><br>

                <?php

                $query = $pdo->query("SELECT * FROM aulas where turma = '$_GET[id_turma]' and periodo = '$_GET[id_periodo]' order by id asc ");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                for ($i = 0; $i < count($res); $i++) {
                    foreach ($res[$i] as $key => $value) {
                    }

                    $nome = $res[$i]['nome'];
                    $descricao = $res[$i]['descricao'];
                    $arquivo = $res[$i]['arquivo'];
                    $id_aula = $res[$i]['id'];

                    echo 'Aula ' . ($i + 1) . ' - ' . $nome;

                    if ($arquivo != "") {
                        echo '<span class="ml-1" ><a href="../img/arquivos-aula/' . $arquivo . '" target="_blank" class="text-primary"> Ver Arquivo </a> <br></span>';
                    } else {
                        echo '<br>';
                    }

                }

                ?>


            </div>


        </div>

    </div>
</div>

<div class="modal" id="modalchat" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nome_professor"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <span class=""><b>Chat </b></span>
                        <small>
                            <div id="listar-mensagem-chat" class="mt-2">
                            </div>
                        </small>
                    </div>
                    <div class="col-md-5">
                        <span class="mb-2">
                            <b>Escreva sua Mensagem</b>
                        </span>
                        <form id="form-chat" method="POST" class="mt-2">
                            <div class="form-group">
                                <textarea
                                        class="form-control"
                                        id="conteudo-chat"
                                        name="conteudo"
                                ></textarea>
                            </div>
                            <div align="right">
                                <button type="button" name="btn-salvar-chat" id="btn-salvar-chat"
                                        class="btn btn-primary">
                                    Salvar
                                </button>
                            </div>
                            <!--                            <input type="hidden" name="data" value="-->
                            <?php //echo $data_msg ?><!--">-->
                            <!--                            <input type="hidden" name="turma" value="-->
                            <?php //echo $_GET['id'] ?><!--">-->
                        </form>
                    </div>
                </div>
                <div align="center" id="mensagem-chat" class="">
                </div>
            </div>
        </div>
    </div>
</div>


<!--MODAL PARA MENSAGENS-->
<div class="modal" id="modal-mensagem" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mensagens deixadas pelo Professor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <span class=""><b>Registro das Mensagens</b></span> <br><br>
                <small>
                    <div id="listar-mensagem" class="mt-2">


                        <?php

                        $query = $pdo->query("SELECT * FROM mensagens where turma = '$id_turma' order by id desc ");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }

                            $conteudo = $res[$i]['conteudo'];

                            $id_msg = $res[$i]['id'];

                            echo $conteudo;

                            echo '<br>';
                        }


                        ?>

                    </div>

            </div>
        </div>
    </div>


    <?php

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "periodos") {
        echo "<script>$('#modal-periodos').modal('show');</script>";
    }

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "frequencias") {
        echo "<script>$('#modal-aulas').modal('show');</script>";
    }

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "aulas") {
        echo "<script>$('#modal-aulas-grade').modal('show');</script>";
    }

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "msg") {
        echo "<script>$('#modal-mensagem').modal('show');</script>";
    }

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "chat") {
        echo "
            <script>
                $('#modalchat').modal('show');
//                $('#nome_professor').html('Deixe seu recado para o(a) professor(a) -  ' + '" . $nomeProfessor . "');
            </script>
        ";
    }

    ?>


    <!--AJAX PARA LISTAR OS DADOS -->
    <script type="text/javascript">
        $(document).ready(function () {
            listarDados();
            listarMsg();

        })
    </script>


    <script type="text/javascript">
        function listarDados() {
            var pag = "<?=$pag?>";
            var turma = "<?=$id_turma?>";
            var periodo = "<?=$id_per?>";

            $.ajax({
                url: pag + "/listar-aulas.php",
                method: "post",
                data: {turma, periodo},
                dataType: "html",
                success: function (result) {
                    $('#listar-aulas').html(result)

                },


            })
        }
    </script>


    <script type="text/javascript">
        function listarMsg() {
            var pag = "<?=$pag?>";
            var turma = "<?=$id_turma?>";

            $.ajax({
                url: pag + "/listar-mensagem.php",
                method: "post",
                data: {turma},
                dataType: "html",
                success: function (result) {
                    $('#listar-mensagem').html(result)

                },


            })
        }
    </script>

    <?php
    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "chat") {

        $aluno = $_GET['aluno'];
        $professor = $_GET['professor'];
        $sql = "select nome from professores p where p.id = '$professor'";
        $query = $pdo->query($sql);
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        $nomeProfessor = $res[0]['nome'];

        echo "
            <script>
                $('#nome_professor').html('Deixe seu recado para o(a) professor(a) -  ' + '" . $nomeProfessor . "');
            </script>
        ";


        ?>
        <script type="text/javascript">
            function listarMsg(professsor) {
                $.ajax({
                    url: "professor_msg/listar-mensagem.php",
                    method: "post",
                    data: {professor},
                    dataType: "html",
                    success: function (result) {
                        $('#listar-mensagem-chat').html(result)
                    },
                })
            }

            var professor = "<?php echo $_GET['professor']; ?>";
            listarMsg(professor);
        </script>
        <script type="text/javascript">

            $("#btn-salvar-chat").click(function () {

                var professor = "<?php echo $_GET['professor']; ?>";
                var aluno = "<?php echo $aluno; ?>";
                var id_send = aluno;
                var conteudo = $("#conteudo-chat").val();

                var fd = new FormData();

                fd.append('aluno', aluno)
                fd.append('professor', professor)
                fd.append('id_send', id_send)
                fd.append('conteudo', conteudo)

                event.preventDefault();

                $.ajax({
                    url: "professor_msg/inserir-mensagem.php",
                    type: 'POST',
                    data: fd,
                    success: function (mensagem) {
                        $('#mensagem-chat').removeClass()
                        if (mensagem.trim() == "Salvo com Sucesso!") {
                            $('#conteudo').val('');
                            var professor = "<?php echo $_GET['professor']; ?>";
                            listarMsg(professor);
                        } else {
                            $('#mensagem-chat').addClass('text-danger')
                        }
                        $('#mensagem-chat').text(mensagem)
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                    xhr: function () {  // Custom XMLHttpRequest
                        var myXhr = $.ajaxSettings.xhr();
                        if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                            myXhr.upload.addEventListener('progress', function () {
                                /* faz alguma coisa durante o progresso do upload */
                            }, false);
                        }
                        return myXhr;
                    }
                });
            });
        </script>
        <?php
    }
    ?>
