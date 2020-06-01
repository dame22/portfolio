<? 
    include_once $_SERVER['DOCUMENT_ROOT']."/HSD_project/admin/admin_check.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $messaga = $_POST['messaga'];
    $date = date();
    
    $query = "insert into contact(name, email, tel, messaga, date) values ('$name','$email','$tel','$messaga','$date')";
    mq($query);
    page('contact.php');
?>
