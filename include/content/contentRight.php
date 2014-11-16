           <aside class="side-column">
            	<div class="white-box">
                	<h2>Other Links</h2>
                	<ul>
                    	<li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="diet_plan.php">Diet Plans</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="testimonials.php">Success Stories</a></li>
                        <li><a href="store.php">Store</a></li>
						<li><a href="event.php">Events</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>  
                    </ul>
                </div>
               
                <figure class="ads1"> <a href="myAccount.php"><img src="images/looseFat.jpg" width="238" alt="looseFatNotMuscle">
                </a>
                </figure>
     <figure class="ads1">         
			<script language="JavaScript">
				function calculateBmi() {
				var weight = document.bmiForm.weight.value
				var height = document.bmiForm.height.value
				if(weight > 0 && height > 0){	
				var finalBmi = weight/(height/100*height/100)
				document.bmiForm.bmi.value = finalBmi
				if(finalBmi < 18.5){
				document.bmiForm.meaning.value = "That you are too thin."
				}
				if(finalBmi > 18.5 && finalBmi < 25){
				document.bmiForm.meaning.value = "That you are healthy."
				}
				if(finalBmi > 25){
				document.bmiForm.meaning.value = "That you have overweight."
					
				}
				}
				else{
				alert("Please Fill in everything correctly")
				}
				}
			</script>
			

			<!--bmi calculate button css-->

	   <div class="box member-login">
            <h2 style="color:#FFFFFF; font-size:18px; font-weight:bold">Calculate BMI</h2>
            <form name="bmiForm" class="clearfix">
                <p style="color:#FFF"><label>Your Weight(kg):</label><p> <input class="textBox" type="text" name="weight" size="10"><br />
                <p style="color:#FFF"><label>Your Height(cm):</label></p> <input class="textBox" type="text" name="height" size="10" ><br />
                <p style="color:#FFF"><label>Your BMI: </label></p> <input  disabled class="textBox" type="text" name="bmi" size="10" ><br />
                <p style="color:#FFF"><label>This Means:</label></p>	 <input  disabled class="textBox" type="text" name="meaning" size="25"><br />
                <input type="reset" value="Reset" id="login-button"/> 
                <input type="button" value="Calculate BMI" onClick="calculateBmi()" id="login-button" />
            </form>        			
   	   </div>
     </figure>

                <figure class="ads1"><img src="images/advertise-here.jpg" alt="Advertise Here"></figure>
                <figure class="ads"><img src="images/ayurveda_17.gif" width="228" height="162"></figure>
         </aside>
            
        </div>
    </section>
	