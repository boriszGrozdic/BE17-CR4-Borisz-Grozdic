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
        <title>Edit Product</title>
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
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Books Title" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>ISBN code</th>
                        <td><input class="form-control" type= "number" name="isbn" step="any"  placeholder="ISBN code" value ="<?php echo $isbn ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type= "text" name="type" step="any"  placeholder="type" value ="<?php echo $type ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author FN</th>
                        <td><input class="form-control" type= "text" name="authorFirstName" step="any"  placeholder="Author FN" value ="<?php echo $authorFirstName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author LN</th>
                        <td><input class="form-control" type= "text" name="authorLastName" step="any"  placeholder="Author LN" value ="<?php echo $authorLastName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class="form-control" type= "text" name="publisher" step="any"  placeholder="Publisher Name" value ="<?php echo $publisher ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class="form-control" type= "text" name="pAddress" step="any"  placeholder="Publisher Address" value ="<?php echo $pAddress ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class="form-control" type= "date" name="pDate" step="any"  placeholder="Publish Date" value ="<?php echo $pDate ?>" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type= "text" name="description" step="any"  placeholder="Description" value ="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['Image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>