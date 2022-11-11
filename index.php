<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM library";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td class='border border-dark'><img class='img-thumbnail ' src='pictures/" .$row['Image']."'</td>
            <td class='border border-dark'>" .$row['Title']."</td>
            <td class='border border-dark'>" .$row['ISBN_code']."</td>
            <td class='border border-dark'>" .$row['Type']."</td>
            <td class='border border-dark'>" .$row['Author_first_name']."</td>
            <td class='border border-dark'>" .$row['Author_last_name']."</td>
            <td class='border border-dark'><a href='publisher.php?id=" .$row['id']."'>" .$row['Publisher_name']."</a></td>
            <td class='border border-dark'>" .$row['Publisher_address']."</td>
            <td class='border border-dark'>" .$row['Publish_date']."</td>
            <td class='border border-dark'>" .$row['Description']."</td>
            <td class='border border-dark'><a href='update.php?id=" .$row['id']."'><button class='btn btn-secondary btn-sm ' type='button'>Edit</button></a>
            <a href='details.php?id=" .$row['id']."'><button class='btn btn-info btn-sm ' type='button'>Details</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm ' type='button'>Delete</button></a></td>
            </tr>"
            ;
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Library</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
                
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="manageProduct">    
            <div class='mb-3 text-center'>
                <a href= "create.php"><button class='btn btn-success 'type="button" >Add some books</button></a>
            </div>
            <p class='h2 text-center'>Library</p>
            <table class='table table-striped'>
                <thead class='table-dark'>
                    <tr class="border border-dark">
                        <th>Image</th>
                        <th>Title</th>
                        <th>ISBN Code</th>
                        <th>Type</th>
                        <th>Author FN</th>
                        <th>Author LN</th>
                        <th>Publisher</th>
                        <th>Publisher Address</th>
                        <th>Publish Date</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html>