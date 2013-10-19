<?php
/**
 * Created by JetBrains PhpStorm.
 * User: reymadrid
 * Date: 10/17/13
 * Time: 8:12 AM
 * To change this template use File | Settings | File Templates.
 */?>
 
<?php include_once 'header.php'; ?>  </header>


 
		 <section class="loginForm">
		 
		 <div class="row">
		 
		 <div class="large-6 large-centered columns">
				 
				 <form class="login" method="post">
				  <fieldset class="login">
				    <h2>Sign Up</h2>
				    
				    <div class="row">
				    
				      <div class="large-6 columns">
				        
				        <input type="text" placeholder="First Name">
				      </div>
			
				      <div class="large-6 columns">
				        
				        <input type="text" placeholder="Last Name">
				      </div>				      				      
				      
				    </div>
				    
				    
				    <div class="row">
				      <div class="large-12 large-centered columns">
				        
				        <input type="email" placeholder="Email Address">
				      </div>
				    </div>
				
				    <div class="row">
				      <div class="large-12 large-centered columns">
				        
				        <input type="password" placeholder="password">
				     </div>
				    </div> 
				    
				    <div class="row">
					    
					      <div class="large-12  columns">
					        <input class="button success-dark radius" type="submit" value="Sign Up" name="login" placeholder="large-12.columns">
					      </div>
					</div>
					
					<div class="row">
					     <div class="large-12 columns right">
					     	<br/>
						     <p>&nbsp;&nbsp; Already have an account? <a href="loginform.php">&nbsp; Sign in</a></p>
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