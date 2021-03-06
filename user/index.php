<?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/php_includes.php"); ?>

<?php
  // Check active session
  if(!isset($_SESSION)){ session_start(); }
  //Check for user details/authenticate that the page is being visited by an authenticated user
  if(empty($_SESSION['user']))
  {
   // if not redirect to login page
    header("Location: http://nutri_auto.com/login.php");
    exit;
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

    <?php require($_SERVER['DOCUMENT_ROOT'] . "/assets/css_includes.html"); ?>

</head>

<body>

    <div id="wrapper">
      <?php require($_SERVER['DOCUMENT_ROOT'] . "/assets/navigation_menu.php"); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
			<br>
                    <!-- Add content here -->
                    <!--<p> Here be dragons</p>-->
		    <div class="panel panel-default">
			   <div class="panel-heading">
			            Users
				</div>
			   <!-- /.panel-heading -->
			  <div class="panel-body">
			     <div class="table-responsive">
				   <?php
				
 				$conn = new Mongo();

				
 				$db = $conn->Nutrition_Automation;


 				$collection = $db->contacts;

				
 				$cursor = $collection->find();


				
				echo '<table class="table table-striped">';
					
				echo "<thead>";
				
				
				
				
				echo "<tr><th>".User."</th>";
				echo "<th>".Email."</th>";
				echo "<th>".Phone." ".Number."</th></tr>";				
                               
				echo "</thead>";
				echo "<tbody>";
				
			
				//$i = 1;

				//echo "<tr>".$_SESSION['user']."</tr>";

 				foreach ($cursor as $obj) {
				  //$_SESSION['user'] = $_POST['email'];
			          if($_SESSION['user'] == $obj['email']){

				  	echo "<tr><td>".$obj['name']."</td>";
 				  	echo "<td>".$obj['email']."</td>";
				  	echo "<td>".$obj['phone']."</td></tr>";

				  }
 				    
 			            
				}

				echo "</tbody>";
				echo '</table>';
				?>
			     </div>
			</div>
		      </div>
			<br>
			<br>
			<a class="btn" href="/user/settings/update_profile.php">
			<button type="button" class="btn btn-primary btn-lg">Update Profile</button>
		   	</a>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require($_SERVER['DOCUMENT_ROOT'] . "/assets/js_includes.html"); ?>

</body>

</html>
