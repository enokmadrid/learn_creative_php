<?php
/**
 * Created by JetBrains PhpStorm.
 * User: reymadrid
 * Date: 10/17/13
 * Time: 8:13 AM
 * To change this template use File | Settings | File Templates.
 */?>
 
  <?php include_once 'header.php'; ?>  </header>
  
  
  <section class="library">
	 <div class="row">
	 
		  <div class="large-12 columns vid">
			  <br/>
			  <h1>Video Title</h1>
		  </div>
		  
	 </div>
	 
	 <div class="row">
		 
		 <div class="large-12 large-centered columns">
			  <div class="panel">
			  	
			  	<video width="930" height="523" poster="images/video.png" controls>
				  	<source src="videos/learn_creative.mp4" type="video/mp4">
				  	<source src="videos/learn_creative.ogv" type="video/ogg">
				  	<source src="videos/learn_creative.webm" type="video/webm">
				  	Your browser does not support the video tag.
			  	</video>
			  	
			  </div>
			  
		 </div>
	 
	 </div>
	 
	 <div class="row">
		<div class="large-2 columns">
			&nbsp;
		 </div> 
		 <div class="large-6 columns">
		 	<p class="right"><strong>Video Id: &nbsp; &nbsp;</strong>#1<strong>
		 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 	Subject: &nbsp; &nbsp;</strong>Art</p>
		 </div>
		 <div class="large-4 columns right">
		 	<input class="button alert-dark radius crud right" type="submit" value="Delete" name="delete">
			<input class="button secondary radius crud right" type="submit" value="Edit" name="edit">
		 </div>
	 </div>
	 <br/><br/><br/>
  </section>
  
  
  
		
		<footer> <?php include_once 'footer.php'; ?> </footer>
	</body>
</html>