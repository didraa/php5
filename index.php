<?php include('classes/cookie.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Cookie</title>
</head>

<body>
  <div class="container">
    <?php
    $cookie = new Cookie();
    $cookie->setType('песочное');
    $cookie->setType('сахарное');
    $cookie->setType('бисквитное');
    $cookie->setType('ванильное');

    $types = implode(", ", $cookie->getType());
    ?>
    <p>
      Виды печенья ням:
      <?= $types ?>
    </p>
  </div>
</body>

</html>

<?php
function showCookiesType($cookie)
{
  $types = implode(",", $cookie->getType());
  echo "<p>{$types}</p>";
}
?>