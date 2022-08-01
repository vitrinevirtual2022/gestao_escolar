<?php
@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'coordenador'){
	echo "<script language='javascript'> window.location='../index.php' </script>";
}

require_once("../conexao.php"); 


//totais dos cards
$hoje = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$dataInicioMes = $ano_atual."-".$mes_atual."-01";



$query = $pdo->query("SELECT * FROM escolas");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalEscola = @count($res);

$query = $pdo->query("SELECT * FROM professores");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalProf = @count($res);


?>


<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Professores Cadastrados</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalProf ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-info"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Escolas Cadastradas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalEscola ?> </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-graduation-cap fa-2x text-success"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

		

</div>


