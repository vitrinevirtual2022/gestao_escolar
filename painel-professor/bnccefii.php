<?php 
$pag = "bnccefii";
require_once("../conexao.php"); 

@session_start();
    //verificar se o usuário está autenticado
if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'professor'){
    echo "<script language='javascript'> window.location='../index.php' </script>";

}


?>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<div class="row mt-4 mb-4">
   <h3 class="ml-3">Base Nacional Comum Curricular - BNCC</h3>
</div>



<div class="container">
    <div class="row">
        <div class="col-3">
            <div id="list-example" class="list-group">
              <a class="list-group-item list-group-item-action" href="#list-item-1">O que é a BNCC</a>
              <a class="list-group-item list-group-item-action" href="#list-item-2">Menu 2</a>
              
              
            </div>
        </div>

        <div class="col-9">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h4 id="list-item-1">Base Nacional Comum Curricular</h4>
              <p class="text-justify">A Base Nacional Comum Curricular (BNCC) é um documento de
                caráter normativo que define o conjunto orgânico e progressivo de
                aprendizagens essenciais que todos os alunos devem desenvolver
                ao longo das etapas e modalidades da Educação Básica, de modo
                a que tenham assegurados seus direitos de aprendizagem e desenvolvimento, em conformidade com o que preceitua o Plano Nacional
                de Educação (PNE). Este documento normativo aplica-se exclusivamente à educação escolar, tal como a define o § 1º do Artigo 1º da Lei
                de Diretrizes e Bases da Educação Nacional (LDB, Lei nº 9.394/1996)1
                ,
                e está orientado pelos princípios éticos, políticos e estéticos que
                visam à formação humana integral e à construção de uma sociedade justa, democrática e inclusiva, como fundamentado nas
                Diretrizes Curriculares Nacionais da Educação Básica (DCN).</p>
                <p class="text-justify">
                    Referência nacional para a formulação dos currículos dos sistemas
                e das redes escolares dos Estados, do Distrito Federal e dos Municípios e das propostas pedagógicas das instituições escolares, a BNCC
                integra a política nacional da Educação Básica e vai contribuir para o
                alinhamento de outras políticas e ações, em âmbito federal, estadual
                e municipal, referentes à formação de professores, à avaliação, à elaboração de conteúdos educacionais e aos critérios para a oferta de
                infraestrutura adequada para o pleno desenvolvimento da educação.
                </p>
              
              <p class="text-justify">Nesse sentido, espera-se que a BNCC ajude a superar a fragmentação das políticas educacionais, enseje o fortalecimento do regime
                de colaboração entre as três esferas de governo e seja balizadora
                da qualidade da educação. Assim, para além da garantia de acesso
                e permanência na escola, é necessário que sistemas, redes e escolas
                garantam um patamar comum de aprendizagens a todos os estudantes, tarefa para a qual a BNCC é instrumento fundamental</p>
                <p class="text-justify">Ao longo da Educação Básica, as aprendizagens essenciais definidas
                na BNCC devem concorrer para assegurar aos estudantes o desenvolvimento de dez competências gerais, que consubstanciam, no
                âmbito pedagógico, os direitos de aprendizagem e desenvolvimento</p>
              <p class="text-justify">Na BNCC, competência é definida como a mobilização de conhecimentos (conceitos e procedimentos), habilidades (práticas,
                cognitivas e socioemocionais), atitudes e valores para resolver
                demandas complexas da vida cotidiana, do pleno exercício da cidadania e do mundo do trabalho</p>
                <p class="text-justify">Ao definir essas competências, a BNCC reconhece que a “educação deve afirmar valores e estimular ações que contribuam para a
                transformação da sociedade, tornando-a mais humana, socialmente
                justa e, também, voltada para a preservação da natureza” (BRASIL,
                2013)3, mostrando-se também alinhada à Agenda 2030 da Organização das Nações Unidas (ONU)</p>

              <p class="text-justify">É imprescindível destacar que as competências gerais da Educação
                Básica, apresentadas a seguir, inter-relacionam-se e desdobram-se
                no tratamento didático proposto para as três etapas da Educação Básica (Educação Infantil, Ensino Fundamental e Ensino Médio), articulando-se na construção de conhecimentos, no desenvolvimento de
                habilidades e na formação de atitudes e valores, nos termos da LDB.</p><br><br><br>

        
    
    
 
<hr>
<br><br> 

<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h4 id="list-item-2">Em construção!</h4>
  </div>              
           
</div>

  
</div>
</div>
</div>


                



            

