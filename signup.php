<?php
	
	$SignUpStatus = "";
	if( $_POST["name"] && $_POST["email"] && $_POST["password"] &&$_POST['phone']){
	$SignUpStatus = "";
	$conn = new Mongo();
	
				
 	$db1 = $conn->Nutrition_Automation;

	$db2 = $conn->security;


 	$collection1 = $db1->contacts;
	
	//$cursor1 = $collection1->find();
	
	$newdata1 = array("name"=>$_POST['name'],"email"=>$_POST['email'],"phone"=>$_POST['phone']);
	
	//$info=setContacts($newdata);
	
 	$collection1->insert($newdata1);

	$collection2 = $db2->web_security;
	//$cursor2 = $collection2->find();
	$newdata2 = array("username"=>$_POST['email'], "password"=>$_POST['password']);
	$collection2 ->insert($newdata2);
	
	//$SignUpStatus="True";
	header("Location: signup.php");
	exit;
	}
	else
	{
	$SignUpStatus="Fail";
	}

?>



<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nutrition Automation</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                       <!-- <form role="form">  -->
			  <form id='signup' action='signup.php' method='post' accept-charset='UTF-8'>
                            <fieldset>
				<div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="name" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
				<div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" name="phone" type="phone" value="">
                                </div>

				
                                <!--<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>-->
                                <!-- Change this to a button or input when using this as a form -->
                               <!--<a href="index.php" class="btn btn-lg btn-success btn-block">Login</a> -->
				  
				  
				  
				  <input type='submit' name='Submit' value='Sign Up' class="btn btn-lg btn-success btn-block"/>
				<br>
				<a href = "login.php">Back to Login Page</a>
				<br>
 				<?php
				/*if ($SignUpStatus == "True")
					echo "Sign up succeed";
					echo '<a href = "login.php">';
					echo 'Back to Login Page';
					echo '</a>';*/
				//if ($SignUpStatus == "Fail")
				//	echo "Please enter all information";
    				  ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
