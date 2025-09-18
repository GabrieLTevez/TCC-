<?php
if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBSCAEE";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT tipo FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tipo = $row["tipo"];

        if ($tipo == "Gestão") {
            echo "<script>window.location.href = 'http://localhost/login%20foda/acessoGest%C3%A3o.html'</script>";
        } elseif ($tipo == "Professor") {
            echo "<script>window.location.href = 'http://localhost/TCC_ETEC/menu_inicial/main-index.php#'</script>";
        } else {
            echo "<script>window.location.href = 'http://localhost/login%20foda/acessoRecp%C3%A7%C3%A3o.html'</script>";
        }
        exit();
    } else {
        // Email ou senha incorretos
        echo "<script>alert('Email ou senha incorretos.');
              window.location.href = 'http://localhost/TCC_ETEC/login.php';</script>";
        exit();
    }

    $conn->close();
}
?>
