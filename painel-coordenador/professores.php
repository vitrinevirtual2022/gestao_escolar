<?php 
$pag = "professores";
require_once("../conexao.php"); 

@session_start();
    //verificar se o usuário está autenticado
if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'coordenador'){
    echo "<script language='javascript'> window.location='../index.php' </script>";

}


?>

<div class="row mt-4 mb-4">
    <h5>Relação Nominal de Professores</h5>
    
</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Formação</th>
                        <th>Escola</th>
                        
                        <th>Foto</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                 <?php 
                    $query = $pdo->query("SELECT * FROM professores order by id desc ");
                 $res = $query->fetchAll(PDO::FETCH_ASSOC);

                 for ($i=0; $i < count($res); $i++) { 
                  foreach ($res[$i] as $key => $value) {
                  }

                  $nome = $res[$i]['nome'];
                  $formacao = $res[$i]['formacao'];
                  $telefone = $res[$i]['telefone'];
                  $email = $res[$i]['email'];
                  $endereco = $res[$i]['endereco'];
                  $cpf = $res[$i]['cpf'];
                  $nome_escola = $res[$i]['nome_escola'];
                  $foto = $res[$i]['foto'];
                  $id = $res[$i]['id'];


                    //RECUPERAR NOME DA ESCOLA
                    $query_r = $pdo->query("SELECT * FROM escolas where id =  '$nome_escola'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_esc = $res_r[0]['nome_school'];




                  ?>


                  <tr>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $formacao ?></td>
                    <td><?php echo $nome_esc ?></td>
                    
                    
                    <td><img src="../img/professores/<?php echo $foto ?>" width="50"></td>


                    <td>
                       
                       <a href="index.php?pag=<?php echo $pag ?>&funcao=arquivos&id=<?php echo $id ?>" class='text-danger mr-1' title='Baixar arquivos do Professor'><i class='fas fa-cloud-download-alt'></i></a>
                       <a href="index.php?pag=<?php echo $pag ?>&funcao=exibir&id=<?php echo $id ?>" class='text-info mr-1' title='Exibir dados do Professor'><i class='fas fa-user-graduate'></i></a>
                   </td>
               </tr>
           <?php } ?>





       </tbody>
   </table>
</div>
</div>
</div>



<div class="modal" id="modal-exibir" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dados do Professor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php 
                if (@$_GET['funcao'] == 'exibir') {

                    $id2 = $_GET['id'];

                   $query = $pdo->query("SELECT * FROM professores where id = '$id2' order by id desc");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);
                    $nome2 = $res[0]['nome'];
                    $formacao2 = $res[0]['formacao'];
                    $cpf2 = $res[0]['cpf'];
                    $telefone2 = $res[0]['telefone'];
                    $email2 = $res[0]['email'];
                    $endereco2 = $res[0]['endereco'];
                    $nome_escola2 = $res[0]['nome_escola'];
                    $foto2 = $res[0]['foto'];

                    //RECUPERAR NOME DA ESCOLA
                    $query_r = $pdo->query("SELECT * FROM escolas where id =  '$nome_escola2'");
                    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                    $nome_esc2 = $res_r[0]['nome_school'];

                            
                }




                ?>

            
                   
                    <span><b>Nome: </b> <i><?php echo $nome2 ?></i><br>
                    <span><b>Formação: </b> <i><?php echo $formacao2 ?></i><br>
                    <span><b>Telefone: </b> <i><?php echo $telefone2 ?></i> <span class="ml-4"><b>CPF: </b> <i><?php echo $cpf2 ?></i><br>
                    <span><b>Email: </b> <i><?php echo $email2 ?><br>
                    <span><b>Endereço: </b> <i><?php echo $endereco2 ?><br>
                    <span><b>Escola/ Local de Trabalho: </b> <i><?php echo $nome_esc2 ?><br>

                    <div class="mt-2" align="center">
                        <img src="../img/professores/<?php echo $foto2 ?>" width="250px">
                    </div>





               
                </div>

                
            </div>


        </div>

    </div>
</div>
</div>

<div class="modal" id="modal-arquivos" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo $nome ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <span class=""><b>Planos do Professor</b></span> <br><br>

        <?php

        $id_prof = $_GET['id'];

        $query = $pdo->query("SELECT * FROM plano_anual where plano_professor = '$id_prof' order by id asc ");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);

        for ($i=0; $i < count($res); $i++) { 
          foreach ($res[$i] as $key => $value) {
          }

          $nome_plano = $res[$i]['nome_plano'];
          $arquivo = $res[$i]['arquivo'];
          $id_aula = $res[$i]['id'];

          echo ''. ($i+1) . ' - '. $nome_plano;

          if($arquivo != ""){
            echo '<span class="ml-1" ><a href="../img/arquivos-plano/'.$arquivo.'" target="_blank" class="text-primary"> Ver Arquivo </a> <br></span>';
          }else{ 
            echo '<br>';
          }

        }

        ?>


      </div>


    </div>

  </div>
</div>


<?php 

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "arquivos") {
    echo "<script>$('#modal-arquivos').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "exibir") {
    echo "<script>$('#modal-exibir').modal('show');</script>";
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



