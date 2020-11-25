<?php
$str = file_get_contents('cats.json');
$json = json_decode($str,true);
$text = $json;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $fact = htmlspecialchars($_POST['fact#']);
//     if (empty($fact)) {
//       echo "Please enter a value between 1 and 289";
//     } else if ($fact <= 289){
//         foreach($text as $key => $value){
//                     // echo $value[$fact]['text'];
//                 }
//     }else{
//         echo "Please enter a value between 1 and 289";
//     }
// } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Facts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Cat Facts
    <img src="cat-logo.png" id="logo"></a>
    </nav>
    <div class="container-fluid">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <center>
        <h3>Over 200 facts about cats</h3>
        <p><strong>Enter a value between 1 and 289 to see a cool cat fact</strong></p>
        <input type="text" name="fact#" class="input-group input-group-sm mb-3">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </center>
    </form>  
    </div>
    <!-- Div to display the fact -->
<div class="lead" id="output">
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fact = htmlspecialchars($_POST['fact#']);
    if (empty($fact)) { 
      ?> <p class="text-danger"><strong>Please enter a value between 1 and 289</strong></p><?php
    } else if ($fact <= 289){
        foreach($text as $key => $value){
                    echo $value[$fact]['text'];
                }
    }else{
        ?><p class="text-danger"><strong>Please enter a value between 1 and 289</strong></p>
        <?php 
    }
}
?>
</div>


</body>
</html>