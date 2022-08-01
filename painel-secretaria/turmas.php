<?php 
$pag = "turmas";
require_once("../conexao.php"); 

@session_start();
    //verificar se o usuário está autenticado
if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'secretaria'){
    echo "<script language='javascript'> window.location='../index.php' </script>";

}


?>

<div class="row mt-4 mb-4">
    <a type="button" class="btn-info btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Nova Turma</a>
    <a type="button" class="btn-info btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>
    
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
                         <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Turma'><i class='far fa-edit'></i></a>
                         <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Turma'><i class='far fa-trash-alt'></i></a>

                         <a href="index.php?pag=<?php echo $pag ?>&funcao=info&id=<?php echo $id ?>" class='text-info mr-1' title='Informações da Turma'><i class='fas fa-clipboard-list'></i></a>

                         <a href="index.php?pag=<?php echo $pag ?>&funcao=matricula&id=<?php echo $id ?>" class='text-success mr-1' title='Matricular Aluno'><i class='fas fa-user-plus'></i></a>
                     </td>
                 </tr>
             <?php } ?>





         </tbody>
     </table>
 </div>
</div>
</div>





<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php 
                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Registro";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM turmas where id = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $disciplina2 = $res[0]['disciplina'];
                    $serie2 = $res[0]['serie'];
                    $professor2 = $res[0]['professor'];
                    $nome_escola2 = $res[0]['nome_escola'];
                    $horario2 = $res[0]['horario'];
                    $dia2 = $res[0]['dia'];
                    $data_inicio2 = $res[0]['data_inicio'];
                    $data_final2 = $res[0]['data_final'];
                    $valor_mensalidade2 = $res[0]['valor_mensalidade'];
                    $ano2 = $res[0]['ano'];



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
                    
                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                            <label >Professor</label>
                            <select name="professor" class="form-control" id="professor">

                                <?php 

                                $query = $pdo->query("SELECT * FROM professores order by nome asc ");
                                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                for ($i=0; $i < @count($res); $i++) { 
                                    foreach ($res[$i] as $key => $value) {
                                    }
                                    $nome_reg = $res[$i]['nome'];
                                    $id_reg = $res[$i]['id'];
                                    ?>                                  
                                    <option <?php if(@$professor2 == $id_reg){ ?> selected <?php } ?> value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                                <?php } ?>

                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Escola</label>
                                <select name="nome_escola" class="form-control" id="nome_escola">

                                    <?php 

                                    $query = $pdo->query("SELECT * FROM escolas order by nome_school asc ");
                                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                    for ($i=0; $i < @count($res); $i++) { 
                                        foreach ($res[$i] as $key => $value) {
                                        }
                                        $nome_reg = $res[$i]['nome_school'];
                                        $id_reg = $res[$i]['id'];
                                        ?>                                  
                                        <option <?php if(@$nome_esc2 == $id_reg){ ?> selected <?php } ?> value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">

                         <div class="form-group">
                            <label >Disciplina</label>
                            <select name="disciplina" class="form-control" id="disciplina">

                                <?php 

                                $query = $pdo->query("SELECT * FROM disciplinas order by nome asc ");
                                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                for ($i=0; $i < @count($res); $i++) { 
                                    foreach ($res[$i] as $key => $value) {
                                    }
                                    $nome_reg = $res[$i]['nome'];
                                    $id_reg = $res[$i]['id'];
                                    ?>                                  
                                    <option <?php if(@$disciplina2 == $id_reg){ ?> selected <?php } ?> value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                                <?php } ?>

                            </select>
                        </div>


                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                        <label >Ano</label>
                        <select name="serie" class="form-control" id="serie">

                            <?php 

                            $query = $pdo->query("SELECT * FROM serie order by serie_ano asc ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i=0; $i < @count($res); $i++) { 
                                foreach ($res[$i] as $key => $value) {
                                }
                                $nome_reg = $res[$i]['serie_ano'];
                                $id_reg = $res[$i]['id'];
                                ?>                                  
                                <option <?php if(@$serie2 == $id_reg){ ?> selected <?php } ?> value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
                            <?php } ?>

                        </select>
                    </div>
                </div>
                
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label >Data Início</label>
                    <input value="<?php echo @$data_inicio2 ?>" type="date" class="form-control" id="data_inicio" name="data_inicio">
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label >Data Final</label>
                <input value="<?php echo @$data_final2 ?>" type="date" class="form-control" id="data_final" name="data_final">
            </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
            <label >Horário de Aulas</label>
            <input value="<?php echo @$horario2 ?>" type="text" class="form-control" id="horario" name="horario" placeholder="De xx:xx às xx:xx">
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-7">
        <div class="form-group">
            <label >Dias das Aulas</label>
            <input value="<?php echo @$dia2 ?>" type="text" class="form-control" id="dia" name="dia" placeholder="Informe os dias de aulas para esta turma">
        </div>
    </div>
    
<div class="col-md-5">
    <div class="form-group">
        <label >Ano Início</label>
        <input value="<?php echo @$ano2 ?>" type="number" class="form-control" id="ano" name="ano" placeholder="Ano letivo">
    </div>
</div>
</div>










<small>
    <div id="mensagem">

    </div>
</small> 

</div>



<div class="modal-footer">



    <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
    <!--
    <input value="<?php echo @$cpf2 ?>" type="hidden" name="antigo" id="antigo">
    <input value="<?php echo @$email2 ?>" type="hidden" name="antigo2" id="antigo2">-->

    <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
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

                <small><div align="center" id="mensagem_excluir" class="">

                </div></small>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
                <form method="post">

                    <input type="hidden" id="id"  name="id" value="<?php echo @$_GET['id'] ?>" required>

                    <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                </form>
            </div>
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







<div class="modal" id="modal-matricula" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Matricular Aluno <small><a class="text-dark" title="Ver Alunos Matriculados" href="index.php?pag=<?php echo $pag ?>&funcao=matriculados&id_turma=<?php echo $_GET['id'] ?>"><u>Ver Alunos</u></a></small></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <!-- DataTales Example -->
               <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>

                               <?php 

                               $query = $pdo->query("SELECT * FROM alunos order by id desc ");
                               $res = $query->fetchAll(PDO::FETCH_ASSOC);

                               for ($i=0; $i < count($res); $i++) { 
                                  foreach ($res[$i] as $key => $value) {
                                  }

                                  $nome = $res[$i]['nome'];
                                  $telefone = $res[$i]['telefone'];
                                  $email = $res[$i]['email'];
                                  $endereco = $res[$i]['endereco'];
                                  $cpf = $res[$i]['cpf'];
                                  $foto = $res[$i]['foto'];
                                  $id_aluno = $res[$i]['id'];


                                  ?>


                                  <tr>
                                    <td><?php echo $nome ?></td>
                                    
                                    <td><?php echo $email ?></td>
                                    
                                    <td><img src="../img/alunos/<?php echo $foto ?>" width="50"></td>


                                    <td>

                                     <a href="index.php?pag=<?php echo $pag ?>&funcao=confirmar&id_turma=<?php echo $_GET['id'] ?>&id_aluno=<?php echo $id_aluno ?>" class='text-info mr-1' title='Confirmar Matricula'><i class='fas fa-user-check fa-lg'></i></a>
                                 </td>
                             </tr>
                         <?php } ?>





                     </tbody>
                 </table>
             </div>
         </div>
     </div>



 </div>

</div>
</div>
</div>





<div class="modal" id="modal-matriculados" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alunos Matriculados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome do Aluno</th>
                                    <th>Data da Matricula</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                <tbody>
                <?php 
                 $query = $pdo->query("SELECT * FROM matriculas where turma = '$_GET[id_turma]' order by id desc ");
                               $res = $query->fetchAll(PDO::FETCH_ASSOC);

                               for ($i=0; $i < count($res); $i++) { 
                                  foreach ($res[$i] as $key => $value) {
                                  }

                                  $aluno = $res[$i]['aluno'];
                                  $data = $res[$i]['data'];
                                  $id_m = $res[$i]['id'];

                                  $data_m = implode('/', array_reverse(explode('-', $data)));

                                $query_r = $pdo->query("SELECT * FROM alunos where id = '" . $aluno . "' ");
                                $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
                                $nome_aluno = $res_r[0]['nome'];

                                    
                             
                                
                 ?>

                        <tr>
                                    <td><?php echo $nome_aluno ?></td>
                                    
                                    <td><?php echo $data_m ?></td>

                                    <td> 
                                        <a title="Excluir Matrícula" href="index.php?pag=<?php echo $pag ?>&funcao=excluir_matricula&id_m=<?php echo $id_m ?>&id_turma=<?php echo $_GET['id_turma'] ?>"><i class='fas fa-user-times text-danger'></i></a>
                                  
                                         
                                     </td>


                        </tr>

               

                

            <?php } ?>

                    </tbody>
                </table>

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

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "info") {
    echo "<script>$('#modal-info').modal('show');</script>";
}


