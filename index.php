<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  $login = [];
  $login['1001'] = array(
    'name'=>'TAMA Taro',
    'pass'=>password_hash('pass01', PASSWORD_DEFAULT));
  $login['1002'] = array('name'=>'HIJIRI Hanako', 'pass'=>password_hash('pass02', PASSWORD_DEFAULT));
  $login['1003'] = array('name'=>'NAGAYAMA Jiro', 'pass'=>password_hash('pass03', PASSWORD_DEFAULT));
  var_dump($login);

  print('<hr />');

  if (password_verify('pass01', $login['1001']['pass']))
    print('OK');
  else
    print('No');
  if (password_verify('nopass', $login['1001']['pass']))
    print('OK');
  else
    print('No');
 ?>


  </body>
</html>
