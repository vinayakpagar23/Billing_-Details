
<?php
include "database.php";
if(isset($_POST['submit'])){
$name=$_POST['name'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$note=$_POST['note'];
$category=$_POST['category'];

$sql_query = "INSERT INTO expenses(name,date,amount,note,category)
VALUES ('$name','$date','$amount','$note','$category')";

if(mysqli_query($conn, $sql_query))
{
    echo "added successfully";
    header('location:display.php');
}
}
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>



<style>
    form {
        padding: px;
        margin: auto;
    }

    body {
        background-image:url("./img/pexels-pixabay-417054.jpg");
        background-size: 100% 100%;
    }
    .jumbotron{
        width: 500px;
        border-radius: 20px;
        margin-top: 30px;
        margin: auto;
        
    }
    .container{
       padding-top: 30px;
    }

   
</style>

<body>




    <div class="container">
        <div class="jumbotron">
    <div ><h3 class='text-center'><b> Bill form</b></h3> </div>
    <div class="container-fluid">
        <div class="row">
            <form  method="POST">
                <div class="form-group">
                    <label for="name"><b>  Name </b></label>
                    <input type="text" class="form-control" name=" name" id="name" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label for="datepicker"><b> Date </b></label><br>
                    <input id="datepicker" class="form-control" width="276" name="date" required />
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script>
                </div>
                
                <div class="form-group">
                    <label for="amount"><b> Amount </b></label>
                    <input type="text" class="form-control" name=" amount" id="amount" placeholder="Enter your Amounts" required>
                </div>

                <div class="form-group">
					<label for="note"><b>Note</b> </label>
					<textarea id="note" name="note" placeholder="Write your notes here ..." class="form-control" rows="6"></textarea>
				</div>

                <div class="form-group">
                    <label for="category"><b> Category </b></label>
                    <input type="text" class="form-control" name=" category" id="category" placeholder="write your category.." required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
  </div>
</div>


</body>

</html>