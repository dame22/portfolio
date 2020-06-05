<? 
    include_once $_SERVER['DOCUMENT_ROOT']."/db.php";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    $date = date('y-m-d');

    $query = "insert into contact(name, email, tel, message,date) values ('$name','$email','$tel','$message','$date')";

    mq($query);

    back('MESSAGE SENT');
?>
