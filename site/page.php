<?php

$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'cadastro/cadastro.php';
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Máquina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body { 
            font: 14px sans-serif; 
            text-align: center; 
        }
    </style>
</head>
<body>
    <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
  }
  
  .chart-container {
      width: 50%;
      margin: 0 auto;
  }
  
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-image: url("/contato/t.jpg");
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d;
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff;
    color: #4F4F4F;
  }
  .bg-4 { 
    background-color: #4F4F4F;
    color: #fff;
  }
  .container-fluid {
    padding-top: 0px;
    padding-bottom: 0px;
  }
  .navbar {
    padding-top: 3px;
    padding-bottom: 3px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 11px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  
  .thumbnail {
    display: block;
    padding-bottom: 100%;
    position: relative;
  }
  .thumbnail > .img-responsive {
    max-width: 100%;
    max-height: 100%;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
  }
  .column {
    float: center;
  }
  .container {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* Define 4 colunas por linha */
    gap: 10px;
  }
  .item {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 200px;
    flex-grow: 1;
  }
  .grid-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* Define 4 colunas por linha */
    grid-gap: 10px;
    background-color: #2196F3;
    padding: 10px;
  }
  .grid-container > div {
    background-color: rgba(255, 255, 255, 0.8);
    text-align: center;
    padding: 20px 0;
    font-size: 30px;
  }
  .btn-xl {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 10px;
    width:15%;
  }
  </style>
</head>
<body>
    <script src='https://cdn.jsdelivr.net/npm/qrcode@1.4.4/build/qrcode.min.js'></script>
    <a href="meusequipamentos.php" class="btn btn-warning btn-xl">Meus equipamentos</a>
    <a href="https://carlitoslocacoes.com/site/welcome.php" class="btn btn-primary btn-xl">Início</a>
    <script language='JavaScript'>
        function only_number() {
            if(event.keyCode < 48 || event.keyCode > 57)
                event.returnValue = false;
        }
    </script>
    <div class="page-header">
        <h1>Olá, Seja Bem Vindo.</h1>
        <form method="GET" action="page.php">
            <label for="id">Busque por ID:</label>
            <input type="text" id="id" name="id" required>
            <button type="submit">Buscar</button>
        </form>
    </div>
    <div class="container">
    <?php
    $cx = mysqli_connect("127.0.0.1", "username", "password");
    $db = mysqli_select_db($cx, "dbname");
    $eq_user = $_SESSION["username"];
    $sql = mysqli_query($cx, "SELECT * FROM respostas WHERE cv = '$id' ORDER BY id DESC;") or die(mysqli_error($cx));
    $sql3 = mysqli_query($cx, "SELECT qrcodelink FROM respostas WHERE id ='$id'") or die(mysqli_error($cx));
    $sql2 = mysqli_query($cx, "SELECT SUM(preco_total) AS tyus FROM respostas") or die(mysqli_error($cx));
    $row = $sql2->fetch_assoc();
    $row2 = $sql3->fetch_assoc();
    $qrcodelink2 = $row2['qrcodelink'];
    
    while($aux = mysqli_fetch_assoc($sql)) { 
        $sql9 = mysqli_query($cx, "SELECT eq_user FROM respostas WHERE id = " . $aux['id']) or die(mysqli_error($cx));
        
        while ($row9 = mysqli_fetch_assoc($sql9)) {
            echo '<div class="item">';
            echo "<a href='msg.php?id=".$aux['id']."'><h3>ID de: </h3>" . $aux["id"] . "</a><br>";
            echo "".$aux["tipo"]."<br><br>";
            echo "<a href='msg.php?id=" . $aux['cv'] . "'>Responder em: " . $aux['cv'] . " | " . $row9['eq_user'] . "</a><br>";
            echo '</div>';
        }
    }
    ?>
    </div>
    <div class="container-fluid bg-3">
        <canvas id="grafico1"></canvas>
    </div>
    <?php
    include 'juggergym.php';

    use JuggerGym\minhaFuncao;
    use JuggerGym\variavelJuggerGym;

    minhaFuncao();
    echo $variavelJuggerGym;
    ?>
</body>
</html>
