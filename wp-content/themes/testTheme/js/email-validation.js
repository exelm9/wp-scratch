// Ajax for email validation


(function() {

	var emailForm = document.getElementById("emailForm");
	emailForm.addEventListener("submit", function(e) {
	  e.preventDefault();

	  var http;
	  var email = document.getElementById("email").value;
	  var params = "email=" + document.getElementById("email").value;

	  http = new XMLHttpRequest();

	  http.onreadystatechange = function(){
	  	if (http.readyState == XMLHttpRequest.DONE ) {
      	if(http.status == 200){
      		if(http.responseText === "1"){
      			document.getElementById("emailResponse").innerHTML = 'Valid Email!!!';
      		}else if(http.responseText === ""){
      			document.getElementById("emailResponse").innerHTML = 'Invalid Email...';
      		}
        	
        }else if(http.status == 400) {
        	alert("There was an error 400");
        }else {
        	alert("something else other than 200 was returned");
        }
      }
	  }

	  http.open("POST", 'wp-content/themes/testTheme/admin-ajax.php', true);
	  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  http.send(params);

	});


})();