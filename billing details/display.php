


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
 <div class="col-lg-12">
     <h1 class="text-info text-center">display data</h1><br>
     <table class="table table-striped table-ho9ver table-bordered">
         <tr class="bg-dark text-white text-center">
             <th>Id</th>
             <th>Name</th>
             <th>Date</th>
             <th>Amount</th>
             <th>Note</th>
             <th>Category</th>
             <th>Edit</th>
             <th>Delete</th>

         </tr>
         <?php
include "database.php";

$query= "SELECT * FROM expenses";
$run=mysqli_query($conn,$query);

while($res=mysqli_fetch_array($run)){
?>

         <tr class="text-center">
         
             <td><?php echo $res['id']?></td>
             <td><?php echo $res['name']?></td>
             <td><?php echo $res['date']?></td>
             <td><?php echo $res['amount']?></td>
             <td><?php echo $res['note']?></td>
             <td><?php echo $res['category']?></td>
             <td><button class="btn btn-success"><a href="Edit.php?id=<?php echo $res['id'];?>" class="text-white">Edit</a></button></td>
             <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</a></button></td>
             
         </tr>
<?php
}
?>
     </table>

 </div>
 </div>
    
</body>
</html>