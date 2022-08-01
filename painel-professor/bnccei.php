<?php 
$pag = "bnccei";
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
              <a class="list-group-item list-group-item-action" href="#list-item-2">Direitos de Aprendizagem na E.I</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">O eu, o outro e o nós</a>
              <a class="list-group-item list-group-item-action" href="#list-item-4">Corpo, gestos e movimentos</a>
              <a class="list-group-item list-group-item-action" href="#list-item-5">Traços, sons, cores e formas</a>
              <a class="list-group-item list-group-item-action" href="#list-item-6">Escuta, fala, pensamento e imaginação</a>
              <a class="list-group-item list-group-item-action" href="#list-item-7">Espaços, tempos, quantidades ...</a>
              
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

        <h4 id="list-item-2">DIREITOS DE APRENDIZAGEM E DESENVOLVIMENTO NA
        EDUCAÇÃO INFANTIL</h4>
        <ul>
          <li>
            <b>Conviver</b> com outras crianças e adultos, em pequenos e grandes grupos,
            utilizando diferentes linguagens, ampliando o conhecimento de si e do
            outro, o respeito em relação à cultura e às diferenças entre as pessoas.
          </li>
          <li>
            <b>Brincar</b> cotidianamente de diversas formas, em diferentes espaços
            e tempos, com diferentes parceiros (crianças e adultos), ampliando e
            diversificando seu acesso a produções culturais, seus conhecimentos, sua
            imaginação, sua criatividade, suas experiências emocionais, corporais,
            sensoriais, expressivas, cognitivas, sociais e relacionais.
          </li>
          <li>
            <b>Participar</b> ativamente, com adultos e outras crianças, tanto do planejamento
            da gestão da escola e das atividades propostas pelo educador
            quanto da realização das atividades da vida cotidiana, tais como a escolha
            das brincadeiras, dos materiais e dos ambientes, desenvolvendo diferentes
            linguagens e elaborando conhecimentos, decidindo e se posicionando.
          </li>
          <li>
            <b>Explora</b> movimentos, gestos, sons, formas, texturas, cores, palavras,
            emoções, transformações, relacionamentos, histórias, objetos, elementos
            da natureza, na escola e fora dela, ampliando seus saberes sobre a cultura,
            em suas diversas modalidades: as artes, a escrita, a ciência e a tecnologia.
          </li>
          <li>
            <b>Expressar</b>, como sujeito dialógico, criativo e sensível, suas necessidades,
            emoções, sentimentos, dúvidas, hipóteses, descobertas, opiniões, questionamentos,
            por meio de diferentes linguagens.
          </li>
          <li>
            <b>Conhecer-se</b> e construir sua identidade pessoal, social e cultural, constituindo
            uma imagem positiva de si e de seus grupos de pertencimento, nas
            diversas experiências de cuidados, interações, brincadeiras e linguagens
            vivenciadas na instituição escolar e em seu contexto familiar e comunitário.
          </li>
        </ul>
        <br><br>

        <h4 id="list-item-3">OS OBJETIVOS DE APRENDIZAGEM DE DESENVOLVIMENTO PARA A EDUCAÇÃO INFANTIL</h4>
        <h5 >CAMPO DE EXPERIÊNCIAS "O EU, O OUTRO E O NÓS"</h5><br>

        <table class="table table-bordered">
          <thead>
            <tr><th>OBJETIVOS DE APRENDIZAGEM E DESENVOLVIMENTO</th></tr>
          </thead>
        </table>

        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Bebês (zero a 1 ano e
                6 meses)</th>
                <th scope="col">Crianças bem pequenas (1 ano
                e 7 meses a 3 anos e 11 meses)</th>
                <th scope="col">Crianças pequenas (4 anos a
                5 anos e 11 meses)</th>
                
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <th scope="row">(EI01EO01)
                  Perceber que suas ações
                  têm efeitos nas outras
                  crianças e nos adultos.
                </th>
                <td>(EI02EO01)
                  Demonstrar atitudes de
                  cuidado e solidariedade na
                  interação com crianças e
                  adultos.
                </td>
                <td>(EI03EO01)
                  Demonstrar empatia pelos
                  outros, percebendo que
                  as pessoas têm diferentes
                  sentimentos, necessidades e
                  maneiras de pensar e agir.
                </td>
                
              </tr>
              <tr>
                <th scope="row">(EI01EO02)
                  Perceber as possibilidades
                  e os limites de seu corpo nas
                  brincadeiras e interações
                  das quais participa.
                </th>
                <td>(EI02EO02)
                  Demonstrar imagem positiva
                  de si e confiança em sua
                  capacidade para enfrentar
                  dificuldades e desafios.
                </td>
                <td>(EI03EO02)
                  Agir de maneira independente,
                  com confiança em suas
                  capacidades, reconhecendo
                  suas conquistas e limitações.
                </td>
                
              </tr>

            <tr>
            <th scope="row">(EI01EO03)
              Interagir com crianças
              da mesma faixa etária
              e adultos ao explorar
              espaços, materiais,
              objetos, brinquedos.
            </th>
            <td>(EI02EO03)
              Compartilhar os objetos e
              os espaços com crianças da
              mesma faixa etária e adultos.
            </td>
            <td>(EI03EO03)
              Ampliar as relações
              interpessoais, desenvolvendo
              atitudes de participação e
              cooperação.
            </td>
            </tr>

            <tr>
            <th scope="row">(EI01EO04)
              Comunicar necessidades,
              desejos e emoções,
              utilizando gestos,
              balbucios, palavras.
            </th>
            <td>(EI02EO04)
              Comunicar-se com os colegas
              e os adultos, buscando
              compreendê-los e fazendo-se
              compreender.
            </td>
            <td>(EI03EO04)
              Comunicar suas ideias e
              sentimentos a pessoas e
              grupos diversos.
            </td>
            </tr>

            <tr>
            <th scope="row">(EI01EO05)
              Reconhecer seu corpo e
              expressar suas sensações
              em momentos de
              alimentação, higiene,
              brincadeira e descanso.
            </th>
            <td>(EI02EO05)
              Perceber que as pessoas
              têm características físicas
              diferentes, respeitando essas
              diferenças.
            </td>
            <td>(EI03EO05)
              Demonstrar valorização das
              características de seu corpo
              e respeitar as características
              dos outros (crianças e adultos)
              com os quais convive.
            </td>
            </tr>
            
            <tr>
            <th scope="row">(EI01EO06)
              Interagir com outras crianças
              da mesma faixa etária e
              adultos, adaptando-se
              ao convívio social.
            </th>
            <td>(EI02EO06)
              Respeitar regras básicas de
              convívio social nas interações
              e brincadeiras.
            </td>
            <td>(EI03EO06)
              Manifestar interesse e
              respeito por diferentes
              culturas e modos de vida.
            </td>
            </tr>

            <tr>
            <th scope="row">
            </th>
            <td>(EI02EO07)
              Resolver conflitos nas
              interações e brincadeiras, com
              a orientação de um adulto.
            </td>
            <td>(EI03EO07)
              Usar estratégias pautadas
              no respeito mútuo para lidar
              com conflitos nas interações
              com crianças e adultos.
            </td>

            </tr>

          
            </tbody>
      </table>
   <hr><br><br>                   

    <h5 id="list-item-4">CAMPO DE EXPERIÊNCIAS "CORPO, GESTOS E MOVIMENTOS"</h5><br>
      <table class="table table-bordered">
        <thead>
          <tr><th>OBJETIVOS DE APRENDIZAGEM E DESENVOLVIMENTO</th></tr>
        </thead>
      </table>
  <table class="table">

  <thead class="thead-light">
    <tr>
      <th scope="col">Bebês (zero a 1 ano e
      6 meses)</th>
      <th scope="col">Crianças bem pequenas (1 ano
      e 7 meses a 3 anos e 11 meses)</th>
      <th scope="col">Crianças pequenas (4 anos a
      5 anos e 11 meses)</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">(EI01CG01)
      Movimentar as partes
      do corpo para exprimir
      corporalmente emoções,
      necessidades e desejos.
      </th>
      <td>(EI02CG01)
      Apropriar-se de gestos e
      movimentos de sua cultura no
      cuidado de si e nos jogos e
      brincadeiras.
      </td>
      <td>(EI03CG01)
      Criar com o corpo formas
      diversificadas de expressão
      de sentimentos, sensações
      e emoções, tanto nas
      situações do cotidiano
      quanto em brincadeiras,
      dança, teatro, música.
      </td>
      
    </tr>
    <tr>
      <th scope="row">(EI01CG02)
      Experimentar as
      possibilidades corporais
      nas brincadeiras e
      interações em ambientes
      acolhedores e desafiantes.
      </th>
      <td>(EI02CG02)
      Deslocar seu corpo no espaço,
      orientando-se por noções
      como em frente, atrás, no alto,
      embaixo, dentro, fora etc., ao
      se envolver em brincadeiras
      e atividades de diferentes
      naturezas.
      </td>
      <td>(EI03CG02)
      Demonstrar controle e
      adequação do uso de seu
      corpo em brincadeiras e
      jogos, escuta e reconto
      de histórias, atividades
      artísticas, entre outras
      possibilidades.
      </td>
      
    </tr>
    <tr>
      <th scope="row">(EI01CG03)
      Imitar gestos e
      movimentos de outras
      crianças, adultos e animais.
      </th>
      <td>(EI02CG03)
      Explorar formas de
      deslocamento no espaço
      (pular, saltar, dançar),
      combinando movimentos e
      seguindo orientações.
      </td>
      <td>(EI03CG03)
      Criar movimentos, gestos,
      olhares e mímicas em
      brincadeiras, jogos e
      atividades artísticas como
      dança, teatro e música.
      </td>
      
    </tr>
    <tr>
      <th scope="row">(EI01CG04)
      Participar do cuidado do
      seu corpo e da promoção
      do seu bem-estar.
      </th>
      <td>(EI02CG04)
      Demonstrar progressiva
      independência no cuidado do
      seu corpo.
      </td>
      <td>(EI03CG04)
      Adotar hábitos de
      autocuidado relacionados
      a higiene, alimentação,
      conforto e aparência.
      </td>
    </tr>
    <tr>
      <th scope="row">(EI01CG05)
      Utilizar os movimentos
      de preensão, encaixe e
      lançamento, ampliando
      suas possibilidades de
      manuseio de diferentes
      materiais e objetos.
      </th>
      <td>(EI02CG05)
      Desenvolver progressivamente
      as habilidades manuais,
      adquirindo controle para
      desenhar, pintar, rasgar,
      folhear, entre outros.
      </td>
      <td>(EI03CG05)
      Coordenar suas habilidades
      manuais no atendimento
      adequado a seus interesses
      e necessidades em situações
      diversas.
      </td>
    </tr>

  </tbody>
