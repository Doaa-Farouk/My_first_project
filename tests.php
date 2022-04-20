<?php
// $username = $_POST['usrnm'];
        // $password = $_POST['passwd'];
        // $email = $_POST['email'];
        // $email_confirmation = $_POST['emailc'];
        // $country = $_POST['cntry'];
        // $major = $_POST['mjr'];
        // $id_card = $_POST['idcard'];

        // $insert_q = "insert into users(id,username,password,email,country,major) values(8,'$username', '$password','$email','$country','$major')";
        // $result = $con -> exec($insert_q);

?>
$select_q = 'select * from categories where id=:id';
$result = $con->prepare($select_q);
$result->execute(array(':id' =>$_GET['id']));
if($result->rowCount())
{
        $row = $result->fetch();
        $id = $row['id'];
        $name = $row['name'];
        
        echo $name;
}
                                        
<a href='header/header.php?id=$id' target='_blank'>