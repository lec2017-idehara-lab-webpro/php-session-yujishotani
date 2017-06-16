<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href='login.php'>Login</a></br>
    <a href='home.php'>Home</a></br><hr />

    <h1>ユーザのホーム画面</h1>

<?php
$login = [];
$login['1001'] = array(
  'name'=>'TAMA Taro',
  'pass'=>'pass01');
$login['1002'] = array('name'=>'HIJIRI Hanako', 'pass'=>'pass02');
$login['1003'] = array('name'=>'NAGAYAMA Jiro', 'pass'=>'pass03');

if(isset($_POST['id'],$_POST['pass']) && strlen($_POST['id'])>0 )
{
  $id = $_POST['id'];
  $pass = $_POST['pass'];
  if(isset($login[$id]) && $login[$id]['pass'] == $pass)

    print('Welcome');
    $_SESSION['id'] =$id;
    $_SESSION['name'] = $login[$id]['name'];
   
}
  else {
    print('Wrong Password');
  }


$name = $_SESSION['name'];
print('<hr />');
print($name . "さんでログイン中");

 ?>

  </body>
</html>
