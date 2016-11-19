
<?php
include('header.php');	

?>



<section class="api-map" id="contact" >
				<div class="container-fluid" >
					<div class="row">
						<div class="col-md-12 map" id="map" ></div>
					</div>
				</div>
			</section><!-- end of map section -->

			<!-- contact section starts here -->
			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>online registration</h2>
								</div>

								

								<div class="col-md-6 col-md-offset-1 contact-form">
									<h3>Fill this information</h3>

									<form class="form" method='post' action='reg.php' name='form'>
										
										<input class="name" type="text" placeholder="College/School/Org. Name*" name='cname' required='true'>
										<input class="name" type="text" placeholder="Collage/School/Org. Address*" name='cad' required='true'>
										<input class="name" type="text" placeholder="Your Name*" name='name' required='true'>
                                         <input class="email*" type="email" placeholder="Email" name='mail'>
										<input class="phone" type="text" placeholder="Phone No:*" name='no' required='true'>
                                                                                <select class="name"  placeholder="" name='year'>
																				 <option value='____'>Year/class(if applicable)</option>
                                                                                <option value='1st'>1st</option>
                                                                                <option value='2nd'>2nd</option>
                                                                                <option value='3rd'>3rd</option>
                                                                                <option value='4th'>4th</option></select>

                                                                                <select class="name"  placeholder="Select Event" name='event' required='true'>
                                    <?php         
                                            // Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
                                             require_once('connect.php');


                                             // Selecting Database
                                              mysql_select_db($database_localhost,$link);
                                                 $result=mysql_query("SELECT * FROM event",$link); 

                                                  while($row=mysql_fetch_assoc($result))
                                                         {
                                                                 echo"<option>".$row['name']."</option>";  }
                                   

                                               ?>
                                                                                </select>
										<select class="name"  placeholder="" name='rtype' required='true'>
                                                                                <option value='Team leader'>Register as team leader</option>
                                                                                <option value='Single'>Single registration</option></select>
                                                                             
										<textarea class="message" name="members" id="message" cols="30" rows="10" placeholder="Enter registration numbers of team members if any, not required in single registration" ></textarea>
										<input class="submit-btn" type="submit" value="SUBMIT" name='form' >
                                                                               
									</form>
								</div>









                                                         <div class="col-md-5 contact-info text-left">
									<h3>Instructions </h3>

									<ul>
                                                                       <li><br>1. Register for each event seperately.</li>
                                                                       <li><br>2. Number of team members are limited to event type ,so check the limit before filling in the names.</li>
                                                                       <li><br>3. Only team leader has to include member names and team members can register normally.</li>
                                                                       <li><br>4. Team members has to registered seprately as well.</li>
                                                                       <li><br>5. Print out the registration form and get signed by your college/School/Org. authority.</li>
                                                                       <li><br>6. Submit the form along with registration fee and also take identity cards with yourself for verification.</li>
                                                                          </ul>
								</div>




							</div>
					</div>
				</div><br><br>
			</section><!-- end of contact section -->



<!-- footer starts here -->
			<footer class="footer clearfix" style='margin-top:200px;'>
				<div class="container">
					<div class="row">
						<div class="col-xs-6 footer-para">
							<p>By Shubham Verma, Kamal Kant CSE 8th SEM</p>
						</div>

						<div class="col-xs-6 text-right">
							<a href="https://www.facebook.com/sirda.institute/socialcontext?refid=17"><i class="fa fa-facebook"></i></a>
							
						</div>
					</div>
				</div>
			</footer>



	

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>

