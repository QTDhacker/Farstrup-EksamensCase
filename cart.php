<?php
include("./functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Webshop</title>

</head>
<body>
<header>
        <div class="container">
            <nav class="navbar">
                <button type="button" class="navbar-toggler">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-collapse">
            </nav>
        </div>
    </header>

    <div class="container py-5">
        <img class="FSlogo" src="images/FS.png" width="200" height="40" alt="FS logo" align="lefttop">
        <h1 class="display-6 text-center mb-5">Din indkøbskurv</h1>
    </div>

    <table style="width:100%">
  <tr>
    <th> Produkt navn </th>
    <th> Betræk </th>
    <th> Stel </th>
    <th> Antal </th>
    <th> Pris </th>
    <th> Fjern </th>
  </tr>


  <?php
  $product = getFromFile();
  foreach ($product as $i => $ordre) { ?>
    <tr>
      <td> <?php echo $ordre["name"]; ?> </td>
      <td> <?php echo $ordre["betræk1"]; ?> </td>
      <td> <?php echo $ordre["betræk2"]; ?> </td>
      <td> <?php echo $ordre["betræk3"]; ?> </td>
      <td> <?php echo $ordre["stel1"]; ?> </td>
      <td> <?php echo $ordre["stel2"]; ?> </td>
      <td> <?php echo $ordre["stel3"]; ?> </td>
      <td> <?php echo "antal"; ?> </td>
      <td> <?php echo $ordre["pris"]; ?> </td>
      <td> <a href="?i=<?php echo $i; ?>"> Slet </a> </td>
    </tr>
  <?php } ?>

  <tr>
    <td> <b><u> Total: </u></b> </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td> <b><u>
          <?php echo array_sum(array_column($product, "pris")); ?> Kr.
    </td> </u></b>
    <td></td>
    <td></td>
  </tr>
    </table>
</body>
</html>