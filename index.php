<?php
$str = file_get_contents('cats.json');
$json = json_decode($str,true);
$text = $json;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fact = htmlspecialchars($_POST['fact#']);
    if (empty($fact)) {
      echo "Please enter a value between 1 and 289";
    } else if ($fact <= 289){
        foreach($text as $key => $value){
                    print($value[$fact]['text']);
                }
    }else{
        echo "Please enter a value between 1 and 289";
    }
}
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter a value between 1 and 289: <input type="text" name="fact#">
        <input type="submit" name="submit" value="Submit">


    </form>  
</body>
</html>