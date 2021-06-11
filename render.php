<?php
include_once('selectdb.php');
$query="select * from carprices";
$result=mysqli_query($query);
?>

<!DOCTYPE html>
<html>
    <title>
        <head></head>
    </title>
<body>
    <table align="center" border="1px" style="width:600px;line: height 40px;">
        <tr>
            <th colspan="2"><h2>CAR PRICES</h2></th>
        </tr>
        <t>
            <th>CAR BRAND</th>
            <th>PRICE</th>
        </t>
    <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
            <tr>
                <td><?php echo $rows.['car_brand']; ?></td>
                <td><?php echo $rows.['price']; ?></td>
            </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>