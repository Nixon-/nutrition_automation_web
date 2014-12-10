<?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/php_includes.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nutrition Automation - Home</title>

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
                   <!-- <p> Here be dragons</p> -->
		   <h1> Dashboard <h1/>
			
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

	        <div class="row">
		   <div class="col-lg-3 col-md-6">
		      <div class="panel panel-primary">
			  <div class="panel-heading">
		             <div class="row">
				<div class="col-xs-3">
				   <i class="fa fa-comments fa-5x"></i>
				</div>
			     	<div class="col-xs-9 text-right">
				   <div class="huge"> </div>
				   <div>Messages</div>
				</div>
			     </div>
			  </div>
			  <a href="#">
			     <div class="panel-footer">
				<a href="/messages.php"><span class="pull-left">Add Messages</span></a>
				<span class="pull-right">
				  <i class="fa fa-arrow-circle-right"></i>
				</span>
				<div class="clearfix"></div>
			     </div>
			  </a>
		       </div>
		    </div>
		</div>

		  <div class="row">
                    <div class="col-lg-8">

                    <!-- Add content here -->
                    <!-- <p> Here be dragons</p> -->
                       <div class="panel panel-default">
                           <div class="panel-heading">
                                    Food in Fridge
                                </div>
                           <!-- /.panel-heading -->
                          <div class="panel-body">
                             <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Food</th>
                                        <th>Quantity</th>
                                        <th>Expiration Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                         <td>Example: Apple</td>
                                         <td>5</td>
                                         <td>2014.12.1 </td>
                                       </tr>
				       <tr>
                                         <td>Milk</td>
                                         <td>500ml</td>
                                         <td>2014.12.1</td>
                                       </tr>
				       <tr>
                                         <td>Meat</td>
                                         <td>1</td>
                                         <td>2014.12.2</td>
                                       </tr>

                                    </tbody>
                                </table>
                             </div>
                        </div>
                     </div>
		   </div>

	 	    <div class="col-lg-4">
		       <div class="panel panel-default">
			  <div class="panel-heading">
			     <i class="fa fa-bell fa-fw"></i>
				Notification Panel
			  </div>
			
		       <div class="panel-body">
			  <div class="list-group">
			     <a href="/messages.php" class="list-group-item">
				<i class="fa fa-comment fa-fw"></i>
				New Messages
			       <span class="pull-right text-muted small">
				    <em>5 minutes ago</em>
				</span>
			     </a>
			     <a href="alerts/index.php" class="list-group-item">
                                
				<i class="fa fa-envelope fa-fw"></i>
				New Alerts
				<span class="pull-right text-muted small">


			         <em>20 minutes ago</em>
				</span>
			     </a>
			     <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>
                                Bins' Info Updated
                                <span class="pull-right text-muted small">
                                    <em>10 minutes ago</em>
                                </span>
                             </a>
			  </div>
		          <a href="#" class="btn btn-default btn-block">View All Alerts</a>
		       </div>
		    </div>	
                  </div>
		</div>

		
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require($_SERVER['DOCUMENT_ROOT'] . "/assets/js_includes.html"); ?>

</body>

</html>
