<?php
 include_once("./header.php");
?>
<section class="container-fluid bg-secondary lineHeight" >
	<div class="container">
		<h2 class="text-center text-white p-5">Contact Us</h2>
	</div>
</section>
<section class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="bg-light" style="padding: 10px">
					
					<div class="row">
						<div class="col">
							<label class="text-dark h5">First Name</label>
						    <input type="text" required class="form-control" placeholder="First name">
						</div>
						<div class="col">
						   <label class="text-dark h5">Last Name</label>
						   <input type="text" required class="form-control" placeholder="Last name">
						</div>
					</div>
		    		<br>
				    <div class="row">
					    <div class="col">
					    	<label class="text-dark h5">Email</label>
					    	<input type="email" class="form-control" placeholder="examplel@mail.com">
					    </div>
				    </div>
		    		<br>
				  	<div class="row">
					    <div class="col">
					    	<label class="text-dark h5">Mobile Number</label>
					      	<input type="text" class="form-control">
					    </div>
					    <div class="col">
					    	<label class="text-dark h5">Current City</label>
					     	<input type="text" class="form-control">
					    </div>
				  	</div>
		    		<br>
				    <div class="row">
					    <div class="col">
					    	<label class="text-dark h5">Interested Country</label>
					        <select class="form-control">
					      		<option>Selcet Option</option>
					        </select>
					    </div>
					    <div class="col">
					    	<label class="text-dark h5">Interested Program</label>
					        <select class="form-control">
					      		<option>Selcet Option</option>
					      </select>
					    </div>
				    </div>
		    		<br>
				  	<div class="row">
					    <div class="col">
					    	<label class="text-dark h5">Interested Specialization</label>
					        <input type="text" class="form-control" >
					    </div>
					    <div class="col">
					    	<label class="text-dark h5">Interested University</label>
					        <input type="text" class="form-control">
					    </div>
				  	</div>
		  			<br>
				  	<div class="row">
					  	<div class="col-md-4">
					  		<label class="text-dark h5">Comment: </label>
					  	</div>
					    <div class="col-md-8">
					  		<textarea class="textArea" cols="48"></textarea>
					  	</div>
				  	</div>
		  			<br>
		  			<button class="btn btn-success">Submit</button>
				</form>
			</div>

			<div class="col-md-6 ">
                <div class="col-md-12 bg-dark p-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496723.66068468!2d85.84616609221882!3d23.44207584900966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1586696138398!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border-radius:30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <p class="h6 text-design p-2">Two Logan Square <br>Suite #820 <br>Philadelphia ,Pa 19103</p>
                <p class="h6 text-design text-primary p-2">info@domain.com</p>
			</div>
		</div>
			
		
	</div>
</section>
<br><br>

<?php
 include_once("./footer.php");
?>

