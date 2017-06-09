<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Another Page</title>
  </head>
  <body>
    <a href='session.php'>ID送信ページに戻る</a><hr />
    <a href='next.php'>このページを再表示</a><hr />
    <a href='another.php'>全然別のページ</a><hr />

<h1>全然別のページ（たとえば書き込み一覧）</h1>

<?php
print('POST の中身<br>');
var_dump($_POST);
print('<hr />');
print('SESSION の中身<br>');
var_dump($_SESSION);
 ?>
  </body>
</html>
