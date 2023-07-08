<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach($namesList as $namelist){ ?>
            <div><?php echo $namelist["name"]; ?></div>
            <div><?php echo $namelist["another_name"]; ?></div>
            <br>
        <?php } ?>
    </div>
</body>
</html>