if (@$_GET["funcao"] != null && @$_GET["funcao"] == "matricula") {
    echo "<script>$('#modal-matricula').modal('show');</script>";
}


if (@$_GET["funcao"] != null && @$_GET["funcao"] == "confirmar") {

    $id_turma = $_GET['id_turma'];
    $id_aluno = $_GET['id_aluno'];

    $query_r = $pdo->query("SELECT * FROM matriculas where turma = '$id_turma' and aluno = '$id_aluno' ");
    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);

    if(@count($res_r) == 0){
         $res = $pdo->query("INSERT INTO matriculas SET turma = '$id_turma', aluno = '$id_aluno', data = curDate()");

         $id_matricula = $pdo->lastInsertId();

     //GERAR AS PARCELAS DE PAGAMENTO MATRICULA
     $query_r = $pdo->query("SELECT * FROM turmas where id = '$id_turma' ");
    $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);    
    $data_ini = $res_r[0]['data_inicio'];
    $data_fin = $res_r[0]['data_final'];
    $valor_turma = $res_r[0]['valor_mensalidade'];

    //RECUPERAR O TOTAL DE MESES ENTRE DATAS
$d1 = new DateTime($data_ini);
$d2 = new DateTime($data_fin);
$intervalo = $d1->diff( $d2 );
$anos = $intervalo->y;
$meses = $intervalo->m + ($anos * 12);

 for ($i=0; $i < $meses; $i++) { 

    //INCREMENTAR 1 MES NA DATA INICIAL
         $data_nova = date('Y/m/d', strtotime("+$i month",strtotime($data_ini))); 

         $res = $pdo->query("INSERT INTO pgto_matriculas SET matricula = '$id_matricula', valor = '$valor_turma', data_venc = '$data_nova', pago = 'Não'");


    }

    }

    echo "<script>window.location='index.php?pag=$pag&id_turma=$id_turma&id_aluno=$id_aluno&funcao=matriculados';</script>";
   
    
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "matriculados") {
    echo "<script>$('#modal-matriculados').modal('show');</script>";
}



if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir_matricula") {

    $id_m = $_GET['id_m'];
    $id_turma = $_GET['id_turma'];
   
   
         $res = $pdo->query("DELETE from matriculas WHERE id = '$id_m'");

         $res = $pdo->query("DELETE from pgto_matriculas WHERE matricula = '$id_m'");

    echo "<script>window.location='index.php?pag=$pag&id_turma=$id_turma&id_aluno=$id_aluno&funcao=matriculados';</script>";
   
    
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



