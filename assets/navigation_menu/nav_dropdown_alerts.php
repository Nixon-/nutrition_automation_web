               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php
			
                          $concerns = getPlainConcerns();
 
                          foreach($concerns as $concern){
       
                                // WARNING, proper coding would be to set PHP to figure out how many hours differ from ISO date at local location, but lazyness and futility
                               $date1 = $concern['date']->sec + (4*60*60);// WARNING, MongoDate assumes the date given is in ISO format
                                                                               // When php converts this ISO format back into a unix timestring, it adds to 5h
                                                                               //  The fix is to add 5h (Or the current timezone time) to this time. 
                                $date2 = time();
                                $interval = $date2 - $date1;
                                $days = floor($interval/(3600*24));
                                $hours = floor(($interval%(3600*24))/(3600));
                                $mins = floor(($interval%3600)/(60));
                                $secs = floor($interval%(60));
                                ?> 
                                <li>
                                  <a href="">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i>
                                        <?php echo $concern['message']; ?>
                                        <span class="pull-right text-muted small">
                                        <?php 
                                          if ($days != 0)
                                            echo $days . "d ";
                                          if ($hours != 0)
                                            echo $hours . "h "; 
                                          if ($mins != 0)
                                            echo $mins . "m ";
                                          if ($days == 0 && $hours == 0 && $mins == 0)
                                            echo $secs . "s ";
                                          echo "ago</span>";
					
                                        ?>
                                    </div>
                                  </a>
                                </li>
                                <li class="divider"></li>
				
                              <?php
                               
                            
                          }
                        ?>

                        <li>
                            <a class="text-center" href="/alerts/index.php">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                        </li>
                      </ul>
                    <!-- /.dropdown-alerts -->
                </li>
