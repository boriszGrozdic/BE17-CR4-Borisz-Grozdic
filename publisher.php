<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $picture = $data['Image'];
        $title = $data['Title'];
        $isbn = $data['ISBN_code'];
        $type = $data['Type'];
        $authorFirstName = $data['Author_first_name'];
        $authorLastName = $data['Author_last_name'];
        $publisher = $data['Publisher_name'];
        $pAddress = $data['Publisher_address'];
        $pDate = $data['Publish_date'];
        $description = $data['Description'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Only informations about publisher<img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="publisher.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><?php echo $title ?></td>
                    </tr>
                    
                    <tr>
                        <th>Publisher</th>
                        <td><?php echo $publisher ?></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><?php echo $pAddress ?></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><?php echo $pDate ?></td>
                    </tr>
                   
                    
                    <tr>
                        
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back to main page</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>