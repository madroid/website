window.onload = initLoginInterfacePage ;

var isRegistered = true ;
var email = "0";
function initLoginInterfacePage(){
  document.getElementById("inputEmail").onblur = checkEmail;
  document.getElementById("button_sign_up").disabled = true ;
}


function checkEmail(){
  
	request = createRequest();
	if(request==null){
		alert("No request object found !");
	}
	else{
    var email = escape(document.getElementById("inputEmail").value) ;
    if(email.length>0){
      var url = "../backend/checkEmail.php?email="+email;
      request.open("POST",url,true);
      request.onreadystatechange = checkIfMailExists ;
      request.send(null);
    }
    else{
      // $('#statusEmail').hide();
    }
  }
}


function checkIfMailExists(){
  if((request.readyState == 4) && (request.status == 200)){
    if(request.responseText!="1"){
      document.getElementById("button_sign_up").disabled = false ;
      document.getElementById("button_sign_in").disabled = true ;
      document.getElementById("login_title").innerHTML = "<h3 class=\"login_form\">Sign up</h3>";
      if(document.getElementById("confirm")==null){
        addEdittext("inputForm");  
      }
    }
    else{
      document.getElementById("button_sign_up").disabled = true ;
      document.getElementById("button_sign_in").disabled = false ; 
      document.getElementById("login_title").innerHTML = "<h3 class=\"login_form\">Sign in</h3>";
      if(document.getElementById("confirm")!=null){
        removeEdittext("inputForm");
      }
    }
  }
}

function addEdittext(divID){
  var newdiv = document.createElement('div');
  newdiv.id = "confirm";
  newdiv.innerHTML = "<div class=\"control-group\"><label class=\"control-label\" for=\"inputConfirm\">Confirm Password</label><div class=\"controls\"><input type=\"password\" name=\"confirm_passwd\" id=\"inputConfirm\" placeholder=\"Confirm your password\"></div></div>";  
  document.getElementById(divID).appendChild(newdiv);
}

function removeEdittext(divID){
  var confirmPass = document.getElementById("confirm") ;
  document.getElementById(divID).removeChild(confirmPass);
}
	function userlogin1(){

		if(isLoggedin=="0"){
			$('#login_box').modal('show');
		}
		else{
			window.location.href = "profile.php" ;
		}
		

	}

	function set_email(email){

	}


	function signin(){
		var inputUsername = $.trim($("#inputEmail").val());
		var inputPasswd = $.trim($("#inputPassword").val());
		
		$.ajax({
			type:"POST",
			url:"../backend/login.php",
			async:false,
			data:"email="+inputUsername+"&passwd="+inputPasswd,
			success:function(json){
				$('#login_box').modal('hide');
				var jobj = JSON.parse(json);
				$('body').prepend('<div id="profile_header"><div id="profile_header1"><span class="profile_header"><a href="home2.php">Home</a></span><div class="separator">&nbsp;</div><span class="profile_header"><a href="profile.php">Profile</a></span></div></div>');
				$("#profile_header1").hide();
				$("#profile_header1").slideDown();
				isLoggedin = "1";
			}
		});
	}

	function signup(){
		var inputUsername = $.trim($("#inputEmail").val());
		var inputPasswd = $.trim($("#inputPassword").val());
		var confirmPass = $.trim($("#inputConfirm").val());
		if(inputPasswd.length>0 && inputUsername.length>0 && confirmPass.length>0){
  	if(inputPasswd==confirmPass){
		
	 	$.ajax({
			type:"POST",
			url : "../backend/register.php",
			async:false,
			data: "email="+inputUsername+"&passwd="+inputPasswd,
			success:function(json){
				$('#login_box').modal('hide');
				var jobj = JSON.parse(json);
				$('body').prepend('<div id="profile_header"><div id="profile_header1"><span class="profile_header"><a href="home2.php">Home</a></span><div class="separator">&nbsp;</div><span class="profile_header"><a href="profile.php">Profile</a></span></div></div>');
				$("#profile_header1").hide();
				$("#profile_header1").slideDown();
				isLoggedin = "1";
			}
		});   
  
	}
	else{
  		  alert("Password don't match!");
	}

	}
	else{
	  alert("Please fill up the required fields!");
	}


	}
