    <?php 
    $pag = "pedagogico";
    require_once("../conexao.php"); 
   
    @session_start();
        //verificar se o usuário está autenticado
    if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'professor'){
        echo "<script language='javascript'> window.location='../index.php' </script>";
        exit();
    }


    ?>

    <div class="row mt-4 mb-4">
       <h3>Documentos</h3>
        
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Descrição</th>
                            <th>Arquivo</th>
                            
                           
                        </tr>
                    </thead>

                    <tbody>

                     <?php 

                     $query = $pdo->query("SELECT * FROM docs_escola order by id desc ");
                     $res = $query->fetchAll(PDO::FETCH_ASSOC);

                     for ($i=0; $i < count($res); $i++) { 
                      foreach ($res[$i] as $key => $value) {
                      }

                      $nome = $res[$i]['nome'];
                      $descricao = $res[$i]['descricao'];
                      $arquivo = $res[$i]['arquivo'];


                      $id = $res[$i]['id'];

                      

                      

                      ?>


                      <tr>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $descricao ?></td>
                        
                        <td><?php 
                        if($arquivo != ""){
                            echo '<span class="ml-1" ><a href="../img/pedagogico/'.$arquivo.'" target="_blank" class="text-primary">'.$arquivo.'</a> <br></span>';
                        }else{ 
                            echo '<br>';
                        }
                        
                        ?></td>

                    


                        </tr>
               <?php } ?>





           </tbody>
       </table>
   </div>
</div>
</div>













<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">

    function carregarImg() {

        var target = document.getElementById('target');
        var file = document.querySelector("input[type=file]").files[0];


        var arquivo = file['name'];
        resultado = arquivo.split(".", 2);
        //console.log(resultado[1]);

        if(resultado[1] === 'pdf'){
            $('#target').attr('src', "../img/pedagogico/pdf.png");
            return;
        }

         if(resultado[1] === 'rar'){
            $('#target').attr('src', "../img/pedagogico/zip.png");
            return;
        }


         if(resultado[1] === 'zip'){
            $('#target').attr('src', "../img/pedagogico/zip.png");
            return;
        }

        if(resultado[1] === 'docx'){
            $('#target').attr('src', "../img/pedagogico/docx.png");
            return;
        }

        if(resultado[1] === 'xlsx'){
            $('#target').attr('src', "../img/pedagogico/xlsx.png");
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



