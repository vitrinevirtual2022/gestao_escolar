<?php
require_once("../../conexao.php");
@session_start();
$aluno = @$_POST['aluno'];
$cpf = @$_SESSION['cpf_usuario'];


$sqlProfessor = "
            select
                p.*
            from
                professores p
            inner join usuarios u on
                p.cpf = u.cpf
            where u.cpf = '$cpf'
            ";

$query = $pdo->query($sqlProfessor);
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$id_professor = $res[0]['id'];

$sql = "select
            map2.*,
            a.nome as nomeAluno,
            p.nome as nomeProfessor
        from
            mensagens_aluno_professor map2
        inner join alunos a on
            map2.aluno = a.id
        inner join professores p on
            p.id = map2.professor
        where a.id = '$aluno'
        and p.id = '$id_professor'
        order by map2.id desc       
        ";

$query = $pdo->query($sql);
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$response = ' ';
foreach ($res as $msg) {
    $inOrOut = ($msg['id_send'] == $id_professor) ? 'in' : 'out';
    $msg['nome'] = ($inOrOut == "out") ? $msg["nomeAluno"] : $msg["nomeProfessor"];
    $data = new DateTime($msg['data']);
    $data = $data->format('d/m/Y H:i:s');
    $response = $response . '
        <div class="row">
            <div class="card">
                <div class="card-body height3">
                    <ul class="chat-list">
                        <li class="' . $inOrOut . '">
                            <div class="chat-img">
                            </div>
                            <div class="chat-body">
                                <div class="chat-message">
                                    <small> ' . $data . ' </small>
                                    <h5>' . $msg['nome'] . ' </h5 >
                                    <p > ' . $msg['conteudo'] . ' </p >
                                </div >
                            </div >
                        </li >
                    </ul >
                </div >
            </div >
        </div >
    ';
}
echo $response;
?>


