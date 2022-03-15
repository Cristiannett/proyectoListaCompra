<?php
include_once("model/shoppingListElement.php");

$shoppingListElements = array();
$shoppingListElements[0] = new shoppingListElement(1, "Neumatico", 4, 150, "Motor");
$shoppingListElements[1] = new shoppingListElement(2, "Aceite Motor", 1, 12,"Motor");
$shoppingListElements[2] = new shoppingListElement(3, "Tapacubos", 4, 40,"Motor");
$shoppingListName = "Recambios";

?>

<article class="panel is-success">
    <p class="panel-heading" style="text-align: center;">
        Lista De Compra - <i><?= $shoppingListName ?></i>
    </p>
    <div class="box">
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>PrecioUnidad</th>
                    <th>Categoria</th>
                    <th>Total</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($shoppingListElements as $shoppingItem) {
                    $productTotal = $shoppingItem->getQuantity() * $shoppingItem->getPrice();
                    $total = $total + $productTotal;
                    print("<tr><td>{$shoppingItem->getName()}</td><td>{$shoppingItem->getQuantity()}</td><td>{$shoppingItem->getPrice()}</td><td>{$shoppingItem->getCategoria()}</td><td>$productTotal</td></tr>");
                }
                print("<tfoot><th colspan = \"4\"> TOTAL </th><th> $total </th></tfoot>");
                ?>
            </tbody>
        </table>
    </div>
</article>