<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <form class="" action="" method="post">
  <body>
    <p>
      发件人：
      <input type="text" name="from" value="">
    </p>
    <p>
      收件人：
      <input type="text" name="to" value="">
    </p>
    <p>
      邮件标题：
      <input type="text" name="subject" value="">
    </p>
    <p>
      邮件内容：
      <input type="text" name="text" value="">
    </p>
    <p>
      发送的的次数：
      <input type="text" name="count" value="">
    </p>
    <p>
      <input type="submit" name="submit" value="发送">
    </p>
  </body>
</html>
<?php
if(isset($_POST['submit']))
{
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$text = $_POST['text'];
$count = $_POST['count'];
for ($i=0; $i < $count ; $i++) {
$return = mail($to,$subject,$text,'From:$from');
  if (!$return) {
    echo "<script>alert('发送失败');</script>";
  }
}
}//php7的配置文件，sendmail.exe的配置文件
 ?>
