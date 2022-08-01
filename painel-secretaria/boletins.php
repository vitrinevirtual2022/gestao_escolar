<?php
$pag = "boletins";
require_once("../conexao.php");

@session_start();

//verificar se o usuário está autenticado



$id_aluno = $res[$i]['id'];


$id_mat = $_GET['id'];
$id_per = @$_GET['id_periodo'];

$query = $pdo->query("SELECT * FROM matriculas where id = '$id_mat' order by id desc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_turma = $res[0]['turma'];
$id_aluno = $res[0]['aluno'];


$query_2 = $pdo->query("SELECT * FROM turmas where id = '$id_turma' ");
$res_2 = $query_2->fetchAll(PDO::FETCH_ASSOC);
$disciplina = $res_2[0]['disciplina'];
$horario = $res_2[0]['horario'];
$dia = $res_2[0]['dia'];
$ano = $res_2[0]['ano'];
$data_final = $res_2[0]['data_final'];
$data_inicio = $res_2[0]['data_inicio'];
$professor = $res_2[0]['professor'];


$query_resp = $pdo->query("SELECT * FROM disciplinas where id = '$disciplina' ");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$nome_disc = $res_resp[0]['nome'];


$query_resp = $pdo->query("SELECT * FROM professores where id = '$professor' ");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$nome_prof = $res_resp[0]['nome'];
$email_prof = $res_resp[0]['email'];
$imagem_prof = $res_resp[0]['foto'];



$query_resp = $pdo->query("SELECT * FROM matriculas where turma = '$id_turma' ");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$total_alunos = @count($res_resp);

$id_get_periodo = @$_GET['id_periodo'];

$query_resp = $pdo->query("SELECT * FROM aulas where turma = '$id_turma' and periodo = '$id_get_periodo'");
$res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);
$total_aulas = @count($res_resp);


$id_get_periodo = @$_GET['id_periodo'];

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
for ($i=0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }

  $nome = $res[$i]['nome'];
  $id_periodo = $res[$i]['id'];



  $query_p = $pdo->query("SELECT * FROM aulas where periodo = '$id_periodo' ");
  $res_p = $query_p->fetchAll(PDO::FETCH_ASSOC);
  if(@count($res_p) > 0){
    $contador = $contador + 1;


    //CALCULAR FREQUÊNCIA
    $query2 = $pdo->query("SELECT * FROM chamadas where turma = '$id_turma' and aluno = '$id_aluno' and periodo = '$id_periodo'");
    $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
    $total_faltas2 = 0;
    $total_chamadas2 = 0;

    for ($i2=0; $i2 < count($res2); $i2++) {
    foreach ($res2[$i2] as $key => $value) {
      }
      $total_chamadas2 = count($res2);
      $falta = @$res2[$i2]['presenca'];

      if($falta == 'F'){
        $total_faltas2 = $total_faltas2 + 1;
      }

      }
    }
  }



  //RECUPERAR AS NOTAS POR PERIODO
$query = $pdo->query("SELECT * FROM periodos where turma = '$id_turma' order by id asc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_notas_curso = 0;
for ($i=0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }

  $nome = $res[$i]['nome'];
  $id_periodo = $res[$i]['id'];
  $minimo_media = $res[$i]['minimo_media'];



  $query_n = $pdo->query("SELECT * FROM notas where periodo = '$id_periodo' and aluno = '$id_aluno'");
  $res_n = $query_n->fetchAll(PDO::FETCH_ASSOC);
  $total_notas_periodo = 0;

  for ($in=0; $in < count($res_n); $in++) {
    foreach ($res_n[$in] as $key => $value) {
    }

    $total_notas_periodo = $total_notas_periodo + $res_n[$in]['nota'];


  }

  $total_notas_curso = $total_notas_curso + $total_notas_periodo;

}


?>




<div class="row mt-4 mb-4">
  <h3>Emissão de documentos escolar</h3>

</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Nº do NIS</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Idade</th>
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

          $nome_aluno = $res[$i]['nome'];
          $telefone = $res[$i]['telefone'];
          $email = $res[$i]['email'];
          $endereco = $res[$i]['endereco'];
          $cpf = $res[$i]['cpf'];
          $nis = $res[$i]['nis'];
          $foto = $res[$i]['foto'];
          $id_aluno = $res[$i]['id'];
          $data_nasc = $res[$i]['data_nascimento'];

                  //RETORNA A IDADE DO ALUNO
          $date1 = $data_nasc;
          $date2 = date('Y-m-d');
          $diff = abs(strtotime($date2) - strtotime($date1));
          $idade = floor($diff / (365*60*60*24));




          ?>


          <tr>
            <td>
              <?php echo $nome_aluno ?>

            </td>
            <td><?php echo $nis ?></td>
            <td><?php echo $cpf ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $idade . ' Anos' ?></td>
            <td><img src="../img/alunos/<?php echo $foto ?>" width="50"></td>


            <td>

              <a href="index.php?pag=<?php echo $pag ?>&funcao=matriculas&id=<?php echo $id_aluno ?>" class="text-dark" title="Ver Matrículas"> <i class='fas fa-file-pdf'></i></a>&nbsp;&nbsp;


              <a href="index.php?pag=<?php echo $pag ?>&funcao=turmas&id=<?php echo $id_aluno ?>" class='text-danger mr-1' title='Boletim do Aluno'><i class='fas fa-file-pdf'></i></a>

            </td>
          </tr>
        <?php } ?>





      </tbody>
    </table>
  </div>
