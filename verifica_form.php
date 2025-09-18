<?php
        $servername = "LocalHost";
        $username = "root";
        $password = "";
        $dbname = "DBcalendario";
       
        // Criar conexão
        $con = new mysqli($servername, $username, $password, $dbname);
 
        if (isset($_POST['titulo'])) {

            $titulo = $_POST['titulo'];
            $tipo = $_POST['evento'];
            $startdate = date('Y-m-d', strtotime($_POST['startdate']));
            $enddate = date('Y-m-d', strtotime($_POST['enddate']));
            $startime = $_POST['startime'];
            $endtime = $_POST['endtime'];
            $local1 = $_POST['select'];
            $nome = $_POST['nome'];
            $base = $_POST['base'];
            $ano = $_POST['ano'];
            $curso = $_POST['curso'];
            $coord = $_POST['coord'];
            $color = $_POST['color'];
            $info_event = $_POST['descricao'];
        
            // Verifique se todos os campos obrigatórios estão preenchidos
            if (empty($titulo) || empty($tipo) || empty($startdate) || empty($enddate) || empty($startime) || empty($endtime) || empty($local1) || empty($nome) || empty($base) || empty($ano) || empty($curso) || empty($coord) || empty($color) || empty($info_event)) {
                echo "<script>window.alert('Informe todos os campos obrigatórios')</script>";
                echo "<script>window.location.href='http://localhost/TCC_ETEC/main-index.php'</script>";
            } else {
                $sql = "INSERT INTO usuarios (titulo, tipo, startdate, enddate, startime, endtime, local1, nome, base, ano, curso, coord, color, info_event) VALUES ('$titulo', '$tipo', '$startdate', '$enddate', '$startime', '$endtime', '$local1', '$nome', '$base', '$ano', '$curso', '$coord', '$color', '$info_event')";
        
                if ($con->query($sql) === TRUE) {
                    echo "<script>window.alert('Sucesso ao Inserir')</script>";
                    echo "<script>window.location.href='http://localhost/TCC_ETEC/main-index.php'</script>";
                } else {
                    echo "<script>window.alert('Erro ao inserir')</script>";
                    echo "<script>window.location.href='http://localhost/TCC_ETEC/main-index.php'</script>";
                }
            }
        }
        
    ?>    