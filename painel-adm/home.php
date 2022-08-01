<?php
@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin'){
	echo "<script language='javascript'> window.location='../index.php' </script>";
}

require_once("../conexao.php"); 


//totais dos cards
$hoje = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$dataInicioMes = $ano_atual."-".$mes_atual."-01";




$query = $pdo->query("SELECT * FROM alunos");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$alunosCadastrados = @count($res);

$query = $pdo->query("SELECT * FROM professores");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalProf = @count($res);

$query = $pdo->query("SELECT * FROM disciplinas");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalDisc = @count($res);

$query = $pdo->query("SELECT * FROM escolas");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalEscolas = @count($res);

$query = $pdo->query("SELECT * FROM coordenadores");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalCoord = @count($res);




?>


<div class="row">
	<!-- Earnings (Monthly) Card Example -->

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-secondary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total de Escolas Cadastradas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalEscolas ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-graduation-cap fa-2x text-secondary"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Alunos Cadastrados</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$alunosCadastrados ?></div>
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
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Professores Cadastrados</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalProf ?> </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-success"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Coordenadores Cadastrados</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalCoord ?> </div>
					</div>
					<div class="col-auto" align="center">
						<i class="fas fa-users fa-2x text-warning"></i>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Disciplinas Cadastradas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalDisc ?> </div>
					</div>
					<div class="col-auto" align="center">
						<i class="fas fa-clipboard-list fa-2x text-primary"></i>

					</div>
				</div>
			</div>
		</div>
	</div>

	

</div>