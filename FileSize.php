<?php 

    if(isset($_POST['check'])){

        $size = $_FILES['myfile']['size'];
        echo $size;
        echo "<br>################<br>";

        $final = $size / 1024;
        echo $final;
        echo "<br>################<br>";

        if($final > 7024){
            echo "File is greater then 7 MB";
            echo "<br>################<br>";
            
        }else{
            echo "File is less then 7 MB";
            echo "<br>################<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Image Size</title>
</head>
<style>
    *{
        font-family: 'Roboto', sans-serif;
    }
</style>
<body>
    <form action="FileSize.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit" name="check">Submit</button>
    </form>
</body>
</html>