<?php
//$products = json_decode(file_get_contents('products.json'), true);


include ("./functions.php");
include ("./Controller.php");
?>


<!doctype html>
<html lang="en">

<head>
    <title>Indkøbskurv</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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

    <div class="cart">
        <button type="button" id="cart-btn">
            <a href="cart.php"><i class="fas fa-shopping-cart">Indkøbskurv</i></a>
        </button>
    </div>


    <div class="container py-5">
        <img class="FSlogo" src="images/FS.png" width="200" height="40" alt="FS logo" align="lefttop">
        <h1 class="display-6 text-center mb-5">Farstrup Furniture Webshop</h1>
<form action="cart.php" method="post">
        <div class="row">
            <?php foreach (getFromFile() as $i => $product) { ?>
                <div class="col-12 col-md-4">
                    <div class="card mb-5">
                        <img class="card-img-top" src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>">
                        <div class="card-body" <h2 class="h3 mb-0">
                            <?php echo $product["name"]; ?>
                            </h2>
                            <p class="lead">
                                <?php echo "Fra"." ".$product["pris"] . " " . "Kr."; ?>
                            </p>
                            <hr class="my-4" <ul class="list-unstyled">
                            </ul>
            </form>
                            <form action="" method="post">
                           
                                <h4 class="h6 mb-0">Tilpas Stel</h4>
                                <select name="custom<?php echo $i ?>" required>
                                    <option value="" disabled selected hidden>Vælg her</option>
                                    <option value="Lys brun"><?php echo $product["stel1"] ?></option>
                                    <option value="Lysnet"><?php echo $product["stel2"] ?></option>
                                    <option value="Hvidolieret"><?php echo $product["stel3"] ?></option>
                                </select>

                                <h5 class="h6 mb-0">Tilpas betræk</h5>
                                <select name="custom1<?php echo $i ?>" required>
                                    <option value="" disabled selected hidden>Vælg her</option>
                                    <option value="betræk"><?php echo $product["betræk1"] ?></option>
                                    <option value="betræk"><?php echo $product["betræk2"] ?></option>
                                    <option value="betræk"><?php echo $product["betræk3"] ?></option>
                                </select>
                                
                                <p class="produkt-antal">Antal: <input value="1" name="antal<?php echo $i ?>">
                                <p>
                                    <a href="?i=<?php echo $i; ?>"> Tilføj</button></a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }; //endforeach; ?>
        </div>
    </div>

<?//php if (isset($_GET["i"])) {
    //$product["pris"];
//$product = getFromFile();
//$custom = array('Navn' => $product[$_GET["i"]]["name"],
                //"Stel" => $_POST[]
//echo $_GET["i"];


//);
//print_r($product[$_GET["i"]]);
    


?>

</body>

</html>