</div>
</div>







<div class="modal" id="modal-matriculas" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Matrículas do Aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Disciplinas</th>
                <th>Ano Escolar</th>
                <th>Documentos</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //Traz a matricula com base no id do aluno
              $query = $pdo->query("SELECT * FROM matriculas where aluno = '$_GET[id]' order by id desc ");
              $res = $query->fetchAll(PDO::FETCH_ASSOC);

              for ($i=0; $i < count($res); $i++) {
                foreach ($res[$i] as $key => $value) {
                }

                $aluno = $res[$i]['aluno'];
                $turma = $res[$i]['turma'];
                $data = $res[$i]['data'];

                $dataF = implode('/', array_reverse(explode('-', $data)));

                $id_m = $res[$i]['id'];




                $query_r = $pdo->query("SELECT * FROM turmas where id = '" . $turma . "' ");
                $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);

                $id_disciplina = $res_r[0]['disciplina'];
                $id_serie = $res_r[0]['serie'];

                $query_r = $pdo->query("SELECT * FROM disciplinas where id = '" . $id_disciplina . "' ");
                $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);

                $nome_disc = $res_r[0]['nome'];


                $query_r = $pdo->query("SELECT * FROM serie where id = '" . $id_serie . "' ");
                $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);

                $nome_s = $res_r[0]['serie_ano'];


                ?>

                <tr>
                  <td><?php echo $nome_disc ?></td>

                  <td><?php echo $nome_s ?></td>
                  <td>
                    <a target="_blank" title="Gerar Declaração Matrícula" href="../rel/declaracao.php?id=<?php echo $id_m ?>"><i class='far fa-file-pdf fa-lg text-danger'></i></a>
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



<div class="modal" id="modal-turmas" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gestão Acadêmica do Aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Disciplinas</th>
                <th>Ano Escolar</th>

                <th>Relatório de Notas</th>
              </tr>
            </thead>
            <tbody>

              <?php
              if (@$_GET['funcao'] == 'turmas') {


                $id_aluno = $_GET['id'];

                $query = $pdo->query("SELECT * FROM matriculas where aluno = '$id_aluno' ");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);


                for ($i=0; $i < count($res); $i++) {
                  foreach ($res[$i] as $key => $value) {
                  }

                  $id_turma = $res[$i]['turma'];
                  $id_mat = $res[$i]['id'];


                  $query_t = $pdo->query("SELECT * FROM turmas where id = '$id_turma' ");
                  $res_t = $query_t->fetchAll(PDO::FETCH_ASSOC);
                  $disciplina = $res_t[0]['disciplina'];



                  $query_resp = $pdo->query("SELECT * FROM disciplinas where id = '$disciplina' ");
                  $res_resp = $query_resp->fetchAll(PDO::FETCH_ASSOC);

                  $nome_disc = $res_resp[0]['nome'];

                  $query_r = $pdo->query("SELECT * FROM serie where id = '" . $id_serie . "' ");
                  $res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);

                  $nome_s = $res_r[0]['serie_ano'];





                  ?>
                  <tr>
                    <td><?php echo $nome_disc ?></td>
                    <td><?php echo $nome_s ?></td>


                    <td><a href="index.php?pag=<?php echo $pag ?>&funcao=periodos&id=<?php echo $id_mat ?>&id_turma=<?php echo $id_turma ?>&id_aluno=<?php echo $id_aluno ?>&boletim=sim" title="Gerar Boletim"><i class='fas fa-file-pdf text-danger mr-1'></i>Boletim</a></td>
                  </tr>


                <?php  }} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--
