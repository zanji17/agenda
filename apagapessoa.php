<?php
    include("conecta.php");
    $id = $_GET['id'];
    $pessoa = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='$id'");
    while($expessoa = mysqli_fetch_array($pessoa)){
        $tipo = $expessoa['tipo'];
        $nome = $expessoa['nome'];
        $endereco = $expessoa['endereco'];
        $cidade = $expessoa['cidade'];
        $estado = $expessoa['estado'];
        $celular = $expessoa['celular'];
        $email = $expessoa['email'];
        $datanascimento = $expessoa['datanascimento'];
        $profissao = $expessoa['profissao'];
        $usuario = $_SESSION["User"];
        $data = date('Y-m-d');
        $expessoa2 = mysqli_query($conn,"INSERT INTO expessoa(tipo,nome,endereco,cidade,estado,celular,email,datanascimento,profissao,usuario,data) VALUE($tipo,$nome,$endereco,$cidade,$estado,$celular,$email,$datanascimento,$profissao,$usuario,$data) WHERE id='$id'");
	}
    $sql = "DELETE FROM pessoa WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Pessoa apagada com sucesso!');
        window.location.href = 'pessoa.php';
        </script>";
    }
    else
    {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Pessoa não foi apagada com sucesso!');
        window.location.href = 'pessoa.php';
        </script>";
    }
    mysqli_close($conn);
?>