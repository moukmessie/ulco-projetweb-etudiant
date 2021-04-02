<?php

namespace view;

class Template {
  static function render($params) {
?>

<!DOCTYPE html>
<html>

<head>

  <!-- Inclusion des méta-données -->
  <?php include "commons/head.php" ?>

</head>

<body>

  <!-- Inclusion du nav -->
  <?php include "commons/nav.php"?>

  <!-- Inclusion du module à afficher -->
  <?php include "modules/" . $params["module"]; ?>

  <!--Inclusion du footer  -->
    <?php include "commons/footer.php"?>

</body>

</html>

<?php
  }
}