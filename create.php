<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Add Books</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 120px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Books</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title Name" /></td>
                    </tr> 
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="number" name="isbn"  placeholder="ISBN Code" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name="type"  placeholder="Type (DVD/Books/CD)" /></td>
                    </tr>    
                    <tr>
                        <th>Author FN</th>
                        <td><input class='form-control' type="text" name="authorFirstName"  placeholder="Author Name" /></td>
                    </tr>    
                    <tr>
                        <th>Author LN</th>
                        <td><input class='form-control' type="text" name="authorLastName"  placeholder="Author Last Name" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="publisher"  placeholder="Publisher Name" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name="pAddress"  placeholder="Publisher Address" /></td>
                    </tr>    
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name="pDate"  placeholder="Publisher Date" /></td>
                    </tr>           
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description"  placeholder="Description" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>