<?php
$pag = "planos";
require_once("../conexao.php");
$id_turma = $_GET['id'];
@session_start();
//verificar se o usuário está autenticado
if (@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'professor') {
    echo "<script language='javascript'> window.location='../index.php' </script>";
    exit();
}


?>

<div class="row mt-4 mb-4">
    <a type="button" class="btn-info btn-sm ml-3 d-none d-md-block"
       href="index.php?pag=<?php echo $pag ?>&funcao=novo&id=<?php echo $id_turma ?>">Novo Plano</a>
    <a type="button" class="btn-info btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>

</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Plano</th>
                    <th>Escola</th>
                    <th>Professor</th>
                    <th>Disciplina</th>
                    <th>Série/Ano</th>
                    <th>Arquivo</th>

                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>

                <?php

                $query = $pdo->query("SELECT * FROM plano_anual where turma = '$id_turma' order by id desc ");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                for ($i = 0; $i < count($res); $i++) {
                    foreach ($res[$i] as $key => $value) {
                    }

                    $nome_plano = $res[$i]['nome_plano'];
                    $escola = $res[$i]['escola'];
                    $plano_professor = $res[$i]['plano_professor'];
                    $plano_disciplina = $res[$i]['plano_disciplina'];
                    $plano_serie = $res[$i]['plano_serie'];
                    $arquivo = $res[$i]['arquivo'];


                    $id = $res[$i]['id'];


                    //RECUPERAR NOME PROFESSOR
                    $query_r = $pdo->query("SELECT * FROM escolas where id =  '$escola'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_colegio = $res_r[0]['nome_school'];

                    //RECUPERAR NOME PROFESSOR
                    $query_r = $pdo->query("SELECT * FROM professores where id =  '$plano_professor'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_prof = $res_r[0]['nome'];

                    //RECUPERAR NOME DISCIPLINA
                    $query_r = $pdo->query("SELECT * FROM disciplinas where id =  '$plano_disciplina'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_disc = $res_r[0]['nome'];

                    //RECUPERAR A SÉRIE/ ANO
                    $query_r = $pdo->query("SELECT * FROM serie where id =  '$plano_serie'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_serie = $res_r[0]['serie_ano'];


                    ?>


                    <tr>
                        <td><?php echo $nome_plano ?></td>
                        <td><?php echo $nome_colegio ?></td>
                        <td><?php echo $nome_prof ?></td>
                        <td><?php echo $nome_disc ?></td>
                        <td><?php echo $nome_serie ?></td>
                        <td><?php
                            if ($arquivo != "") {
                                echo '<span class="ml-1" ><a href="../img/arquivos-plano/' . $arquivo . '" target="_blank" class="text-primary">' . $arquivo . '</a> <br></span>';
                            } else {
                                echo '<br>';
                            }

                            ?></td>


                        <td>
                            <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id_plano=<?php echo $id ?>&id=<?php echo $id_turma ?>"
                               class='text-primary mr-1' title='Editar Plano'><i class='far fa-edit'></i></a>
                            <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id_plano=<?php echo $id ?>&id=<?php echo $id_turma ?>"
                               class='text-danger mr-1' title='Excluir Plano'><i class='far fa-trash-alt'></i></a>


                        </td>
                    </tr>
                <?php } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Plano";
                    $id2 = $_GET['id_plano'];

                    $query = $pdo->query("SELECT * FROM plano_anual where id = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $nome_plano2 = $res[0]['nome_plano'];
                    $escola2 = $res[0]['escola'];
                    $plano_professor2 = $res[0]['plano_professor'];
                    $plano_disciplina2 = $res[0]['plano_disciplina'];
                    $plano_serie2 = $res[0]['plano_serie'];
                    $arquivo2 = $res[0]['arquivo'];


                } else {
                    $titulo = "Inserir Registro";

                }


                ?>

                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome do Plano</label>
                        <input value="<?php echo @$nome_plano2 ?>" type="text" class="form-control" id="nome_plano"
                               name="nome_plano" placeholder="Informe o nome do Plano">
                    </div>
                    <div class="form-group">
                        <label>Escola</label>
                        <select class="form-control" id="escola" name="escola">

                            <?php

                            $query = $pdo->query("SELECT * FROM escolas order by nome_school asc ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < @count($res); $i++) {
                                foreach ($res[$i] as $key => $value) {
                                }
                                $nome_reg = $res[$i]['nome_school'];
                                $id_reg = $res[$i]['id'];
                                ?>
                                <option <?php if (@$$escola2 == $id_reg) { ?> selected <?php } ?>
                                        value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Professor</label>
                        <select class="form-control" id="plano_professor" name="plano_professor">

                            <?php

                            $query = $pdo->query("SELECT * FROM professores order by nome asc ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < @count($res); $i++) {
                                foreach ($res[$i] as $key => $value) {
                                }
                                $nome_reg = $res[$i]['nome'];
                                $id_reg = $res[$i]['id'];
                                ?>
                                <option <?php if (@$plano_professor2 == $id_reg) { ?> selected <?php } ?>
                                        value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                            <?php } ?>

                        </select>


                    </div>

                    <div class="form-group">
                        <label>Disciplina</label>
                        <select class="form-control" id="plano_disciplina" name="plano_disciplina">

                            <?php

                            $query = $pdo->query("SELECT * FROM disciplinas order by nome asc ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < @count($res); $i++) {
                                foreach ($res[$i] as $key => $value) {
                                }
                                $nome_reg = $res[$i]['nome'];
                                $id_reg = $res[$i]['id'];
                                ?>
                                <option <?php if (@$plano_disciplina2 == $id_reg) { ?> selected <?php } ?>
                                        value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Série/ Ano</label>
                        <select class="form-control" id="plano_serie" name="plano_serie">

                            <?php

                            $query = $pdo->query("SELECT * FROM serie order by serie_ano asc ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < @count($res); $i++) {
                                foreach ($res[$i] as $key => $value) {
                                }
                                $nome_reg = $res[$i]['serie_ano'];
                                $id_reg = $res[$i]['id'];
                                ?>
                                <option <?php if (@$plano_serie2 == $id_reg) { ?> selected <?php } ?>
                                        value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Carregar Arquivo</label>
                        <input type="file" value="<?php echo @$foto2 ?>" class="form-control-file" id="imagem"
                               name="imagem" onChange="carregarImg();">
                    </div>

                    <div id="divImgConta">
                        <?php if (@$foto2 != "") { ?>
                            <img src="../img/arquivos-plano/<?php echo $foto2 ?>" width="200" height="200" id="target">
                        <?php } else { ?>
                            <img src="../img/arquivos-plano/sem-foto.jpg" width="200" height="200" id="target">
                        <?php } ?>
                    </div>


                    <small>
                        <div id="mensagem">

                        </div>
                    </small>

                </div>


                <div class="modal-footer">


                    <input value="<?php echo @$_GET['id_plano'] ?>" type="hidden" name="txtid2" id="txtid2">
                    <input value="<?php echo @$nome_plano2 ?>" type="hidden" name="antigo" id="antigo">
                    <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="turma" id="turma">


                    <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar
                    </button>
                    <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p>Deseja realmente Excluir este Registro?</p>

                <div align="center" id="mensagem_excluir" class="">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">
                    Cancelar
                </button>
                <form method="post">

                    <input type="hidden" id="id" name="id" value="<?php echo @$_GET['id_plano'] ?>" required>

                    <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
    echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
    echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
    echo "<script>$('#modal-deletar').modal('show');</script>";
}


?>


<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
    $("#form").submit(function () {
        var pag = "<?=$pag?>";
        var idturma = "<?=$id_turma?>";
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: pag + "/inserir.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {

                $('#mensagem').removeClass()

                if (mensagem.trim() == "Salvo com Sucesso!") {

                    //$('#nome').val('');
                    //$('#cpf').val('');
                    $('#btn-fechar').click();
                    window.location = "index.php?pag=" + pag + "&id=" + idturma;

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


<!--AJAX PARA EXCLUSÃO DOS DADOS -->
<script type="text/javascript">
    $(document).ready(function () {
        var pag = "<?=$pag?>";
        $('#btn-deletar').click(function (event) {
            event.preventDefault();

            $.ajax({
                url: pag + "/excluir.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function (mensagem) {

                    if (mensagem.trim() === 'Excluído com Sucesso!') {


                        $('#btn-cancelar-excluir').click();
                        window.location = "index.php?pag=" + pag + "&id=" + idturma;
                    }

                    $('#mensagem_excluir').text(mensagem)


                },

            })
        })
    })
</script>


<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">

    function carregarImg() {

        var target = document.getElementById('target');
        var file = document.querySelector("input[type=file]").files[0];


        var arquivo = file['name'];
        resultado = arquivo.split(".", 2);
        //console.log(resultado[1]);

        if (resultado[1] === 'pdf') {
            $('#target').attr('src', "../img/arquivos-plano/pdf.png");
            return;
        }

        if (resultado[1] === 'rar') {
            $('#target').attr('src', "../img/arquivos-plano/zip.png");
            return;
        }


        if (resultado[1] === 'zip') {
            $('#target').attr('src', "../img/arquivos-plano/zip.png");
            return;
        }

        var reader = new FileReader();

        reader.onloadend = function () {
            target.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);


        } else {
            target.src = "";
        }
    }

</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').dataTable({
            "ordering": false
        })

    });
</script>



