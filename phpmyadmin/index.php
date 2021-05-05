<h1>phpMyAdmin</h1>

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
