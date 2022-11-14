
    <?php 

    $username = $_POST['username'];
    //echo $answer1;
    $pass = $_POST['password'];
    $quantity1 = $_POST['item1'];
    $quantity2 = $_POST['item2'];
    $quantity3 = $_POST['item3'];
    $ShipChoice = $_POST['shipping'];
    $shipcost;

    if ($ShipChoice == "Free Seven Days") {$shipcost = 0;}
    if ($ShipChoice == "$50.00 overnight") {$shipcost = 50;}
    if ($ShipChoice == "$5.00 three days") {$shipcost = 5;}


    $first = 80*$quantity1;
    $second = 120*$quantity2;
    $third = 200*$quantity3;

    $sum = $first + $second + $third + $shipcost;

    echo "<table border = '1' width='70%'' align='center'>";

        echo "<tr>";
            echo "<td colspan = '4' align='center'>WELCOME $username with password $pass</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td width = '25%'></td>";
            echo "<td width = '25%'>Quantity</td>";
            echo "<td width = '25%'>Cost Per Item</td>";
            echo "<td width = '25%'>Subtotal</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td width = '25%'>Item 1</td>";
            echo "<td width = '25%'>$quantity1</td>";
            echo "<td width = '25%'>$80.00</td>";
            echo "<td width = '25%'>$$first.00</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td width = '25%'>Item 2</td>";
            echo "<td width = '25%'>$quantity2</td>";
            echo "<td width = '25%'>$120.00</td>";
            echo "<td width = '25%'>$$second.00</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td width = '25%'>Item 3</td>";
            echo "<td width = '25%'>$quantity3</td>";
            echo "<td width = '25%'>$200.00</td>";
            echo "<td width = '25%'>$$third.00</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td width = '25%'>Shipping</td>";
            echo "<td colspan = '2' width = '50%'>$ShipChoice</td>";
            echo "<td width = '25%'>$$shipcost.00</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td colspan = '3' width = '75%'>Total Cost</td>";
            echo "<td colspan = '1' width = '25%'>$$sum.00</td>";
        echo "</tr>";



        echo "</table>";

    ?>