</table>
<hr>
<br><br>

<h5 id="list-item-5">CAMPO DE EXPERINÊNCIAS "TRAÇOS, SONS, CORES E FORMAS"</h5><br>
      <table class="table table-bordered">
        <thead>
          <tr><th>OBJETIVOS DE APRENDIZAGEM E DESENVOLVIMENTO</th></tr>
        </thead>
      </table>
  <table class="table">

  <thead class="thead-light">
    <tr>
      <th scope="col">Bebês (zero a 1 ano e
      6 meses)</th>
      <th scope="col">Crianças bem pequenas (1 ano
      e 7 meses a 3 anos e 11 meses)</th>
      <th scope="col">Crianças pequenas (4 anos a
      5 anos e 11 meses)</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        (EI01TS01)
      Explorar sons produzidos
      com o próprio corpo e
      com objetos do ambiente.
      </th>
      <td>
        (EI02TS01)
      Criar sons com materiais,
      objetos e instrumentos
      musicais, para acompanhar
      diversos ritmos de música.
      </td>
      <td>
        (EI03TS01)
      Utilizar sons produzidos
      por materiais, objetos e
      instrumentos musicais
      durante brincadeiras de
      faz de conta, encenações,
      criações musicais, festas.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01TS02)
      Traçar marcas gráficas,
      em diferentes suportes,
      usando instrumentos
      riscantes e tintas.
      </th>
      <td>
        (EI02TS02)
      Utilizar materiais variados com
      possibilidades de manipulação
      (argila, massa de modelar),
      explorando cores, texturas,
      superfícies, planos, formas
      e volumes ao criar objetos
      tridimensionais.
      </td>
      <td>
        (EI03TS02)
      Expressar-se livremente
      por meio de desenho,
      pintura, colagem, dobradura
      e escultura, criando
      produções bidimensionais e
      tridimensionais.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01TS03)
      Explorar diferentes fontes
      sonoras e materiais para
      acompanhar brincadeiras
      cantadas, canções,
      músicas e melodias.
      </th>
      <td>
        (EI02TS03)
        Utilizar diferentes fontes
        sonoras disponíveis no
        ambiente em brincadeiras
        cantadas, canções, músicas e
        melodias.
      </td>
      <td>
        (EI03TS03)
      Reconhecer as qualidades do
      som (intensidade, duração,
      altura e timbre), utilizando-as
      em suas produções sonoras
      e ao ouvir músicas e sons.
      </td>
      
    </tr>
    
    
  </tbody>
