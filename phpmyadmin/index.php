<?php
function findInArray($array, $searchword) {
    $matches = array_filter($array, function($item) { return explode(":", $item)[0] == 'intitle'; });
    return $matches;
}
$dorksy = findInArray(file("dorks.txt"), "intitle:");
$randIndex = array_rand($dorksy);
$title = implode("", array_slice(explode('"', explode("intitle:", $dorksy[$randIndex]))), 0, -1));
echo "<title>$title</title>";
?>
<h1><?php echo $title; ?></h1>
<?php
require 'markov.php';

function process($order, $length, $input, $ptext) {
    // generate text with markov library

    if (!ctype_digit($order) || !ctype_digit($length)) {
        throw new Exception("Your order or length are not correct");
    }

    $order = (int) $order;
    $length = (int) $length;

    if ($order < 0 || $order > 20) {
        throw new Exception("Invalid order");
    }

    if ($length < 1 || $length > 25000) {
        throw new Exception("Text length is too short or too long");
    }

    if ($input) {
        $text = $input;
    } else if ($ptext) {
        if (!in_array($ptext, ['alice', 'calvin', 'kant'])) {
            throw new Exception("Invalid text");
        } else {
            $text = file_get_contents("./text/$ptext.txt");
        }
    }

    if (empty($text)) {
        throw new Exception("No text given");
    }

    $markov_table = generate_markov_table($text, $order);
    $markov = generate_markov_text($length, $markov_table, $order);
    return htmlentities($markov);
}
$scat = file_get_contents("dorks.txt") . " " . file_get_contents("pride.txt");
echo process("4", "2500", $scat, NULL);
?>
<form action="/comment.php">
  <label for="comment">Please post your comments for the blog</label><br>
  <br>
  <textarea name="comment" id="comment" rows="4" columns="300"></textarea>
  <br>
  <input type="submit" name="submit" id="submit_comment" value="Submit">
</form>
<?php
function cleanus(&$value) {
  $value = htmlspecialchars($value);
}
$comments = file("../comments.txt");
array_walk_recursive($comments, 'cleanus');
echo implode("\n<br>", $comments);
?>
