<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP EXAMPLE</title>
</head>
<body>
  <h1>Fecha</h1>
  <h2><?= date('Y-m-d H:i:s') ?></h2>
  <h1>Zona horaraia</h1>
  <h2><?= date_default_timezone_get() ?></h2>
  <?php date_default_timezone_set('America/Monterrey') ?>
  <h1>Fecha en <?= date_default_timezone_get() ?></h1>
  <h2><?= date('Y-m-d H:i:s') ?></h2>
</body>
</html>