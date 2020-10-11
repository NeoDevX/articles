$(function() {

	let url = window.location.href;
	if (url == "http://localhost:3000/articlesAndAboutMe/app/index.php")
	{
		$('ul li a.about').removeClass('active');
		$('ul li a.home').addClass('active');
	}
	else
	{
		$('ul li a.home').removeClass('active');
		$('ul li a.about').addClass('active');
	}

});


// window.addEventListener('load', function(){

// 	var btnContainer = document.getElementsByClassName("collapse");

// 	// Get all buttons with class="btn" inside the container
// 	var btns = document.getElementsByClassName("nav-link");

// 	// Loop through the buttons and add the active class to the current/clicked button
// 	for (var i = 0; i < btns.length; i++) {
// 	  btns[i].addEventListener("click", function() {
// 	    var current = document.getElementsByClassName("active");
// 	    current[0].className = current[0].className.replace(" active", "");
// 	    this.className += " active";
// 	  });
// 	}
// });