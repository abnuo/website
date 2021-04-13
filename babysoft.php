<h1> !Official Babysoft We-Site! </h1>
<?php 
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
     echo "<a href=\"/index.php\">This session is being recorded.</a><hr><h1>Hello, visitor #" . generateRandomString() . "</h1>";
?>
