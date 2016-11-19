
<?php
include('header.php');	

?>



<?php

// Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
require_once('connect.php');


// Selecting Database
mysql_select_db($database_localhost,$link);

if(!$event=$_GET['event'])
{
header('Location: index.html');
}


 
 
 $result=mysql_query("SELECT * FROM mainevents WHERE event='$event'",$link);




while($row=mysql_fetch_assoc($result))
{

		echo"<section class='about text-center' style='background-color:#ddd;'><br><br><br><br><br>
                            <div class='container' >
					
						<h2>".$row['event']."</h2>
						<h4 style='text-align:right;font-size:18px;'><b>Faculty Convener: </b>&nbsp".$row['thead']."<br><b>Converner:</b>&nbsp ".$row['shead']."<br><b>Co-Converner: </b>&nbsp".$row['contact']."  <br><a href=".$row['rulebook']."><b>DOWNLOAD RULE-BOOK</b></a> </h4> ";}
       

              $row=mysql_query("SELECT * FROM event WHERE (event='$event')",$link);

                     while($result=mysql_fetch_assoc($row))
                         {    echo"
                                    <div class='row' style='background-color:#42b3e5;'>
                                          <h3 style='text-align:left; color:#fff;font-size:30px;'>&nbsp".$result['name']."</h3>
                                            <div class='col-md-4 col-sm-6' >
							<div class='single-about-detail clearfix'>
								<div class='about-img'>
									<img src='img/event/".$result['img'].".jpg' alt=''> 
								</div>

								
							</div>
						</div>

						<div class='col-md-4 col-sm-6'>
							<div class='single-about-detail'>
								

								<div class='about-details'>
									<div class='pentagon-text'>
										
									</div>

									<h3 style='font-size:20px; text-align:left;'>&nbspDescription:</h3>
									<p style='text-align:left;'>".$result['des']."</p>
                                                                        <h3 style='font-size:20px; text-align:left;'>&nbspRules:</h3>
									<p style='text-align:left;'>".$result['rules']."</p>
                                                                        <h3 style='font-size:20px; text-align:left;'>&nbsp".$result['otherAtt']."</h3>
									<p style='text-align:left;'>".$result['other']."</p>

								</div>
							</div>
						</div>


						<div class='col-md-4 col-sm-6'>
							<div class='single-about-detail'>
								

								<div class='about-details'>
									<div class='pentagon-text'>
										
									</div>

									<h3 style='font-size:20px; text-align:left; '>&nbspIncharge:</h3>
									<p style='text-align:left;'>".$result['sname']."</p>
                                                                        <h3 style='font-size:20px; text-align:left;'>&nbspContact:</h3>
									<p style='text-align:left;'>".$result['contact']."</p>
                                                                         <h3 style='font-size:20px; text-align:left;'>&nbspRegistration Fee:</h3>
									<p style='text-align:left;'>".$result['regfee']."</p>
                                                                         <h3 style='font-size:20px; text-align:left;'>&nbspRegistration Date:</h3>
									<p style='text-align:left;'>".$result['regdate']."</p>
                                                                        <h3 style='font-size:20px; text-align:left;'>&nbspPrize:</h3>
									<p style='text-align:left;'>".$result['prize']."</p>
                                                                         <h3 style='font-size:20px; text-align:left;'>&nbspEvent Timing:</h3>
									<p style='text-align:left;'>".$result['timing']."</p>
                                                                        
								</div>
							</div>
						</div



						

					</div>






			</div><br><br>";}
			echo"	</section>



<!---------------------en of events------------->";




?>





<?php
include('footer.php');	
?>


