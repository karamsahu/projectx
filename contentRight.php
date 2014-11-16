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
			<script type="text/javascript">				
				function calculateWeight(txtWeight, txtFeet, txtInch, txtAge){
					var sex ; 
					var weight = txtWeight * 2.20462;
					var inch= txtInch;
					var height = txtFeet*12 + parseInt(txtInch);
					//alert("weight in poud"+weight);
					//alert("height:"+height);
					//checking which radio button is pressed.
					if(document.getElementById("male").checked==true){
						sex = "male";
					}else{
						sex = "female";
					}
					// calculating bmi
						var bmi = weight / (height * height)*703;
						if(bmi>=18.9 && bmi <= 24.9){
						 	alert("BMI : " +bmi + " Congratulations ! You have normal weight !");
						}else if(bmi >= 25 && bmi < 29.8){
							alert("BMI : " + bmi +" You are Underweight ! ");
						}else if(bmi>30){
							alert("BMI : "+bmi+ "You are Overweight ");
						}else if(bmi<18.9){
							alert("BMI : "+bmi+" You are underweight");
						}
				}
			</script>	
			

			<!--bmi calculate button css-->

	   <div class="box member-login">
            <h2 style="color:#FFFFFF; font-size:18px; font-weight:bold">Calculate BMI</h2>        	
        	<form style="color:#FEEBDE" >
        	<table>
            	<tr>
                	<td><label >Gender</label></td>
                	<td><input style="color:#FFFFFF; font-size:12px;" type="radio" name="sex" id="male" value="male"  >Male</td>
                	<td><input type="radio" name="sex" id="female" value="female" >Female</td>
                </tr>
                <tr>
                	<td><label>Weight</label></td>
                	<td colspan="2"><input type="text" name="txtWeight" placeholder="Kgs." /></td>
                    <td></td>
                </tr>
                <tr>
                	<td><label>Height	</label></td>
                	<td><input type="text"  name="txtFeet" placeholder="feet" style="width:85px"/></td>
                    <td><input type="text" style="width:40px" name="txtInch" placeholder="inch"/></td>
                </tr>
               
                <tr>
                	<td><label>Age</label></td>
                	<td colspan="2"><input type="text"  name="txtAge" placeholder="Years" style="width:85px " /></td>
					<td></td>
                </tr>
                
                <tr>
                    <td colspan="3"><input class="classname" value="Calculate" onclick="calculateWeight(txtWeight.value, txtFeet.value, txtInch.value, txtAge.value)" type="button" /></td>
                	<td></td>
                	<td></td>
                </tr>
                
                <tr>
                	<td></td>
                    <td><div id="weight-calculator-result"></div></td>
                    <td></td>
                    
                </tr>
                
            </table>
        </form>
		
   	   </div>
     </figure>

                <figure class="ads1"><img src="images/advertise-here.jpg" alt="Advertise Here"></figure>
                <figure class="ads"><img src="images/ayurveda_17.gif" width="228" height="162"></figure>
         </aside>
            
        </div>
    </section>
	