<?php

if($_POST['bin'] && $_POST['name'] && $_POST['type'] /*&& $_POST['perishable'] && $_POST['quantity'] && $_POST['date']*/){

$conn = new Mongo();

$db = $conn->Nutrition_Automation;

$collection1 = $db->food_data;

$cursor1 = $collection1->find();

$collection2 = $db->bins;
				
$cursor2 = $collection2->find();

$newdata2 = array('$set'=>(array("type"=>$_POST['type'],"name"=>$_POST['name'])));
foreach($cursor2 as $obj2){
  if($obj2['bin'] == $_POST['bin']){
	
	$collection2->update(array("type"=>$obj2['type'],"name"=>$obj2['name']),$newdata2);

	
  }
}


//$newdata1 = array('$set'=>(array("bin"=>$_POST
/*$newdata1 = array('$set'=>(array("quantity"=>$_POST['quantity'],"date"=>$_POST['date'])));
=======

$newdata1 = array('$set'=>(array("quantity"=>$_POST['quantity'],"date"=>$_POST['date'])));
>>>>>>> 8ae75fe28c5a1363fdae85f646f24af029f81451
foreach($cursor1 as $obj1){
  if($obj1['bin'] == $_POST['bin']){

	$collection1->update(array("quantity"=>$obj1['quantity'],"date"=>$obj1['date']),$newdata1);


	
  }
}



$newdata2 = array('$set'=>(array("type"=>$_POST['type'],"perishable"=>$_POST['perishable'],"name"=>$_POST['name'])));
foreach($cursor2 as $obj2){
  if($obj2['bin'] == $_POST['bin']){
	
	$collection2->update(array("type"=>$obj2['type'],"perishable"=>$obj2['perishable'],"name"=>$obj2['name']),$newdata2);

	
  }
}*/

$submissionStatus = "True";
//header("Location: /index.php");


}
else
{
$submissionStatus = "False";
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

                    <!-- Add content here -->
                    <!--<p> Here be dragons</p>-->
		    <h1 class="page-header">Bin Configuration</h1>
		    </div>
		</div>
			
		    <div class="row">
			<div class="col-lg-6">
			    <div class="panel panel-default">
				<div class="panel-heading">
				</div>
			    <div class="panel-body">
				<div class="row">
				    <div class="col-lg-5">
					<form action="config_bins.php" method=POST role="form">
					   <div class="form-group">
						<label>Select Bin</label>
						<select name="bin" class="form-control">
						<?php
						$conn = new Mongo();

				
 						$db = $conn->Nutrition_Automation;


 						$collection = $db->bins;

				
 						$cursor = $collection->find();
						
						foreach($cursor as $obj){
						   
						    
						    echo "<option>".$obj['bin']."</option>";
						}
					
						$conn->close();	
						?>
						</select>
					  </div>
					  <div class="form-group">
					     <label>Food</label>
					     <input name="name" class="form-control">
					  </div>
					  <div class="form-group">
					     <label>Type</label>
					     <select name="type" class="form-control">

					     <!--<input name="type" class="form-control">-->
					     <option>Fruit</option>
					     <option>Meat</option>
					     <option>Vegetable</option>
					     </select>
					  </div>
					  <!--<div class="form-group">
					  <label>Perishable</label>
					  <select name='perishable' class="form-control">
					     <option>True</option>
					     <option>False</option>
					 
					  </select>

                                             <?php
                                                $conn = new Mongo();


                                                $db = $conn->Nutrition_Automation;
						$shelf_times = $db->shelftime;
						$c3 = $shelf_times->find();

						$word = Array();

                                                foreach($c3 as $obj){
						    
						    if(!in_array($obj['type'], $word)){
                                                      echo "<option>".$obj['type']."</option>";
						      array_push($word, $obj['type']);
						}
                                                }
						$conn->close();
                                                ?>

					  </div>
					  <!-- <div class="form-group">
					     <label>Quantity</label>
					     <select name="quantity" class="form-control">
					  </div> -->
					  <!-- <div class="form-group">
					     <label>Date</label>
					     <input name="date" class="form-control">

					  </div>-->

					   

					  <input type="submit" class="btn btn-primary btn"/>
					  <?php
						echo "<br>";
						if($submissionStatus == "True"){
						     echo "Configuration Succeed";
						}
						if($submissionStatus == "False")
						{
						     echo "Please enter all information";
						}
					
    				  	  ?>
					</form>
				    </div>
				   </div>
			     </div>
			</div>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
		
		<?php
		/*if($submissionStatus == "True"){
		   echo "123";
		    echo '<div class="row">';
                    echo '<div class="col-lg-8">';
			echo "<p>".Succeed."</p>";
		    echo '</div>';
		    echo '</div>';
                   
                    /* echo '<div class="panel panel-default">';
                        echo '<div class="panel-heading">';
                                    Food in Fridge
                                echo '</div>';
                          
                         echo '<div class="panel-body">';
				
                             echo '<div class="table-responsive">';

		exit;		
		}*/

		?>
		
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require($_SERVER['DOCUMENT_ROOT'] . "/assets/js_includes.html"); ?>

</body>

</html>
