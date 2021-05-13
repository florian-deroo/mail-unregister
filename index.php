<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="scss/styles.scss"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mail Unregister</title>
</head>

<body>
  <?php if($_GET['status']=='success') { ?>
    <div class="wrapper">
      Mail supprimé
      <a href="http://178.170.9.140/index.php">Retour</a>
    </div>
  <?php } else if ($_GET['status']=='nomail') { ?>
    <div class="wrapper">
      Aucun mail trouvé
      <a href="http://178.170.9.140/index.php">Retour</a>
    </div>
  <?php } else { ?>
    <div class="wrapper">
      Entrez votre email
      <form action="check.php" method="post">
        <input type="email" name="email" size="30" required>
      </form>
    </div>
  <?php } ?>

</body>
</html>
