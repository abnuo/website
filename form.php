<form action="/vgmconv.php">
  <label for="fname">Please select a file:</label><br>
  <input type="hidden" id="i" name="i" value="<?php echo $_FILES["fileToUpload"]["name"]; ?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form>
