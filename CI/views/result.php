<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- <?php 
            if($namesList === "" || $namesList === null){
                echo "No data Found";
            }
            else{
            foreach($namesList as $namelist){ ?>
            <div><?php echo $namelist["name"]; ?></div>
            <div><?php echo $namelist["another_name"]; ?></div>
            <div>
                <?php
                 $urls = explode(" ", $namelist["url"]); 
                // echo print_r($urls);
                foreach($urls as $url){
                    echo "<button>" . $url . "</button>";
                }
                ?>
            </div>
            <br>
        <?php }} ?> -->

        <!-- Method 2 -->
        <?php 
            if($namesList === "" || $namesList === null){
                echo "No data Found";
            }
            else{
            foreach($namesList as $namelist){ ?>
                <div><?php echo $namelist["name"]; ?></div>
                <div><?php echo $namelist["email"]; ?></div>
                <br>
        <?php }} ?>
    </div>
</body>
</html>