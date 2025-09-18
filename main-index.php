<?php
    include('form.php')
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="nav-lateral">

         <div class="header">
            <img src="imagens/logo.png" alt="logo">
            <input type="button" class="button-add-event" id="abrir-form" value="+">
            
        </div>


        <div class="button-pesquisar-pessoas">  
            <img src="imagens/team-building.png" alt="group">
            <input type="button" value="Pesquisar Pessoas">
        </div>

        <div class="rodapé">
            <div class="nome-sistema">
                <h1>Scaee</h1>
            </div>
            <div class="definicao">
                <h3>Software de Cadastro e Armazenamento de Eventos Escolares</h3>
            </div>
        </div>
    </div>
    <div class="nav-search-config">
        <div class="logo-cps">
            <img src="imagens/Logo_cps.png" alt="logo cps" >
        </div>
        <div class="icons-search-config">
            <a href="#"><ion-icon name="search-outline" id="icon-sair-search"></ion-icon></a>
            <a href="#"><ion-icon name="log-out-outline" id="icon-sair-search"></ion-icon></a>
        </div>
    </div>

    <form action="verifica_form.php" method="post">
    <div class="wrapper">

        <div class="titulo">

            <p>Cadastro de eventos</p>

        </div>

        <div class="titulo-evento">

            <label for="titulo-evento">Nome do evento: </label>
            <input type="text" id="titulo-evento" name="titulo">

        </div>


        <div class="radios">

            <input type="radio" name="evento" class="radio-botao" id="close"> 

            <label for="close">Evento Interno</label>

            <input type="radio" name="evento" class="radio-botao" id="open"> 

            <label for="open">Evento Aberto</label>

            <input type="radio" name="evento" class="radio-botao" id="invite"> 

            <label for="invite">Evento com Convidado</label>

            <input type="hidden" id="color" name="color" value=""> 

        </div>

        <div class="datacao-evento">

        <div class="data-hora">

            <div class="data-box">

            <p class="data-e-hora-texto">Data inicial: </p>
            <input type="date" name="startdate" id="data-evento">

            </div>

            <div class="data-box-datas">
            
            <p class="data-e-hora-texto">Data Final: </p>
            <input type="date" name="enddate" id="data-evento">
            </div>
            
        </div>

        <div class="hora-data">
            <div class="hora-box">
            <p class="hora-e-data-texto">Hora Inicial: </p>
            <input type="time" name="startime" id="hora-evento">
            </div>
            
            <div class="hora-box-hora">
            <p class="hora-e-data-texto">Hora Final: </p>
            <input type="time" name="endtime" id="hora-evento">
            </div>

        </div>
        </div>

        <div class="locais">
            <label for="locais-eventos">Locais Disponíveis: </label>

            <select name="select" id="locais-eventos">

                <option value="quadra">Quadra</option>

                <option value="quadra">Sala de Vídeo</option>

                <option value="quadra">Auditório</option>

            </select>

        </div>

        <div class="nome-professor">

            <label for="listas-locais" class="labelProfessor">Criador: </label>

            <input list="lista" class="listas-locais" name="nome">

            <datalist id="lista">
                <option value="Marcela Campos"></option>
                <option value="Claudemir Santos Pinto"></option>
                <option value="Sérgio Salum"></option>
            </datalist>
            
        </div>

        <div class="identifica">

            <label for="listas-bases-educacionais">Base</label>

            <input list="lista-base" class="listas-bases-educacionais" name="base">

            <datalist id="lista-base">
                <option value="Técnica"></option>
                <option value="Comum"></option>
            </datalist>



            <label for="listas-ano-locais">Ano</label>

            <input list="lista-ano" class="listas-ano-locais" name="ano" >

            <datalist id="lista-ano">
                <option value="1°"></option>
                <option value="2°"></option>
                <option value="3°"></option>
            </datalist>


            <label for="listas-curso-locais">Curso</label>

            <input list="lista-curso" class="listas-curso-locais" name="curso">

            <datalist id="lista-curso">
                <option value="Nutrição"></option>
                <option value="Mecânica"></option>
                <option value="Desenvolvimento de sistemas"></option>
                <option value="Administração"></option>
                <option value="Serviços Jurídicos"></option>
            </datalist>

            <label for="listas-coord">Coord</label>

            <input list="lista-coordenador" class="listas-coordenadores" name="coord">

            <datalist id="lista-coordenador">
                <option value="Cláudia"></option>
                <option value="Sérgio"></option>
                <option value="Denise"></option>
                <option value="Eunice"></option>
                <option value="Mariluz"></option>
            </datalist>

        </div>

        <div class="desc">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="text-desc" placeholder="Descrição do evento">
            

        <div class="botoes">
            <input class="button-confirm" type="button" value="Cancelar" id="cancelar">
            <input class="button-confirm" type="submit" value="Confirmar" />
        </div>  
        </div>
        </form>

        <script src="main.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>

