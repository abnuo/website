<h1>phpMyAdmin</h1>

<form action="/comment.php" method="POST">
  <label for="comment">Please post your comments for the blog</label><br>
  <br>
  <textarea name="comment" id="comment" rows="4" columns="300"></textarea>
  <br>
  <input type="submit" name="submit" id="submit_comment" value="Submit">
</form>
<?php
foreach(file("../comments.txt") as $line) {
    echo htmlspecialchars($line) . "\n<br>";
}
?>
