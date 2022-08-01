<?php 
$pag = "turmas";
require_once("../conexao.php"); 

@session_start();
    //verificar se o usuário está autenticado
if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin'){
    echo "<script language='javascript'> window.location='../index.php' </script>";

}


?>

<div class="row mt-4 mb-4">
    <h4>Turmas criadas</h4>
    
</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Escola</th>
                        <th>Professor</th>
                        <th>Disciplinas</th>
                        <th>Ano Escolar</th>
                        <th>Horário</th>
                        
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                   <?php 

                   $query = $pdo->query("SELECT * FROM turmas order by id desc ");
                   $res = $query->fetchAll(PDO::FETCH_ASSOC);

                   for ($i=0; $i < count($res); $i++) { 
                      foreach ($res[$i] as $key => $value) {
                      }

                      $disciplina = $res[$i]['disciplina'];
                      $serie = $res[$i]['serie'];
                      $professor = $res[$i]['professor'];
                      $horario = $res[$i]['horario'];
                      $nome_escola = $res[$i]['nome_escola'];
                      $id = $res[$i]['id'];

                      //RECUPERAR NOME DISCIPLINA
                      $query_r = $pdo->query("SELECT * FROM disciplinas where id =  '$disciplina'");
                      $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                      $nome_disc = $res_r[0]['nome'];

                       //RECUPERAR NOME SALA
                      $query_r = $pdo->query("SELECT * FROM serie where id =  '$serie'");
                      $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                      $nome_serie = $res_r[0]['serie_ano'];

                       //RECUPERAR NOME PROFESSOR
                      $query_r = $pdo->query("SELECT * FROM professores where id =  '$professor'");
                      $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                      $nome_prof = $res_r[0]['nome'];

                      //RECUPERAR NOME PROFESSOR
                      $query_r = $pdo->query("SELECT * FROM escolas where id =  '$nome_escola'");
                      $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                      $nome_esc = $res_r[0]['nome_school'];

                      ?>


                      <tr>
                        <td><?php echo $nome_esc ?></td>
                        <td><?php echo $nome_prof ?></td>
                        <td><?php echo $nome_disc ?></td>
                        <td><?php echo $nome_serie ?></td>
                        <td><?php echo $horario ?></td>
                        


                        <td>
                         

                         <a href="index.php?pag=<?php echo $pag ?>&funcao=info&id=<?php echo $id ?>" class='text-info mr-1' title='Informações da Turma'><i class='fas fa-clipboard-list'></i></a>

                         
                     </td>
                 </tr>
             <?php } ?>





         </tbody>
     </table>
 </div>
</div>
</div>






<div class="modal" id="modal-info" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Informações da Turma</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php 
                if (@$_GET['funcao'] == 'info') {

                    $id2 = $_GET['id'];

                  
                    $query = $pdo->query("SELECT * FROM turmas where id = '$id2' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                    $disciplina3 = $res[0]['disciplina'];
                    $serie3 = $res[0]['serie'];
                    $professor3 = $res[0]['professor'];
                    $nome_escola3 = $res[0]['nome_escola'];
                    $horario3 = $res[0]['horario'];
                    $dia3 = $res[0]['dia'];
                    $data_inicio3 = $res[0]['data_inicio'];
                    $data_final3 = $res[0]['data_final'];
                    $valor_mensalidade3 = $res[0]['valor_mensalidade'];
                    $ano3 = $res[0]['ano'];


                     //RECUPERAR NOME DISCIPLINA
                    $query_r = $pdo->query("SELECT * FROM disciplinas where id =  '$disciplina3'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_disc3 = $res_r[0]['nome'];

                       //RECUPERAR NOME SALA
                    $query_r = $pdo->query("SELECT * FROM serie where id =  '$serie3'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_serie3 = $res_r[0]['serie_ano'];

                       //RECUPERAR NOME PROFESSOR
                    $query_r = $pdo->query("SELECT * FROM professores where id =  '$professor3'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_prof3 = $res_r[0]['nome'];

                    $valor_mensF = number_format($valor_mensalidade3, 2, ',', '.');
                    $data_inicioF = implode('/', array_reverse(explode('-', $data_inicio3)));
                    $data_finalF = implode('/', array_reverse(explode('-', $data_final3)));
                    
                     //RECUPERAR NOME DA ESCOLA
                    $query_r = $pdo->query("SELECT * FROM escolas where id =  '$nome_escola3'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_esc3 = $res_r[0]['nome_school'];

                } 


                ?>

                <span><b>Escola: </b> <i><?php echo $nome_esc3 ?></i><br></span>
                <span><b>Professor: </b> <i><?php echo $nome_prof3 ?></i><br></span>
                <span><b>Disciplina: </b> <i><?php echo $nome_disc3 ?></i></span>  <span class="ml-4"><b>Ano Escolar: </b> <i><?php echo $nome_serie3 ?></i> </span><br>
                
                <span><b>Data Início: </b> <i><?php echo $data_inicioF ?></i> </span><span class="ml-4"><b>Data Final: </b> <i><?php echo $data_finalF ?></i><br></span>

                <span><b>Horário: </b> <i><?php echo $horario3 ?></i> </span><span class="ml-4"><b>Dias: </b> <i><?php echo $dia3 ?></i><br></span>

                <span><b>Ano Letivo: </b> <i><?php echo $ano3 ?></i><br></span>
                
                <!--<span><b>Total de Alunos: </b> <i> <?php echo 'total'?></i> </span>-->


            </div>

        </div>
    </div>
</div>



<?php 

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "info") {
    echo "<script>$('#modal-info').modal('show');</script>";
}


?>




<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
    $("#form").submit(function () {
        var pag = "<?=$pag?>";
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
                    window.location = "index.php?pag="+pag;

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
                        window.location = "index.php?pag=" + pag;
                    }

                    $('#mensagem_excluir').addClass('text-danger')
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



