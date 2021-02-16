	new WOW().init();

	$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


function validateForm() {

	const form = document.getElementById("form")
	const email = document.getElementById("form-email").value;
	const text = document.getElementById("text");
	const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

		if(email.match(pattern)) {
			form.classList.add("valid");
			form.classList.remove("invalid");
		}else {
			form.classList.remove("valid");
			form.classList.add("invalid");
			text.innerHTML = "Please enter a Valid Email Address";
			text.style.color= "black";
		}
		if(email == "") {
			form.classList.remove("valid");
			form.classList.add("invalid");
		}
}
