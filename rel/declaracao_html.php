<?php 
require_once("../conexao.php"); 
@session_start();

$id = $_GET['id'];

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data_hoje = strtoupper(utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))));


//DADOS DA MATRÍCULA
$query_orc = $pdo->query("SELECT * FROM matriculas where id = '$id' ");
$res_orc = $query_orc->fetchAll(PDO::FETCH_ASSOC);
$turma = $res_orc[0]['turma'];
$aluno = $res_orc[0]['aluno'];
$data = $res_orc[0]['data'];


$query_r = $pdo->query("SELECT * FROM alunos where id = '$aluno' ");
$res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
$nome_aluno = $res_r[0]['nome'];
$cpf_aluno = $res_r[0]['cpf'];
$responsavel = $res_r[0]['responsavel'];
$endereco_aluno = $res_r[0]['endereco'];
$telefone_aluno = $res_r[0]['telefone'];



$query_rg = $pdo->query("SELECT * FROM turmas where id = '$turma' ");
$res_rg = $query_rg->fetchAll(PDO::FETCH_ASSOC);
$serie = $res_rg[0]['serie'];
$escola = $res_rg[0]['nome_escola'];
$horario = $res_rg[0]['horario'];
$ano_letivo = $res_rg[0]['ano'];
$data_inicio = $res_rg[0]['data_inicio'];
$data_final = $res_rg[0]['data_final'];
$valor = $res_rg[0]['valor_mensalidade'];



//RECUPERAR O TOTAL DE MESES ENTRE DATAS
$d1 = new DateTime($data_inicio);
$d2 = new DateTime($data_final);
$intervalo = $d1->diff( $d2 );
$anos = $intervalo->y;
$meses = $intervalo->m + ($anos * 12);



$data_inicioF = implode('/', array_reverse(explode('-', $data_inicio)));
$data_finalF = implode('/', array_reverse(explode('-', $data_final)));
$valor_total = $valor * $meses;
$valor_mensalidadeF = number_format($valor, 2, ',', '.');
$valor_totalF = number_format($valor_total, 2, ',', '.');

//RECUPERA O ANO ESCOLAR DO ALUNO
$query_r = $pdo->query("SELECT * FROM serie where id = '$serie' ");
$res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
$serie = $res_r[0]['serie_ano'];

