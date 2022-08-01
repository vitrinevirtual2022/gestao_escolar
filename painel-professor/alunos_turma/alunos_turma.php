<?php
$pag = "alunos_turma";
require_once("../conexao.php");
$id_turma = $_GET['id'];
@session_start();
//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'professor') {
    echo "<script language='javascript'> window.location='../index.php' </script>";
    exit();
}
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Nome Aluno</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "select
                                    *
                                from
                                    matriculas m
                                inner join alunos a on
                                    a.id = m.aluno
                                inner join turmas t on
                                    m.turma = t.id
                                where t.id = '$id_turma'";

                $query = $pdo->query($sql);
                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                foreach ($res as $aluno) {
                    ?>
                    <tr>
                        <td><?php echo $aluno['nome']; ?></td>
                        <td>
                            <a href="index.php?pag=alunos-turma&funcao=msg&id=<?php echo $id_turma ?>&aluno=<?php echo $aluno['aluno']; ?>"
                               title="Enviar mensagens"
                               class='text-primary mr-1' title='Enviar mensagem'>
                                <i class='far fa-comments'></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal" id="modal-mensagem" tabindex="-1" role="dialog">


    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nome_aluno"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <span class=""><b>Mensagens</b></span>
                        <small>
                            <div id="listar-mensagem" class="mt-2">
                            </div>
                        </small>
                    </div>
                    <div class="col-md-5">
                        <span class="mb-2">
                            <b>Escreva sua Mensagem</b>
                        </span>
                        <form id="form-msg" method="POST" class="mt-2">
                            <div class="form-group">
                                <textarea
                                        class="form-control"
                                        id="conteudo"
                                        name="conteudo"
                                ></textarea>
                            </div>
                            <div align="right">
                                <button type="submit" name="btn-salvar-msg" id="btn-salvar-msg"
                                        class="btn btn-primary">
                                    Salvar
                                </button>
                            </div>
                            <input type="hidden" name="data" value="<?php echo $data_msg ?>">
                            <input type="hidden" name="turma" value="<?php echo $_GET['id'] ?>">
                        </form>
                    </div>
                </div>
                <div align="center" id="mensagem" class="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (@$_GET["funcao"] != null && @$_GET["funcao"] == "msg") {


    $aluno = $_GET['aluno'];
    $sql = "select nome from alunos a where a.id = '$aluno'";
    $query = $pdo->query($sql);
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $nomeAluno = $res[0]['nome'];

    echo "
        <script>
            $('#nome_aluno').html('Deixe seu recado para o aluno(a) -  ' + '" . $nomeAluno . "');
            $('#modal-mensagem').modal('show');
        </script>";

    ?>
    <script type="text/javascript">
        function listarMsg(idAluno) {
            var aluno = idAluno;

            $.ajax({
                url: "<?=$pag ?>" + "/listar-mensagem.php",
                method: "post",
                data: {aluno},
                dataType: "html",
                success: function (result) {
                    $('#listar-mensagem').html(result)

                },
            })
        }

        var aluno = "<?php echo $_GET['aluno']; ?>";
        listarMsg(aluno);
    </script>
    <script type="text/javascript">
        $("#form-msg").submit(function () {

            var aluno = "<?php echo $_GET['aluno']; ?>";
            var professor = "<?php echo $_SESSION['id_usuario']; ?>";
            var id_send = professor;
            var conteudo = $("#conteudo").val();

            var fd = new FormData();

            fd.append('aluno', aluno)
            fd.append('professor', professor)
            fd.append('id_send', id_send)
            fd.append('conteudo', conteudo)

            var pag = "<?=$pag?>";
            event.preventDefault();

            $.ajax({
                url: pag + "/inserir-mensagem.php",
                type: 'POST',
                data: fd,

                success: function (mensagem) {

                    $('#mensagem').removeClass()

                    if (mensagem.trim() == "Salvo com Sucesso!") {

                        $('#conteudo').val('');

                        var aluno = "<?php echo $_GET['aluno']; ?>";
                        listarMsg(aluno);

                    } else {

                        $('#mensagem').addClass('text-danger')
                    }

                    $('#mensagem').text(mensagem)

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

<!--AJAX PARA INSERÇÃO DADOS DA MENSAGEM -->

