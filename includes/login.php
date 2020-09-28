<?php include "db.php";?>
<?php include "../functions.php";?>

<?php
session_start();
if(isset($_POST['login'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);
    confirmQuery($select_user_query);

    while($row = mysqli_fetch_array($select_user_query)){
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
     }

     if($username !== $db_username && $password !== $db_user_password){
        header("Location: ../login_page.php");
     }else if($username == $db_username && $password == $db_user_password){
        $_SESSION['username'] = $db_username;
        header("Location: ../index.php");
     }else {
        header("Location: ../login_page.php");
     }
}

?>