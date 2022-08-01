<?php 
$pag = "bnccefi";
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
              <a class="list-group-item list-group-item-action" href="#list-item-2">...</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">Lingua Portuguesa 1º ao 5º Ano</a>
              <a class="list-group-item list-group-item-action" href="#list-item-4">...</a>
              <a class="list-group-item list-group-item-action" href="#list-item-5">...</a>
              <a class="list-group-item list-group-item-action" href="#list-item-6">...</a>
              <a class="list-group-item list-group-item-action" href="#list-item-7">...</a>
              
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

        <h4 id="list-item-3">LINGUA PORTUGUESA 1º AO 5º ANO</h4>
        
        

        <table class="table">
          <tr><td colspan="3">TODOS OS CAMPOS DE ATUAÇÃO</td></tr>
            <thead class="thead-light">
              <tr>
                <th scope="col">PRÁTICAS DE LINGUAGEM</th>
                <th scope="col">OBJETOS DE CONHECIMENTO</th>
                <th scope="col">HABILIDADES</th>
                
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td rowspan="3">Leitura/escuta
                (compartilhada e autônoma)
                </td>
              </tr>
              <tr>
                <td>Reconstrução das condições de produção e
                recepção de textos
                </td>
                <td>(EF15LP01) Identificar a função social de textos que circulam em campos da vida social dos quais
                participa cotidianamente (a casa, a rua, a comunidade, a escola) e nas mídias impressa, de massa
                e digital, reconhecendo para que foram produzidos, onde circulam, quem os produziu e a quem
                se destinam.
                </td>
              </tr>

                <tr>
                  <td>Estratégia de leitura</td>
                  <td>(EF15LP02) Estabelecer expectativas em relação ao texto que vai ler (pressuposições
                antecipadoras dos sentidos, da forma e da função social do texto), apoiando-se em seus
                conhecimentos prévios sobre as condições de produção e recepção desse texto, o gênero, o
                suporte e o universo temático, bem como sobre saliências textuais, recursos gráficos, imagens,
                dados da própria obra (índice, prefácio etc.), confirmando antecipações e inferências realizadas
                antes e durante a leitura de textos, checando a adequação das hipóteses realizadas.
                (EF15LP03) Localizar informações explícitas em textos.
                (EF15LP04) Identificar o efeito de sentido produzido pelo uso de recursos expressivos
                gráfico-visuais em textos multissemióticos.
                  </td>
                </tr>

              <tr>
                <td rowspan="5">Produção de textos
                (escrita compartilhada e autônoma)
                </td>
              </tr>
              <tr>
                <td>Planejamento de texto
                </td>
                <td>(EF15LP05) Planejar, com a ajuda do professor, o texto que será produzido, considerando a
                situação comunicativa, os interlocutores (quem escreve/para quem escreve); a finalidade ou
                o propósito (escrever para quê); a circulação (onde o texto vai circular); o suporte (qual é o
                portador do texto); a linguagem, organização e forma do texto e seu tema, pesquisando em
                meios impressos ou digitais, sempre que for preciso, informações necessárias à produção do
                texto, organizando em tópicos os dados e as fontes pesquisadas.
                </td>
              </tr>

              <tr>
                  <td>Revisão de textos</td>
                  <td>(EF15LP06) Reler e revisar o texto produzido com a ajuda do professor e a colaboração dos
                colegas, para corrigi-lo e aprimorá-lo, fazendo cortes, acréscimos, reformulações, correções de
                ortografia e pontuação.
                  </td>
              </tr>
              <tr><td>Edição de textos</td>
                <td>(EF15LP07) Editar a versão final do texto, em colaboração com os colegas e com a ajuda do
                professor, ilustrando, quando for o caso, em suporte adequado, manual ou digital</td>
              </tr>
              <tr>
                <td>Utilização de tecnologia digital</td>
                <td>(EF15LP08) Utilizar software, inclusive programas de edição de texto, para editar e publicar os
                textos produzidos, explorando os recursos multissemióticos disponíveis.</td>
              </tr>
              <tr>
                <td rowspan="6">Oralidade
                </td>
              </tr>
              <tr>
                <td>Oralidade pública/Intercâmbio conversacional em
                sala de aula
                </td>
                <td>(EF15LP09) Expressar-se em situações de intercâmbio oral com clareza, preocupando-se em ser
                compreendido pelo interlocutor e usando a palavra com tom de voz audível, boa articulação e
                ritmo adequado.
                </td>
              </tr>

              <tr>
                  <td>Escuta atenta</td>
                  <td>(EF15LP10) Escutar, com atenção, falas de professores e colegas, formulando perguntas
                  pertinentes ao tema e solicitando esclarecimentos sempre que necessário.
                  </td>
              </tr>
              <tr><td>Características da conversação espontânea</td>
                <td>(EF15LP11) Reconhecer características da conversação espontânea presencial, respeitando
                  os turnos de fala, selecionando e utilizando, durante a conversação, formas de tratamento
                  adequadas, de acordo com a situação e a posição do interlocutor.</td>
              </tr>
              <tr>
                <td>Aspectos não linguísticos (paralinguísticos) no ato
                  da fala</td>
                <td>(EF15LP12) Atribuir significado a aspectos não linguísticos (paralinguísticos) observados na fala,
                  como direção do olhar, riso, gestos, movimentos da cabeça (de concordância ou discordância),
                  expressão corporal, tom de voz.</td>
              </tr>
              <tr><td>Relato oral/Registro formal e informal</td>
                <td>(EF15LP13) Identificar finalidades da interação oral em diferentes contextos comunicativos
                (solicitar informações, apresentar opiniões, informar, relatar experiências etc.).</td>
              </tr>
                
             
             

          
            </tbody>
      </table>
   <hr><br><br>

   <h4 id="list-item-3">LINGUA PORTUGUESA 1º AO 5º ANO</h4>
   <table class="table">
          <tr><td colspan="3">CAMPO DA VIDA COTIDIANA – Campo de atuação relativo à participação em situações de leitura,
          próprias de atividades vivenciadas cotidianamente por crianças, adolescentes, jovens e adultos, no
          espaço doméstico e familiar, escolar, cultural e profissional. Alguns gêneros textuais deste campo:
          agendas, listas, bilhetes, recados, avisos, convites, cartas, cardápios, diários, receitas, regras de
          jogos e brincadeiras.</td></tr>
            <thead class="thead-light">
              <tr>
                <th scope="col">PRÁTICAS DE LINGUAGEM</th>
                <th scope="col">OBJETOS DE CONHECIMENTO</th>
                <th scope="col">HABILIDADES</th>
                
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>Leitura/escuta
                (compartilhada e autônoma)
                </td>
             
              <td>Leitura de imagens em narrativas visuais</td>
                <td>(EF15LP14) Construir o sentido de histórias em quadrinhos e tirinhas, relacionando imagens e
                palavras e interpretando recursos gráficos (tipos de balões, de letras, onomatopeias).</td>
              </tr>
              <tr><td colspan="3">CAMPO ARTÍSTICO-LITERÁRIO – Campo de atuação relativo à participação em situações de
                leitura, fruição e produção de textos literários e artísticos, representativos da diversidade cultural
                e linguística, que favoreçam experiências estéticas. Alguns gêneros deste campo: lendas, mitos,
                fábulas, contos, crônicas, canção, poemas, poemas visuais, cordéis, quadrinhos, tirinhas, charge/
                cartum, dentre outros.</td>
              </tr>
              <tr><td rowspan="5">Leitura/escuta
                (compartilhada e autônoma)</td>
              </tr>
              <tr><td>Formação do leitor literário</td>
                  <td>(EF15LP15) Reconhecer que os textos literários fazem parte do mundo do imaginário e
                  apresentam uma dimensão lúdica, de encantamento, valorizando-os, em sua diversidade cultural,
                  como patrimônio artístico da humanidade.</td>
              </tr>
              <tr><td>Leitura colaborativa e autônoma</td>
                <td>(EF15LP16) Ler e compreender, em colaboração com os colegas e com a ajuda do professor e,
                mais tarde, de maneira autônoma, textos narrativos de maior porte como contos (populares, de
                fadas, acumulativos, de assombração etc.) e crônicas.</td>
              </tr>
              <tr><td>Apreciação estética/Estilo</td>
                <td>(EF15LP17) Apreciar poemas visuais e concretos, observando efeitos de sentido criados pelo
                formato do texto na página, distribuição e diagramação das letras, pelas ilustrações e por outros
                efeitos visuais.</td>
              </tr>
              <tr><td>Formação do leitor literário/Leitura
                multissemiótica</td>
                <td>(EF15LP18) Relacionar texto com ilustrações e outros recursos gráficos.</td>
              </tr>
              <tr><td>Oralidade</td>
                <td>Contagem de histórias</td>
                <td>(EF15LP19) Recontar oralmente, com e sem apoio de imagem, textos literários lidos pelo
                professor.</td>
              </tr>

            </tbody>
    </table>               
 <hr>
<br><br>

<h4 id="list-item-3">LINGUA PORTUGUESA 1º E 2º ANOS</h4>

 <table class="table">
          <tr><td colspan="3">TODOS OS CAMPOS DE ATUAÇÃO</td></tr>
            <thead class="thead-light">
              <tr>
                <th scope="col">PRÁTICAS DE LINGUAGEM</th>
                <th scope="col">OBJETOS DE CONHECIMENTO</th>
                <th scope="col" colspan="3">HABILIDADES</th>
                <th scope="col">1º ANO</th>
                <th scope="col">2º ANO</th>
                
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>Leitura/escuta
                (compartilhada e autônoma)
                </td>
                </tr>
            </tbody>
  </table>              
           
</div>
</div>
</div>
</div>


                



            

