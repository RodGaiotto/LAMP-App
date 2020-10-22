<?php

//Include config file
require_once 'config.php';

//Define variables and initialize with empty values

$completed = $description = "";
$completed_err = $description_err = "";

//Processing form data when form is submitted

    if(isset($_POST["id"]) && !empty($_POST["id"])){

    //Get hidden input value

    $id = $_POST["id"];
  
    //Validate Task

    $input_name = trim($_POST["completed"]);

        if(empty($input_name)){

            $completed_err = "Is it completed? yes/no";

        } elseif(!filter_var(trim($_POST["completed"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){

            $completed_err = 'Please enter a valid Completion.';

        } else{

	echo "OK 1";

            $completed = $input_name;

        }

        

    //Validate Task details

    $input_details = trim($_POST["description"]);

        if(empty($input_details)){

            $description_err = 'Please enter the Description';     

        } else{

	echo "OK 2";

            $description = $input_details;

        }
        

    //Check input errors before inserting in database

        if(empty($completed_err) && empty($description_err) ){

	echo "OK 3";

    //Prepare an update statement

    $sql = "UPDATE ipvtable SET COMPLETED=?, DESCRIPTION=? WHERE ID=?";

    //echo $sql;

	//$stmt = mysqli_prepare($link, $sql);
	//$stmt = mysqli_prepare($link, "UPDATE LIVETABLE SET TASKNAME=?, DETAILS=? WHERE ID=?");

	//mysqli_stmt_bind_param($stmt, "ssi", $param_taskname, $param_details, $param_id);

	//echo "<br>";
	//echo mysqli_error($link);

	//echo "<br>";
	//echo $taskname;
	//echo "<br>";
	//echo $details;
	//echo "<br>";
	//echo $id;
	//echo "<br>";

//$param_taskname = $taskname;
//$param_details = $details;
//$param_id = $id;

	//$param_taskname = $taskname;

        //$param_details = $details;

        //$param_id = $id;

	//mysqli_stmt_execute($stmt);

	//mysqli_stmt_close($stmt);

        //mysqli_close($link);



    if($stmt = mysqli_prepare($link, $sql)){

	//echo "OK 4";
    //Bind variables to the prepared statement as parameters

    mysqli_stmt_bind_param($stmt, 'ssi', $param_completed, $param_description, $param_id);

    //Set parameters

    $param_completed = $completed;

    $param_description = $description;

    $param_id = $id;

    //Attempt to execute the prepared statement

    if(mysqli_stmt_execute($stmt)){

		echo "OK 4";

        // Records updated successfully. Redirect to landing page

        header("location: adm.php");

        exit();

                                  } else{
                    echo "Something went wrong. Please try again later.";
                                        }

                                            }

    //Close statement
    mysqli_stmt_close($stmt);

                                                            }

    //Close connection
    mysqli_close($link);

                                                        } else{

    //Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    //Get URL parameter
    $id =  trim($_GET["id"]);

    //Prepare a select statement
    $sql = "SELECT * FROM ipvtable WHERE ID = ?";

       if($stmt = mysqli_prepare($link, $sql)){

       //Bind variables to the prepared statement as parameters
       mysqli_stmt_bind_param($stmt, "i", $param_id);

       // Set parameters
       $param_id = $id;

                

       // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){

            /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            //Retrieve individual field value

            $completed = $row["COMPLETED"];

            $description = $row["DESCRIPTION"];

                                                } else{

            //URL doesn't contain valid id. Redirect to error page

            header("location: error.php");

            exit();

                                                    }

                                            } else{

            echo "Oops! Something went wrong. Please try again later.";

                                                  }

                                                }

            // Close statement
            mysqli_stmt_close($stmt);

            // Close connection
            mysqli_close($link);
                                                            }  else{

            // URL doesn't contain id parameter. Redirect to error page

            header("location: error.php");

            exit();

                                                                    }

                                                                    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
    width: 500px;
    margin: 0 auto;
        }
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>

<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="form-group <?php echo (!empty($completed_err)) ? 'has-error' : ''; ?>">

<label>Completed</label>

<input type="text" name="completed" class="form-control" value="<?php echo $completed; ?>">

<span class="help-block"><?php echo $completed_err;?></span>

</div>

<div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">

<label>Description</label>

<textarea name="description" class="form-control"><?php echo $description; ?></textarea>

<span class="help-block"><?php echo $description_err;?></span>

</div>

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<input type="submit" class="btn btn-primary" value="Submit">
<a href="adm.php" class="btn btn-default">Cancel</a>

</form>
</div>
</div>        
</div>
</div>
</body>
</html>
