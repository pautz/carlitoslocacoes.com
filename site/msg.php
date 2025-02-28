<?php

$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'cadastro/cadastro.php';
}
?>
<?php
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT id, cv FROM respostas";
$result = $conn->query($sql);

$id_values = array();
$cv_values = array();
$row_count = 0;
$current_id_count = 0;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id_values[] = $row["id"];
        $cv_values[] = $row["cv"];
        $row_count++;
        if ($row["cv"] == $id) {
            $current_id_count++;
        }
    }
} else {
    echo "0 resultados";
}
$conn->close();

$totalCVs = $row_count;
$currentIdCVs = $current_id_count;
$otherCVs = $totalCVs - $currentIdCVs;

$currentIdPercentage = ($totalCVs > 0) ? round(($currentIdCVs / $totalCVs) * 100, 2) : 0;
$otherPercentage = ($totalCVs > 0) ? round(($otherCVs / $totalCVs) * 100, 2) : 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carlito's Locações</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style>
        .btn-xl {
    padding: 10px 20px;
    font-size: 14px;
    border-radius: 10px;
    width:15%;
}
    </style>
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
    background-image: url("/contato/t.jpg"); /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #4F4F4F;
  }
  .bg-4 { 
    background-color: #4F4F4F; /* Black Gray */
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
 @import url("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css");

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
    grid-template-columns: repeat(3, 1fr); /* 3 colunas de tamanhos iguais */
    gap: 10px; /* Espaço entre as colunas */
}

.item {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 200px; /* Define uma altura mínima */
    flex-grow: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
{
   margin: 0;
   padding: 0;
   -moz-box-sizing: border-box;
   -webkit-box-sizing: border-box;
   box-sizing: border-box;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
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
	    <div class="page-header">
    <h1>Olá, Seja Bem Vindo.</h1>
     <form method="GET" action="msg.php">
    <label for="id">Busque por ID:</label>
    <input type="text" id="id" name="id" required>
    <button type="submit">Buscar</button>
</form></div>
<div class="container-fluid bg-3">  
    <center>
        <form method="post" ACTION="msg.php?id=<?php echo $_GET['id']; ?>">
    <br><p>Enivar mensagem para: <?php echo $id; ?></p>
    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">
    <FONT FACE="Times New Roman" SIZE="5" COLOR="black">Mensagem:</FONT>
    <INPUT TYPE="text" NAME="tipo" PLACEHOLDER="Digite sua mensagem.">
    <input type="hidden" name="cv" value="<?php echo $id; ?>" readonly placeholder="Informe o n&uacute;mero de id.">
    <FONT FACE="Times New Roman" SIZE="5" COLOR="black"><input type="hidden" name="eq_user" required placeholder="Nome do cadastrante" value="Nome do cadastrante" id="input-hidden"></FONT>
    <input type="hidden" name="id_cadastrante" value="<?php echo $_GET['id']; ?>">
    <INPUT TYPE="submit" class="btn btn-success btn-xl" VALUE="Enviar">
    </center>
</div>
</form>
<script>
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    document.getElementById("locationStatus").innerHTML = "Geolocalização não é suportada neste navegador.";
  }
}

function showPosition(position) {
  document.getElementById("latitude").value = position.coords.latitude;
  document.getElementById("longitude").value = position.coords.longitude;
  document.getElementById("locationStatus").innerHTML = "Localização obtida com sucesso!";
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      document.getElementById("locationStatus").innerHTML = "Usuário negou a solicitação de Geolocalização.";
      break;
    case error.POSITION_UNAVAILABLE:
      document.getElementById("locationStatus").innerHTML = "Informações de localização não estão disponíveis.";
      break;
    case error.TIMEOUT:
      document.getElementById("locationStatus").innerHTML = "A solicitação para obter a localização expirou.";
      break;
    case error.UNKNOWN_ERROR:
      document.getElementById("locationStatus").innerHTML = "Um erro desconhecido ocorreu.";
      break;
  }
}

getLocation();
</script>
<div class="container-fluid bg-3 chart-container">
    <canvas id="grafico"></canvas>
</div>

<!-- Exibindo o número de linhas e porcentagens -->
<div class="container-fluid bg-3">
    <p>Quantidade de mensagens: <?php echo $current_id_count; ?></p>
    <p>Porcentagem de mensagens: <?php echo $currentIdPercentage; ?>%</p>
    <p>Quantidade total de mensagens: <?php echo $row_count; ?></p>
    <p>Porcentagem total de mensagens: <?php echo $otherPercentage; ?>%</p>
</div>

<script>
    var totalCVs = <?php echo $row_count; ?>;
    var currentIdCVs = <?php echo $current_id_count; ?>;
    var otherCVs = totalCVs - currentIdCVs;

    var ctx = document.getElementById('grafico').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['ID Atual', 'Outros IDs'],
            datasets: [{
                label: 'Distribuição de CVs',
                data: [currentIdCVs, otherCVs],
                backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(192, 75, 75, 0.2)'],
                borderColor: ['rgba(75, 192, 192, 1)', 'rgba(192, 75, 75, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += context.raw;
                            label += ' (' + Math.round(context.raw / totalCVs * 100) + '%)';
                            return label;
                        }
                    }
                }
            }
        }
    });
</script>
<?php
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT id, cv FROM respostas WHERE cv = '$id'";
$result = $conn->query($sql);

$id_values = array();
$cv_values = array();
$row_count = 0;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id_values[] = $row["id"];
        $cv_values[] = $row["cv"];
        $row_count++;
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
    
    <script src='https://cdn.jsdelivr.net/npm/qrcode@1.4.4/build/qrcode.min.js'></script>

    <script language='JavaScript'>

  function only_number(){

    if(event.keyCode<48 || event.keyCode>57)

      event.returnValue=false;

  }

</script>
	

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="container-fluid bg-3">
        <canvas id="grafico1"></canvas>
    </div>

    <!-- Exibindo o número de linhas -->
        <script>
        var idValues = <?php echo json_encode($id_values); ?>;
        var cvValues = <?php echo json_encode($cv_values); ?>;
        var rowCount = <?php echo $row_count; ?>;

        var ctx = document.getElementById('grafico1').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: idValues,
                datasets: [{
                    label: 'Valores de CV para os IDs',
                    data: cvValues.map(() => 1), // Use 1 as a placeholder for each value
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'CV'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Quantidade'
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1,
                            callback: function(value) {
                                return Number(value).toFixed(0);
                            }
                        }
                    }
                }
            }
        });
    </script>

</body>
</html>
