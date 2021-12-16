<?php
function Onsave() {
    saveToFile($_POST["i"]);

}

function saveToFile($product) {
    $productsArray = getFromFile();
    $productsArray[] = $product;
    $jsonProducts = json_encode($productsArray);
   

    file_put_contents("./cart.json", $jsonProducts);
}

function getFromFile() {
    $jsonProducts = file_get_contents("./products.json");
    $productsArray = json_decode($jsonProducts, true);
    return $productsArray;
}
function Delete() {
    $i = $_GET['i'];
    $jsonProducts = file_get_contents("./products.json");
    $productsArray = json_decode($jsonProducts);
     
    //unset($productsArray[$i]);
     
    $productsArray = json_encode($productsArray);
    file_put_contents("./cart.json", $productsArray);

}

function printOrder($ordre)
{
    foreach ($ordre as $in) { ?>
        <tr>
            <td> <?php echo $in["Produkt navn"]; ?> </td>
            <td> <?php echo $in["Betræk"]; ?> </td>
            <td> <?php echo $in["Stel"]; ?> </td>
            <td> <?php echo $in["antal"]; ?> </td>
            <td> <?php echo $in["Pris"]; ?> </td>
        </tr>
    
 <?php } ?>
 <?php } ?>