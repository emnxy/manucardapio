<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $empresaNome; ?> - Cardápio Semanal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nome+da+Fonte:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Nome da Fonte', sans-serif;
      background-color: #f7f7f7;
      color: #333;
    }

    .header {
      background-color: #ffcc00;
      padding: 20px;
      text-align: center;
    }

    .menu-item {
      margin-bottom: 20px;
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      
    }

    .footer {
      text-align: center;
      padding: 10px;
      background-color: #2ecc71;
      color: #fff;
    }
  </style>
</head>
<body>

<?php
    $empresaNome = "NutriNilMar - Empreendimento da NilMar Enterprise";
    $cardapio = array(
      "Segunda-feira" => array(
        "Prato Principal" => "Frango ao Curry com Arroz Integral",
        "Acompanhamento" => "Salada de Quinoa com Vegetais",
        "Sobremesa" => "Mousse de Maracujá"
      ),
      "Terça-feira" => array(
        "Prato Principal" => "Penne ao Pesto de Manjericão",
        "Acompanhamento" => "Brócolis Grelhados",
        "Sobremesa" => "Torta de Limão"
      ),
      "Quarta-feira" => array(
        "Prato Principal" => "Estrogonofe de Carne com Purê de Batata",
        "Acompanhamento" => "Couve-Flor Gratinada",
        "Sobremesa" => "Salada de Frutas"
      ),
      "Quinta-feira" => array(
        "Prato Principal" => "Peixe Grelhado com Molho de Alcaparras",
        "Acompanhamento" => "Arroz de Brócolis",
        "Sobremesa" => "Creme de Abacaxi"
      ),
      "Sexta-feira" => array(
        "Prato Principal" => "Risoto de Cogumelos",
        "Acompanhamento" => "Aspargos Assados",
        "Sobremesa" => "Pudim de Chocolate"
      )
    );
?>

  <div class="header">
    <h1><?php echo $empresaNome; ?> - Cardápio Semanal</h1>
    <p>Localizada em Regente Feijó</p>
  </div>

  <div class="menu">
    <?php foreach ($cardapio as $dia => $refeicoes) { ?>
      <div class="menu-item">
        <h2><?php echo $dia; ?></h2>
        <p><strong>Prato Principal:</strong> <?php echo $refeicoes["Prato Principal"]; ?></p>
        <p><strong>Acompanhamento:</strong> <?php echo $refeicoes["Acompanhamento"]; ?></p>
        <p><strong>Sobremesa:</strong> <?php echo $refeicoes["Sobremesa"]; ?></p>
      </div>
    <?php } ?>
  </div>

  <div class="footer">
    <p>&copy; <?php echo date('Y'); ?> <?php echo $empresaNome; ?></p>
  </div>

</body>
</html>
