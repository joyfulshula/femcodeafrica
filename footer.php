<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-d7709e71-42b2-4e62-9915-4e454ce2d81a"></div>
</div>
<!--/ Main container-->


<!--Footer-->
<footer class="page-footer center-on-small-only wow slideInUp" data-wow-delay="0.2s" style="background-color: #000066">

	<div class="container">
		<div class="row">
			<div class="col-lg-4 ml-auto">
				<h5 class="titles font-bold mt-3 mb-4"><?php echo FULL_NAME?></h5>
				<p>FemCode Africa is your No.1 Virtual Hub with the vision of educating and empowering all females across Africa with on demand tech skills for free or at very affordable prices without them having to leave the comfort of their homes.
                </p>
			</div>
			
			<div class="col-lg-4 ml-auto">
				<h5 class="title font-bold mt-3 mb-4">Useful Links</h5>
				<div class="row">
					<div class="col-md-6">
						<p><a href="<?php echo SITEURL?>home">Home</a></p>
						<p><a href="<?php echo SITEURL?>about">About Us</a></p>
						<p><a href="<?php echo SITEURL?>fem-boot">Fem Boot</a></p>
						<p><a href="<?php echo SITEURL?>fem-hub">Fem Hub</a></p>
						<p><a href="<?php echo SITEURL?>fem-lancer">Fem Lancer</a></p>
						<p><a target="_blank" href="https://femcodeafrica.org/blog/" >Blog/Updates</a></p>
					</div>
					<div class="col-md-6">
						<p><a href="<?php echo SITEURL?>offers">Offers</a></p>
						<p><a href="<?php echo SITEURL?>tte">Teach To Earn</a></p>
						<p><a href="<?php echo SITEURL?>courses">Courses/Books</a></p>
						<p><a href="<?php echo SITEURL?>affiliate">Become An Affliate</a></p>
						<p><a href="<?php echo SITEURL?>sponsor">Sponsor/Partner</a></p>
						<p><a target="_blank" href="<?php echo SITEURL?>support">Fundraiser</a></p>
						
					</div>
				</div>

			</div>

			<div class="col-lg-4">
				<h5 class="title font-bold mt-3 mb-4">Contact Us</h5>
				<p><i class="fa fa-map-marker pr-3"></i> <?php echo CONTACT_ADDRESS?></p>
				<p><i class="fa fa-phone pr-3"></i> <?php echo CONTACT_PHONE?></p>
				<p><i class="fa fa-phone pr-3"></i> <?php echo CONTACT_PHONE2?></p>
				<p><i class="fa fa-envelope pr-3"></i> <?php echo CONTACT_EMAIL?></p>
			</div>

		</div>
	</div>

	<hr>

	<div class="call-to-action text-center">
		<h4 class="mb-3"><small>Follow us on social media</small></h4>
		<nav class="pb-4">
			<a target="_blank" href="https://www.facebook.com/FemCodeAfrica/"><i class="fa fa-facebook-square fa-2x px-1"></i></a>
			<a target="_blank" href="https://twitter.com/femcodea"><i class="fa fa-twitter-square fa-2x px-1"></i></a> 
			<a target="_blank" href="https://www.linkedin.com/company/femcode-africa"><i class="fa fa-linkedin-square fa-2x px-1"></i></a> 
			<a target="_blank" href="https://www.instagram.com/fem_code/"><i class="fa fa-instagram fa-2x px-1"></i></a>
			<a target="_blank" href="https://wa.me/2349017434810"><i class="fa fa-whatsapp fa-2x px-1"></i></a>
		</nav>
	</div>

	<div class="footer-copyright">
		<div class="container-fluid text-center p-2">
			© <?php echo date('Y'); ?> Copyright: <a href="#"> <?php echo FULL_NAME?> </a>
		</div>
	</div>
<!-- 
	<div class="footer-copyright">
		<div class="container-fluid text-center p-2">
			<h6 class="pt-2">Developed by <strong><a href="https://rad5.com.ng" class="pink-text">RAD5 Developers</a></strong></h6>
		</div>
	</div> -->
</footer>



	<script type="text/javascript" src="<?php echo MULTIPATH?>js/compiled.min.js"></script> 
	<script type="text/javascript" src="<?php echo MULTIPATH?>js/easing.js"></script>
	<script type="text/javascript" src="<?php echo MULTIPATH?>js/fancybox.min.js"></script>
	<script type="text/javascript" src="<?php echo MULTIPATH?>js/money.min.js"></script>
	<script type="text/javascript" src="<?php echo SITEURL?>server/js/request.js"></script>

	<script src="https://js.paystack.co/v1/inline.js"></script>
  <script type="text/javascript">

    function payWithPaystack(amount,email){
      var handler = PaystackPop.setup({
        key: 'pk_live_fda833baac0caa7c334da03c5e4b8f6d3c095b5a',
       	email: email,
        amount: amount,
        metadata: {
           custom_fields: [
              {
                  display_name: $('#email').val()
                  // variable_name: "link",
                  // value: link
              }
           ]
        },
        callback: function(response){
            alert("Thank you for your support, It will go a long way to help train Females across Africa")
        },
        // onClose: function(){
        //     alert('window closed');
        // }
      });
      handler.openIframe();
  }

    $('#pay').submit(function (e) {
      e.preventDefault();
   
       var email = $('#email').val();

      // var link = $('#link').val();
      var amt = 100 * $('#amount').val();

      payWithPaystack(amt,email);
    });
</script>

	<!-- Animations init-->
	<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#blah')
					.attr('src', e.target.result);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}

	// SideNav Initialization
	$(".button-collapse").sideNav();
	new WOW().init();  

	$(function () {
		$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
	});

	$(document).ready(function(){
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
		});

		$(".zoom").hover(function(){

			$(this).addClass('transition');
		}, function(){

			$(this).removeClass('transition');
		});
	})

	 // ****counter****

	var counters = $(".countis");
	  var countersQuantity = counters.length;
	  var counter = [];

	  for (i = 0; i < countersQuantity; i++) {
	    counter[i] = parseInt(counters[i].innerHTML);
	  }

	  var count = function(start, value, id) {
	    var localStart = start;
	    setInterval(function() {
	      if (localStart < value) {
	        localStart++;
	        counters[id].innerHTML = localStart;
	      }
	    }, 1);
	  }

	  for (j = 0; j < countersQuantity; j++) {
	    count(0, counter[j], j);
	}
	 // end of counter


	
</script>

</body>
</html>