$id_m = $_GET['id'];
        $query = $pdo->query("SELECT * FROM matriculas where id = '$id_m' ");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        $id = $res[0]['aluno'];


        $query = $pdo->query("SELECT * FROM alunos where id = '$id' ");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        $nome_aluno = $res[0]['nome'];
      -->

  <div class="modal" id="modal-periodos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><?php echo $nome_disc ?>
          <?php if(@$_GET['boletim'] != ""){ ?>
           - <small><small>Mínimo para Aprovação <?php echo $media_pontos_minimo_aprovacao ?> Pontos</small></small>
         <?php } ?>
       </h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

      <?php

        $id_m = $_GET['id'];
        $query_m = $pdo->query("SELECT * FROM matriculas where id = '$id_m' ");
        $res_m = $query_m->fetchAll(PDO::FETCH_ASSOC);
        $id = $res_m[0]['aluno'];


        $query_a = $pdo->query("SELECT * FROM alunos where id = '$id' ");
        $res_a = $query_a->fetchAll(PDO::FETCH_ASSOC);
        for ($ia=0; $ia < count($res_a); $ia++) {
        foreach ($res_a[$ia] as $key => $value) {
          }
        $nome_aluno = $res_a[$ia]['nome'];
        $id_aluno = $res_a[$ia]['id'];
        }


        $query = $pdo->query("SELECT * FROM periodos where turma = '$id_turma' order by id asc ");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        $total_notas_curso = 0;
        for ($i=0; $i < count($res); $i++) {
          foreach ($res[$i] as $key => $value) {
          }

          $nome = $res[$i]['nome'];
          $id_periodo = $res[$i]['id'];
          $minimo_media = $res[$i]['minimo_media'];


          //RECUPERAR AS NOTAS POR PERIODO
          $query_n = $pdo->query("SELECT * FROM notas where periodo = '$id_periodo' and aluno = '$id_aluno'");
          $res_n = $query_n->fetchAll(PDO::FETCH_ASSOC);

          $total_notas_periodo = 0;


          for ($in=0; $in < count($res_n); $in++) {
            foreach ($res_n[$in] as $key => $value) {
            }


            $total_notas_periodo = $total_notas_periodo + $res_n[$in]['nota'];

            if($total_notas_periodo < $minimo_media){
              $cor_nota = 'text-danger';
            }else{
              $cor_nota = 'text-primary';
            }

          }





          $total_notas_curso = $total_notas_curso + $total_notas_periodo;

          if($total_notas_curso < $media_pontos_minimo_aprovacao){
            $classe_media_nota = 'text-danger';
          }else{
            $classe_media_nota = 'text-primary';
          }


        $query_p = $pdo->query("SELECT * FROM aulas where periodo = '$id_periodo' ");
        $res_p = $query_p->fetchAll(PDO::FETCH_ASSOC);

          if(@count($res_p) > 0){

        //CALCULAR FREQUÊNCIA
        $query2 = $pdo->query("SELECT * FROM chamadas where turma = '$id_turma' and aluno = '$id_aluno' and periodo = '$id_periodo'");
        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
        $total_faltas = 0;
        $total_chamadas = 0;

        for ($i2=0; $i2 < count($res2); $i2++) {
          foreach ($res2[$i2] as $key => $value) {
          }
          $total_chamadas = count($res2);
          $falta = @$res2[$i2]['presenca'];

          if($falta == 'F'){
            $total_faltas = $total_faltas + 1;
          }

        }





        ?>



        <?php if(@$_GET['boletim'] != ""){ ?>
          <span class="text-dark"><?php echo $nome ?></span> - <span class="<?php echo $cor_nota ?>"><?php echo $total_notas_periodo ?></span> pontos.<br>
          <span>
            <?php

             if ($total_faltas == 1) {
               echo $total_faltas .' Falta';
             } else {
               echo $total_faltas . ' Faltas';
             }


            ?>
          </span>


          <hr>
        <?php } ?>

          <?php  }} ?>

        <?php if(@$_GET['boletim'] != ""){ ?>
            <div class="row">
                <div class="col-md-6">
                    <a href="../rel/boletim_geral.php?id_turma=<?php echo $id_turma ?>&id_aluno=<?php echo $id_aluno ?>" target="_blank" title="Gerar Boletim">
                        <i class='fas fa-clipboard text-primary mr-1'></i>Boletim Geral </a>
                </div>
                <div class="col-md-6" align="right">
                    <span class="<?php echo $classe_media_nota ?>" ><?php echo $total_notas_curso ?> Pontos no Total</span>
                </div>
            </div>
        <?php } ?>

    </div>



          </div>




        </div>
      </div>
    </div>

    <?php

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "matriculas") {
      echo "<script>$('#modal-matriculas').modal('show');</script>";
    }

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "boletim") {
      echo "<script>$('#modal-boletim').modal('show');</script>";
    }

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "turmas") {
      echo "<script>$('#modal-turmas').modal('show');</script>";
    }

    if (@$_GET["funcao"] != null && @$_GET["funcao"] == "periodos") {
      echo "<script>$('#modal-periodos').modal('show');</script>";
    }

    ?>




<!--AJAX PARA LISTAR OS DADOS -->
<script type="text/javascript">
  $(document).ready(function(){
   listarDados();


 })
</script>


<script type="text/javascript">
  function listarDados(){
    var pag = "<?=$pag?>";
    var turma = "<?=$id_turma?>";
    var periodo = "<?=$id_per?>";

    $.ajax({
     url: pag + "/listar-aulas.php",
     method: "post",
     data: {turma, periodo},
     dataType: "html",
     success: function(result){
      $('#listar-aulas').html(result)

    },


  })
  }
</script>





