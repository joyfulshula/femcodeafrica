<?php
	require_once 'header.php';
?>

<section class="view2 hm-black-light pt-4 mt-4">
	<div class="full-bg-img flex-center"><h1 class="bold">Support 1000 Ladies</h1></div>
</section>
<section id="about-fem-hub" >
    <div class="container">
        <div class="divider-new container">
            <h1 class="h1-responsive wow slideInUp text-center bold" data-wow-delay="0.2s">Support 1000 Ladies To Get Access To On Demand Tech And Digital Skills</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class=" m-3">
                    <img src="<?php echo MULTIPATH?>img/supportimg.png" class="img-fluid ">
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="card z-depth-5 shadow-lg p-3 mt-5">
                	<div class="pt-3">
                    	<h3><span class="badge badge-success">0%</span> <small>raised of <span class="badge badge-primary">&#8358;<?php echo  number_format(5000000)?></span> goal</small></h3>
                	    <div class="progress" style="height:10px">
						    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%;height:10px;">
						    </div>
						</div>
						<div>
					   		<span>0 Donors</span>
					   	</div>
					   	<hr>
					   	<div class="pt-3" id="donate">
			            	<h6 class="font-weight-bold">Direct To Bank Donations </h6>
			                Account Name : <strong class="font-weight-bold">FemCode Association </strong><br>
			                Account Number : <strong class="font-weight-bold">2142173741</strong><br>
			                Bank : <strong class="font-weight-bold">UBA</strong>
			            </div>
			            <hr>
			            <h6 class="font-weight-bold">Online Donations </h6>
					   	
				   	
			   			<div>
			   				<form action="#" id="pay" >
			   					<label>Enter Email:</label>
				   				<input type="email" placeholder="Email" id="email" class="pl-3 form-control" style="border:1px solid dodgerblue" required>

				   				<label>Please Enter Amount You Wish To Donate:</label>
				   				<input type="number" placeholder="Amount (minimum of 1000)" n id="amount" min="1000" class="form-control pl-3" style="border:1px solid dodgerblue" required>

				   				<button type="submit" id="pay" class="btn btn-myBtn btn-block">Donate Now (Online Channel)</button>
				   			</form>
			   			</div>
				   		
		        		
		        		<div class=" m-3">
		                    <img src="<?php echo MULTIPATH?>img/paystacksec.png" class="img-fluid ">
		                </div>
					    

						  
                    
	                </div>
	                
                </div>
                
            </div>
        </div>

        <div class="mt-3">
        		
			<h3 class="font-weight-bold">About This Fundraiser/Campaign</h3>

			<p>
				FemCode Africa is an organization centered on training women with on demand tech skills either for free or at a very low price through an initiative known as Fem-Boot (Female Boot-camp).
				<br><br>
				Over the years this boot-camp has been for FREE and has empowered over 1,700 women with tech skills ranging from web development, android app development and digital marketing.
				<br><br>
				The next batch of Fem-boot will be starting up by August 2020 and these ladies can not afford these trainings, so they need your help.
				<br><br>
				Each lady has a budget of #5,000 for 3 months to get them access to Courses, Data/Internet Access, Mentor-ship and Instructors.
			</p>

			<h3 class="font-weight-bold mt-3">DETAILED STATISTICS</h3>

				<p><span class="font-weight-bold">Problem : </span> Women need to get on demand skills in tech to remain relevant and indepedent in the society but most of them do not have the funding to access these trainings because they are quite expensive.</p>

				<p><span class="font-weight-bold">Our Solution :</span> We have partnered with mentors and instructors to deliver these trainings remotely to these women at a low price, reducing the cost of learning.
				Now we need your help to sponsor these ladies get these trainings.
				</p>

			<h3 class="font-weight-bold mt-3">Statistics</h3>

			<p>
				Total Number Of Women to be Trained : 1000 <br>
				Budgets For A Lady For the Learning Period Of 3 months : #5,000<br>
				
				Total Money Needed for Training/Resources: #5,000,000<br>
				<strong class="font-weight-bold">Other Expenses will be covered by FemCode Africa</strong>
			</p>

        	
        </div>
        <hr>
        <div class="py-3">
        	<h6 class="font-weight-bold">Direct To Bank Donations </h6>
            Account Name : <strong class="font-weight-bold">FemCode Association </strong><br>
            Account Number : <strong class="font-weight-bold">2142173741</strong><br>
            Bank : <strong class="font-weight-bold">UBA</strong>
        </div>
        <hr>
	   	<div  class="text-center pt-3">
			<a href="#donate" class="btn btn-myBtn btn-block">Donate Now (Online Channel)</a>
		</div>
		<div class=" m-3">
            <img src="<?php echo MULTIPATH?>img/paystacksec.png" class="img-fluid ">
        </div>
    </div>
</section>

<?php
	require_once 'footer.php';
?>