//RECUPERA O NOME DA ESCOLA 
$query_r = $pdo->query("SELECT * FROM escolas where id = '$escola' ");
$res_r = $query_r->fetchAll(PDO::FETCH_ASSOC);
$escola = $res_r[0]['nome_school'];
$nome_tel = $res_r[0]['telefone'];
$endereco = $res_r[0]['endereco'];
$codigo = $res_r[0]['codigo'];
$email = $res_r[0]['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Declaração de Matrícula</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>

		@page {
			margin: 0px;

		}


		.footer {
			margin-top:20px;
			width:100%;
			background-color: #ebebeb;
			padding:10px;
		}

		.cabecalho {    
			background-color: #ebebeb;
			padding:10px;
			margin-bottom:30px;
			width:100%;
			height:100px;
		}

		.titulo{
			margin:0;
			font-size:28px;
			font-family:Arial, Helvetica, sans-serif;
			color:#6e6d6d;

		}

		.subtitulo{
			margin:0;
			font-size:17px;
			font-family:Arial, Helvetica, sans-serif;
		}

		.areaTotais{
			border : 0.5px solid #bcbcbc;
			padding: 15px;
			border-radius: 5px;
			margin-right:25px;
			margin-left:25px;
			position:absolute;
			right:20;
		}

		.areaTotal{
			border : 0.5px solid #bcbcbc;
			padding: 15px;
			border-radius: 5px;
			margin-right:25px;
			margin-left:25px;
			background-color: #f9f9f9;
			margin-top:2px;
		}

		.pgto{
			margin:1px;
		}

		.fonte13{
			font-size:13px;
		}

		.esquerda{
			display:inline;
			width:50%;
			float:left;
		}

		.direita{
			display:inline;
			width:50%;
			float:right;
		}

		.table{
			padding:15px;
			font-family:Verdana, sans-serif;
			margin-top:20px;
		}

		.texto-tabela{
			font-size:12px;
		}


		.esquerda_float{

			margin-bottom:10px;
			float:left;
			display:inline;
		}


		.titulos{
			margin-top:10px;
		}

		.image{
			margin-top:-10px;
		}

		.margem-direita{
			margin-right: 80px;
		}

		hr{
			margin:8px;
			padding:1px;
		}

		.container{
			padding-left:50px;
			padding-right:50px;
		}

		
		p{
			font-size: 20px;
			
		}

		div.caixa {
			 width:30px;
			 height:30px;
			 border: 2px solid; /* As 4 bordas sólidas com 25px de espessura */
			 display: inline-flex;
			 margin-right: 15px;
			 
		 }
		 span{
		 	font-size: 18px;
		 	text-align: justify;

		 }
		 
 		 		


	</style>
		
		
		 

</head>
<body>


	<div class="cabecalho">
		
			<div class="row titulos">
				<div class="col-sm-2 esquerda_float image">	
					<img src="../img/logov2.png" width="170px">
				</div>
				<div class="col-sm-10 esquerda_float">	
					<h2 class="titulo"><b>Unidade Escolar: </b><?php echo ($escola) ?></h2>
					<h6 class="subtitulo">Endereço: <?php echo $endereco . ' - Tel: '.$nome_tel . ' - Email: '.$email  ?></h6>

				</div>
			</div>
		

	</div>

	<div class="container">

		<hr>


		<br><br>
		<p class="titulo" align="center"><b>DECLARAÇÃO DE ESCOLARIDADE</b></p>
		<br><br><br>

<form>
	
	<div>
		<p>DECLARO, para os devidos fins que: <b><?php echo $nome_aluno ?></b>, inscrito no CPF sob o nº <?php echo $cpf_aluno ?>, residente e domiciliado na <?php echo $endereco_aluno ?>.</p>
	</div><br><br>
	
	<div class="caixa">
		
	</div>
	<span>É aluno(a) regularmente matriculado no <?php echo $serie ?> do Ensino Fundamental, nesta Unidade de Ensino, no período das <?php echo $horario ?> do corrente ano.</span>
	<br><br>

	<div class="caixa">
		
	</div>
	<span>Solicitou transferência nesta data e seu Histórico Escolar seré entregue no prazo de 60 (sessenta) dias, tendo direito a matricular-se no <?php echo $serie ?> do Ensino Fundamental do corrente ano.</span>
	<br><br>

	<div class="caixa">
		
	</div>
	<span>Concluiu o <?php echo $serie ?> do Ensino Fundamental, no ano letivo de <?php echo $ano_letivo ?>, e o Histórico Escolar do(a) referido(a) aluno(a) será entregue no prazo de 30 (trinta) dias.</span>
	<br><br>

	<div class="caixa">
		
	</div>
	<span>Solicitou uma vaga no <?php echo $serie ?> do Ensino Fundamental, que deverá ser preenchida no prazo de 02 (dois) dias.</span>
	<br><br>


</form><br><br>

<div>
<p>Por ser verdade, firmo a presente.</p>
</div>


<br><br>
<p align="center">
<?php echo strtoupper($cidade_escola) .', '. $data_hoje .'.' ?>
</p>

<br><br><br><br>
<div class="row">
	<div class="col-md-6">
	<p align="center">
	_____________________________________
	<br>
	Secretário(a)
	</p>
	</div>

	<div class="col-md-6">
	<p align="center">
	_____________________________________
	<br>
	Diretor(a)
	</p>
	</div>
</div>


<br><br><br>
		
</div>

	<div class="footer">
		<p style="font-size:14px" align="center"><?php echo $nome_instituicao ?></p>
		<p style="font-size:12px" align="center"><?php echo $nome_secretaria ?></p>
	</div>




</body>
</html>
