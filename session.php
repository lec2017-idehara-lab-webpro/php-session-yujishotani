<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Session Test</title>
  </head>
  <body>
    <h1>ID受付</h1>
    <form action='next.php' method='post'>
      id:<input type='text' name='id'>
      <input type='submit'>
    </form>
  </body>
</html>
