<?php
/**
 * Created by JetBrains PhpStorm.
 * User: reymadrid
 * Date: 10/17/13
 * Time: 8:12 AM
 * To change this template use File | Settings | File Templates.
 */?>
 
<?php include_once 'header.php'; ?>  </header>
<!-- End Header and Nav -->

 
		 <section class="loginForm">
		 
			 <div class="row">
			 
			 <div class="large-6 large-centered columns">
					 
					 <form class="login" method="post">
					  <fieldset class="login">
					    <h2>Sign In</h2>
					
					    <div class="row">
					      <div class="large-12 large-centered columns">
					        <input type="text" placeholder="username">
					      </div>
					    </div>
					
					    <div class="row">
					      <div class="large-12 large-centered columns">				     
					        <input type="text" placeholder="password">
					     </div>
					    </div> 
					    
					    <div class="row">
						    
						      <div class="large-12  columns">
						        <input class="button success-dark radius" type="submit" value="Sign In" name="login" placeholder="large-12.columns">
						      </div>
						</div>
						
						<div class="row">
						     <div class="large-12 columns right">
						     	<br/>
							     <p>&nbsp;&nbsp; Don't have an account? <a href="signupform.php">&nbsp; Sign up</a></p>
						     </div>		     		      
					    <div>
					
					  </fieldset>
					</form>
			 </div>
			
			 </div>
		 </section>
		 
		 
		 
		 <footer> <?php include_once 'footer.php'; ?> </footer>


	</body>
 </html>