</table>
<hr>
<br><br>

<h5 id="list-item-6">CAMPO DE EXPERIÊNCIAS "ESCUTA, FALA, PENSAMENTO E IMAGINAÇÃO"</h5><br>
      <table class="table table-bordered">
        <thead>
          <tr><th>OBJETIVOS DE APRENDIZAGEM E DESENVOLVIMENTO</th></tr>
        </thead>
      </table>
  <table class="table">

  <thead class="thead-light">
    <tr>
      <th scope="col">Bebês (zero a 1 ano e
      6 meses)</th>
      <th scope="col">Crianças bem pequenas (1 ano
      e 7 meses a 3 anos e 11 meses)</th>
      <th scope="col">Crianças pequenas (4 anos a
      5 anos e 11 meses)</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        (EI01EF01)
      Reconhecer quando é
      chamado por seu nome
      e reconhecer os nomes
      de pessoas com quem
      convive.
      </th>
      <td>
        (EI02EF01)
      Dialogar com crianças e
      adultos, expressando seus
      desejos, necessidades,
      sentimentos e opiniões.
      </td>
      <td>
        (EI03EF01)
      Expressar ideias, desejos
      e sentimentos sobre suas
      vivências, por meio da
      linguagem oral e escrita
      (escrita espontânea), de
      fotos, desenhos e outras
      formas de expressão.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01EF02)
      Demonstrar interesse ao
      ouvir a leitura de poemas
      e a apresentação de
      músicas.
      </th>
      <td>
        (EI02EF02)
      Identificar e criar diferentes
      sons e reconhecer rimas e
      aliterações em cantigas de
      roda e textos poéticos.
      </td>
      <td>
        (EI03EF02)
      Inventar brincadeiras
      cantadas, poemas e
      canções, criando rimas,
      aliterações e ritmos.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01EF03)
      Demonstrar interesse ao
      ouvir histórias lidas ou
      contadas, observando
      ilustrações e os
      movimentos de leitura do
      adulto-leitor (modo de
      segurar o portador e de
      virar as páginas).
      </th>
      <td>
        (EI02EF03)
      Demonstrar interesse e
      atenção ao ouvir a leitura
      de histórias e outros textos,
      diferenciando escrita de
      ilustrações, e acompanhando,
      com orientação do adulto-
      -leitor, a direção da leitura (de
      cima para baixo, da esquerda
      para a direita).
      </td>
      <td>
        (EI03EF03)
      Escolher e folhear livros,
      procurando orientar-se
      por temas e ilustrações e
      tentando identificar palavras
      conhecidas.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01EF04)
      Reconhecer elementos das
      ilustrações de histórias,
      apontando-os, a pedido
      do adulto-leitor.
      </th>
      <td>
        (EI02EF04)
      Formular e responder
      perguntas sobre fatos da
      história narrada, identificando
      cenários, personagens e
      principais acontecimentos.
      </td>
      <td>
        (EI03EF04)
      Recontar histórias ouvidas
      e planejar coletivamente
      roteiros de vídeos e de
      encenações, definindo os
      contextos, os personagens,
      a estrutura da história.
      </td>
    </tr>
    <tr>
      <th scope="row">
        (EI01EF05)
      Imitar as variações de
      entonação e gestos
      realizados pelos adultos,
      ao ler histórias e ao cantar.
      </th>
      <td>
        (EI02EF05)
      Relatar experiências e fatos
      acontecidos, histórias ouvidas,
      filmes ou peças teatrais
      assistidos etc.
      </td>
      <td>
        (EI03EF05)
      Recontar histórias ouvidas
      para produção de reconto
      escrito, tendo o professor
      como escriba.     
      </td>
    </tr>

    <tr>
      <th scope="row">
        (EI01EF06)
      Comunicar-se com
      outras pessoas usando
      movimentos, gestos,
      balbucios, fala e outras
      formas de expressão.
      </th>
      <td>
        (EI02EF06)
      Criar e contar histórias
      oralmente, com base em
      imagens ou temas sugeridos.
      </td>
      <td>
           (EI03EF06)
      Produzir suas próprias
      histórias orais e escritas
      (escrita espontânea), em
      situações com função social
      significativa.
      </td>
    </tr>
    <tr>
      <th scope="row">
        (EI01EF07)
      Conhecer e manipular
      materiais impressos e
      audiovisuais em diferentes
      portadores (livro, revista,
      gibi, jornal, cartaz, CD,
      tablet etc.).
      </th>
      <td>
        (EI02EF07)
      Manusear diferentes
      portadores textuais,
      demonstrando reconhecer
      seus usos sociais.
      </td>
      <td>
          (EI03EF07)
      Levantar hipóteses sobre
      gêneros textuais veiculados
      em portadores conhecidos,
      recorrendo a estratégias de
      observação gráfica e/ou de
      leitura.
      </td>
    </tr>
    <tr>
      <th scope="row">
        (EI01EF08)
      Participar de situações
      de escuta de textos
      em diferentes gêneros
      textuais (poemas,
      fábulas, contos, receitas,
      quadrinhos, anúncios etc.).
      </th>
      <td>
        (EI02EF08)
      Manipular textos e participar
      de situações de escuta para
      ampliar seu contato com
      diferentes gêneros textuais
      (parlendas, histórias de
      aventura, tirinhas, cartazes de
      sala, cardápios, notícias etc.).
      </td>
      <td>
        (EI03EF08)
      Selecionar livros e textos
      de gêneros conhecidos para
      a leitura de um adulto e/ou
      para sua própria leitura
      (partindo de seu repertório
      sobre esses textos, como a
      recuperação pela memória,
      pela leitura das ilustrações
      etc.).
      </td>
    </tr>
    <tr>
      <th scope="row">
        (EI01EF09)
      Conhecer e manipular
      diferentes instrumentos e
      suportes de escrita.
      </th>
      <td>
        (EI02EF09)
      Manusear diferentes
      instrumentos e suportes de
      escrita para desenhar, traçar
      letras e outros sinais gráficos.
      </td>
      <td>
          (EI03EF09)
      Levantar hipóteses em
      relação à linguagem escrita,
      realizando registros de
      palavras e textos, por meio
      de escrita espontânea. 
      </td>
    </tr>
    
  </tbody>
