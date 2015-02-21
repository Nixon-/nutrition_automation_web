<?php

if($_POST['message']){

 $conn = new Mongo();
	
				
 $db = $conn->Nutrition_Automation;


 $collection = $db->messages;
	
 $exampleDate = new MongoDate();
 $newMessage = array("message"=>$_POST['message'],"date"=>date(DATE_ISO8601));
 $collection->insert($newMessage);
 header("Location: messages.php");

 exit;

}


?>



<?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/php_includes.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Messages - Nutrition Automation</title>

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
                       <h1 class="page-header">Messages</h1>
                   </div>
                </div>

		<form action="messages.php" method="POST">
			<!--<input type="message" name="Message" value="">-->
			<textarea name="message" rows="5" cols="80">

			</textarea>
		        <br>
			<br>
			
			<input type="submit" class="btn btn-primary btn-lg">
		</form>
		
		<br>
		<br>
		<br>
		<br>

                <div class="row">
                    <div class="col-lg-12">

                    <!-- Add content here -->
                    <!-- <p> Here be dragons</p> -->
                       <div class="panel panel-default">
                           <div class="panel-heading">
                                    Messages
                                </div>
                           <!-- /.panel-heading -->
			
                          <div class="panel-body">
                             <div class="table-responsive">
				<?php
				
				$conn = new Mongo();
				
				
 				$db = $conn->Nutrition_Automation;


 				$collection = $db->messages;

				
 				$cursor = $collection->find();


                                echo '<table class="table table-striped">';
                                   echo "<thead>";
                                   
   				   echo "<tr><th>".Number."</th>";
				   echo "<th>".Date."</th>";
				   echo "<th>".Message."</th></tr>";
				     
                                   echo "</thead>";
                                   echo "<tbody>";
				
					$i = 1;
                                      foreach($cursor as $obj){
					echo "<tr><td>".$i."</td>";
					echo "<td>".date('Y-m-d H:i:s', strtotime(date($obj['date'])))."</td>";
					echo "<td>".$obj['message']."</td></tr>";
					$i = $i + 1;
				      }
	
                                   echo "</tbody>";
                                echo '</table>';
				?>
                             </div>
                        </div>
	              </div>	    

                    </div>
                    <!-- /.col-lg-6 -->
                   
                    
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
                                                                                                                              222,1         Bot

