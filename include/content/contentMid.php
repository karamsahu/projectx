<!--Mid content area begins-->
<section class="mid-column"> 
 	<!--Connection to database begins-->
	<?php  
	$con1 = mysql_connect ("localhost","magicdietitian","Drgitika@2013") or die(mysql_error("failed to conect"));
	mysql_select_db("magicdietitian",$con1)or die(mysql_error("failed to select database"));
	$sql1="select * from contents ";
	$query1=mysql_query($sql1);
  ?>
	<!--connection to db ends-->


   	<!--Welcome content Area begins-->	
    <section class="mid-column">     
       <div id="product-wrapper" class="white-box clearfix">
		<h2> Welcome </h2>		
                <!--our content text -->
                <article>
				<p><?php
                while($row1=mysql_fetch_array($query1))
                {
                  print $image1=$row1 ['content']; 
                 //@$tittle=$row ['tittle']; 
                 }
                 ?></p>
                 </article>
        </div>
     </section>
   	<!--Welcome contnetn Area ends-->
 
     
   	<!--Our product Area begins--> 
    <section class="mid-column">
     	<div id="product-wrapper" class="white-box clearfix">
    	<h2>Our Products</h2>
            <?php  
        	$con = mysql_connect ("localhost","magicdietitian","Drgitika@2013") or die(mysql_error("failed to conect"));
        	mysql_select_db("magicdietitian",$con)or die(mysql_error("failed to select database"));
        	@$sql="select * from tbl_image ";
        	@$query=mysql_query($sql);
        	?>
        
            <?php
        		while(@$row=mysql_fetch_array($query))
        		{
        		 @$image=$row ['photo']; 
        		 @$tittle=$row ['tittle']; 
    		 ?>
            <figure>
            	<figcaption><?php echo @$tittle ?></figcaption>
            	<a href="admin/image/<?php echo @$image; ?>"><img src="admin/image/<?php echo @$image; ?>" width="150" height="100"></a>
                <a href="beautyProducts.php" class="read-more">Read More</a>
            </figure>
        <?php }  ?>
 		</div>
     </section>
  	<!--Our product Area ends-->

     
   	<!--How magic Works Area begins--> 
    <section class="mid-column">
        <div id="product-wrapper" class="white-box clearfix">
            <h2> How magic works ? </h2>
            <div>
            <div id="how-magic-works">
               <form action="" method="get">
                    <table border="0">
                          <tr>
                            <td align="center" style="font-size: 16px; font-weight: bold;">Step 1</td>
                            <td align="center" style="font-size: 16px; font-weight: bold;">Step 2</td>
                            <td align="center" style="font-size: 16px; font-weight: bold;">Step 3</td>
                            <td align="center" style="font-size: 16px; font-weight: bold;">Step 4</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="images/signUp.png"></td>
                            <td align="center"><img src="images/personalisedDiet.png"></td>
                            <td align="center"><img src="images/follow diet plan.png"></td>
                            <td align="center"><img src="images/achive goal.png"></td>
                          </tr>
                          <tr>
                            <td align="center" width="150" style="font-size: 16px; font-weight: bold;">Sign Up</td>
                            <td  align="center"width="150" style="font-size: 16px; font-weight: bold;">Get a Personalised Diet Plan</td>
                            <td  align="center" width="150" style="font-size: 16px; font-weight: bold;">Stick to the advice and diet plan</td>
                            <td align="center" width="150" style="font-size: 16px; font-weight: bold;">Loose weight and Achive goal</td>
                          </tr>
                          <tr>
                            <td align="center"><a class="iframe" href="//www.youtube.com/embed/fAUDWwjdIJY">Read More</a></td>
                            <td align="center"><a class="iframe" href="//www.youtube.com/embed/fAUDWwjdIJY">Read More</a></td>
                            <td align="center"><a class="iframe" href="//www.youtube.com/embed/fAUDWwjdIJY">Read More</a></td>
                            <td align="center"><a class="iframe" href="//www.youtube.com/embed/fAUDWwjdIJY">Read More</a></td>                           
                          </tr>
                    </table>
                </form>  
            <!--<a id="marqueeLink" class="group1" > <iframe width="740" height="315" src="//www.youtube.com/embed/fAUDWwjdIJY" frameborder="0" allowfullscreen></iframe></a>-->
            </div>
            
        </div>
    </section>
    <!--How magic workds  Area begins ends-->


	<!--Real people real story Area begins-->
    <section class="mid-column">
        <div id="product-wrapper" class="white-box clearfix">
            <h2> Real People Real Story </h2>
            <marquee>
            <table><tr>
            <td><a id="marqueeLink" class="group1" href="content/pic1.png" title=""><img src="content/pic1.png" height="150" width="150" BORDER="2" style="padding:2px" /></a></td>
            <td><a id="marqueeLink" class="group1" href="content/pic2.JPG" title=""><img src="content/pic2.JPG" height="150" width="150" BORDER="2" style="padding:2px" /></a></td>
            <td><a id="marqueeLink" class="group1" href="content/pic3.png" title=""><img src="content/pic3.png" height="150" width="150" BORDER="2" style="padding:2px" /></a></td>
            <td><a id="marqueeLink" class="group1" href="content/pic4.JPG" title=""><img src="content/pic4.JPG" height="150" width="150" BORDER="2" style="padding:2px" /></a></td>
            <td><a id="marqueeLink" class="group1" href="content/pic5.JPG" title=""><img src="content/pic5.JPG" height="150" width="150" BORDER="2" style="padding:2px" /></a></td>
            </tr></table>
            </marquee>
        </div>
    </section>
   	<!--Real people real sotry Area ends-->


	<!--Expert Words Area begins-->
    <section class="mid-column">
        <div id="product-wrapper" class="white-box clearfix">
            <h2> Expert Words </h2>
            <article>
            <div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-post" data-href="https://www.facebook.com/photo.php?fbid=1417276835190212&amp;set=a.1417276858523543.1073741828.1376806209237275&amp;type=1" data-width="725"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/photo.php?fbid=1417276835190212&amp;set=a.1417276858523543.1073741828.1376806209237275&amp;type=1">Post</a> by <a href="https://www.facebook.com/pages/Magicdietitian/1376806209237275">Magicdietitian</a>.</div></div>
            </article>
        </div>
    </section>               
	<!--Expert Words Area ends-->
               
 </section><!--closing of main mid section -->              
               
                
               
            