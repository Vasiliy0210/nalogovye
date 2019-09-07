<?php

  //header('Location: /thanks-page.html', true, 301);

  function send() {
    //$sendto   = "igorega@gmail.com";
    $sendto   = "morality.relativus@gmail.com";
    $username = isset($_POST['name']) ? $_POST['name'] : '';
    $useremail = isset($_POST['email']) ? $_POST['email'] : '';
    $userphone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $userselect = isset($_POST['select']) ? $_POST['select'] : '';
    $userselectQuantity = isset($_POST['selectQuantity']) ? $_POST['selectQuantity'] : '';
    $useralldays = isset($_POST['alldays']) ? $_POST['alldays'] : '';
    $userdayOne = isset($_POST['dayOne']) ? $_POST['dayOne'] : '';
    $userdayTwo = isset($_POST['dayTwo']) ? $_POST['dayTwo'] : '';
    $userdayThree = isset($_POST['dayThree']) ? $_POST['dayThree'] : '';
    $userdayFour = isset($_POST['dayFour']) ? $_POST['dayFour'] : '';

    $subject  = "New message from Ovcharov landing";
    $headers  = "From: " . strip_tags($usermail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #000;padding-bottom:10px;'>Ovcharov message (Регистрация - Участие в зале)</h2>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>Name:</strong> ".$username."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>E-mail:</strong> ".$useremail."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>Phone:</strong> ".$userphone."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>К-во участников:</strong> ".$userselect."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>Другое число:</strong> ".$userselectQuantity."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>Все дни:</strong> ".$useralldays."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>1-й день – 02 октября 2019:</strong> ".$userdayOne."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>2-й день – 03 октября 2019:</strong> ".$userdayTwo."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>3-й день – 04 октября 2019:</strong> ".$userdayThree."</p>\r\n";
    $msg .= "<p style='margin-bottom: 10px;'><strong>4-й день – 05 октября 2019:</strong> ".$userdayFour."</p>\r\n";
    $msg .= "</body></html>";

    if(@mail($sendto, $subject, $msg, $headers)) {
    } else {
    }
  }

  try {
    send();
  } catch (Exception $e) {

  }

?>
