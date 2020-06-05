
<?
    $host = 'localhost';
    $db_user = 'root';
    $db_password = '';

    // $db_user = 'hansodam77';
    // $db_password = 'dt643152*';
    $db_name = 'hansodam77'; //user DB

    $dbcon = new mysqli($host, $db_user, $db_password, $db_name);

    function mq($sql){
        global $dbcon;
        return $dbcon->query($sql);
    }

    // function page($url){
    //     echo "<script>location.href=\"$url\";</script>";
    // }
   function back($msg){
        echo "<script> alert(\"$msg\"); history.back(); </script>";        
    }

    

?>