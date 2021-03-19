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

  <!-- TODO: Inclure le nav ici -->

  <!-- Inclusion du module à afficher -->
  <?php include "modules/" . $params["module"]; ?>

  <!-- TODO: Inclure le footer ici -->

</body>

</html>

<?php
  }
}