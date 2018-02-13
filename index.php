<!doctype html>
<html>
<head>
<title>
Server.PHP
</title>
<style>

</style>
</head>
<body>
<h1>
SERVER.PHP
</h1>
<form  method="post" action="write.php">
<input name="file" type="text" placeholder="FILE" value="<?php echo $_GET['file']; ?>">
<input name="password" type="password" placeholder="PASSWORD">
<input type="radio" name="state" value="load" checked>LOAD
<input type="radio" name="state" value="save">SAVE
<input type="radio" name="state" value="mkdir">MKDIR
<button onclick="about()">
ABOUT
</button>
<input type="submit" value="SUBMIT">
<br>
<br>
<textarea name="code" style="width:100%;height:50%;position:relative;" rows="10" cols="50">
<?php
@readfile($_GET['file']);
 ?>
</textarea>
</form>
<br>
<h2>
CHANGELOG:
</h2>
<textarea style="width:100%;" rows="10" cols="50" disabled>
<?php
@readfile("changelog.txt")
?>
</textarea>
<a href="https://github.com/zakerytclarke/server.php/">
https://github.com/zakerytclarke/server.php/
</a>
<script>
function about(){
  alert("SERVER.PHP\nMIT LICENSE 2018\n====================================\nThis software is provided as is without any warranty.\n====================================\nThis software is intended for use only by the authorized system administrator. Any unauthorized use can be CHARGED TO THE FULLEST EXTENT of the law.")
}
</script>
</body>
</html>