</table> 
<hr>
<br><br>        

<h5 id="list-item-7">CAMPO DE EXPERINÊNCIAS "ESPAÇOS, TEMPOS, QUANTIDADES, RELAÇÕES E TRANSFORMAÇÕES"</h5><br>
      <table class="table table-bordered">
        <thead>
          <tr><th>OBJETIVOS DE APRENDIZAGEM E DESENVOLVIMENTO</th></tr>
        </thead>
      </table>
  <table class="table">

  <thead class="thead-light">
    <tr>
      <th scope="col">Bebês (zero a 1 ano e
      6 meses)</th>
      <th scope="col">Crianças bem pequenas (1 ano
      e 7 meses a 3 anos e 11 meses)</th>
      <th scope="col">Crianças pequenas (4 anos a
      5 anos e 11 meses)</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        (EI01ET01)
      Explorar e descobrir as
      propriedades de objetos e
      materiais (odor, cor, sabor,
      temperatura).
      </th>
      <td>
        (EI02ET01)
      Explorar e descrever
      semelhanças e diferenças
      entre as características e
      propriedades dos objetos
      (textura, massa, tamanho).
      </td>
      <td>
        (EI03ET01)
      Estabelecer relações
      de comparação entre
      objetos, observando suas
      propriedades.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01ET02)
      Explorar relações
      de causa e efeito
      (transbordar, tingir,
      misturar, mover e remover
      etc.) na interação com o
      mundo físico.
      </th>
      <td>
        (EI02ET02)
      Observar, relatar e descrever
      incidentes do cotidiano e
      fenômenos naturais (luz solar,
      vento, chuva etc.).
      </td>
      <td>
        (EI03ET02)
      Observar e descrever
      mudanças em diferentes
      materiais, resultantes
      de ações sobre eles, em
      experimentos envolvendo
      fenômenos naturais e
      artificiais.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01ET03)
      Explorar o ambiente
      pela ação e observação,
      manipulando,
      experimentando e
      fazendo descobertas.
      </th>
      <td>
        (EI02ET03)
      Compartilhar, com outras
      crianças, situações de cuidado
      de plantas e animais nos
      espaços da instituição e fora
      dela.
      </td>
      <td>
        (EI03ET03)
      Identificar e selecionar
      fontes de informações, para
      responder a questões sobre
      a natureza, seus fenômenos,
      sua conservação.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01ET04)
      Manipular, experimentar,
      arrumar e explorar
      o espaço por meio
      de experiências de
      deslocamentos de si e dos
      objetos.
      </th>
      <td>
        (EI02ET04)
      Identificar relações espaciais
      (dentro e fora, em cima,
      embaixo, acima, abaixo, entre
      e do lado) e temporais (antes,
      durante e depois).
      </td>
      <td>
        (EI03ET04)
      Registrar observações,
      manipulações e medidas,
      usando múltiplas linguagens
      (desenho, registro por
      números ou escrita
      espontânea), em diferentes
      suportes.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01ET05)
      Manipular materiais
      diversos e variados para
      comparar as diferenças e
      semelhanças entre eles.
      </th>
      <td>
        (EI02ET05)
      Classificar objetos,
      considerando determinado
      atributo (tamanho, peso, cor,
      forma etc.).
      </td>
      <td>
        (EI03ET05)
      Classificar objetos e figuras
      de acordo com suas
      semelhanças e diferenças.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        (EI01ET06)
      Vivenciar diferentes ritmos,
      velocidades e fluxos nas
      interações e brincadeiras
      (em danças, balanços,
      escorregadores etc.).
      </th>
      <td>
        (EI02ET06)
      Utilizar conceitos básicos de
      tempo (agora, antes, durante,
      depois, ontem, hoje, amanhã,
      lento, rápido, depressa,
      devagar).
      </td>
      <td>
        (EI03ET06)
      Relatar fatos importantes
      sobre seu nascimento e
      desenvolvimento, a história
      dos seus familiares e da sua
      comunidade.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        
      </th>
      <td>
        (EI02ET07)
      Contar oralmente objetos,
      pessoas, livros etc., em
      contextos diversos.
      </td>
      <td>
        (EI03ET07)
      Relacionar números às suas
      respectivas quantidades
      e identificar o antes, o
      depois e o entre em uma
      sequência.
      </td>
      
    </tr>
    <tr>
      <th scope="row">
        
      </th>
      <td>
        (EI02ET08)
      Registrar com números a
      quantidade de crianças
      (meninas e meninos, presentes
      e ausentes) e a quantidade de
      objetos da mesma natureza
      (bonecas, bolas, livros etc.).
      </td>
      <td>
        (EI03ET08)
      Expressar medidas (peso,
      altura etc.), construindo
      gráficos básicos.
      </td>
      
    </tr>
    
    
  </tbody>
</table>
<hr>
<br><br>               
           
</div>
</div>
</div>
</div>


                



            

