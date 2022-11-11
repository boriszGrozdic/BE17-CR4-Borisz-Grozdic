<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $type = $_POST['type'];
    $authorFirstName = $_POST['authorFirstName'];
    $authorLastName = $_POST['authorLastName'];
    $publisher = $_POST['publisher'];
    $pAddress = $_POST['pAddress'];
    $pDate = $_POST['pDate'];
    $description = $_POST['description'];
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);  
   
    $sql = "INSERT INTO library (Title, Image, ISBN_code, Description, Type, Author_first_name, Author_last_name, Publisher_name, Publisher_address, Publish_date ) VALUES ('$title','$picture->fileName','$isbn','$description' ,'$type', '$authorFirstName' ,'$authorLastName','$publisher','$pAddress','$pDate')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $isbn </td>
            <td> $type </td>
            <td> $authorFirstName </td>
            <td> $authorLastName </td>
            <td> $publisher </td>
            <td> $pAddress </td>
            <td> $pDate</td>
            <td> $description</td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>