<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8:Basic Syntax</title>
</head>

<body>
    <h1><?php echo "PHP Syntax"; ?></h1>
    <?php echo "<h1>PHP SynTax2</h1>"; ?>

    <?php
    $name = "Mark";
    echo "ชื่อ:" . $name;
    ?>

    <?php
    echo "
        Hello By PHP 
        this is multi line
        text printed by
        PHP echo statement <br />
        ";
    ?>

    <?php 
        echo "Hello escape \"sequence\" character"."<br />";
    ?>

    <?php
        $msg = "Hello PHP";
        echo $msg;
    ?>
</body>

</html>