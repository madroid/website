window.onload = initLoginInterfacePage ;

var isRegistered = true ;
var success_img = "../img/form/success.png";
var error_img = "../img/form/error.png";

function initLoginInterfacePage(){
  document.getElementById("inputEmail").onblur = checkEmail;
  // document.getElementById("inputPassword").onblur = checkPassword;
  document.getElementById("button_sign_up").disabled = true ;
  document.getElementById("button_sign_in").onClick = userLogin ;
  document.getElementById("button_sign_up").onClick = userRegister;
  // $('#statusEmail').hide();
  // $('#statusPassword').hide();
}


function checkEmail(){
  
	request = createRequest();
	if(request==null){
		alert("No request object found !");
	}
	else{
    var email = escape(document.getElementById("inputEmail").value) ;
    if(email.length>0){
      var url = "checkEmail.php?email="+email;
      request.open("POST",url,true);
      request.onreadystatechange = checkIfMailExists ;
      request.send(null);
      // if(validateEmail(email)){
      //   $('#statusEmail').attr("src",success_img);
      //   $('#statusEmail').show();
      // }
      // else{
      //   $('#statusEmail').attr("src",error_img);
      //   $('#statusEmail').show();
      // }
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

function userLogin(){
  isRegistered = true ;
 var inputUsername = escape(document.getElementById("inputEmail").value);
 var inputPasswd = escape(document.getElementById("inputPassword").value);
 if(inputPasswd.length>0 && inputUsername.length>0){
  request = new createRequest();
  if(request!=null){
   var url = "login.php?email="+inputUsername+"&passwd="+inputPasswd;
   request.open("POST",url,true);
   request.onreadystatechange = myAccount ;
   request.send(null);
 }
}
else{
  alert("Please fill up the required fields!");
}

}

function userRegister(){
  isRegistered = false ;
 var inputUsername = escape(document.getElementById("inputEmail").value);
 var inputPasswd = escape(document.getElementById("inputPassword").value);
 var confirmPass = escape(document.getElementById("inputConfirm").value);
 if(inputPasswd.length>0 && inputUsername.length>0 && confirmPass.length>0){
  if(inputPasswd==confirmPass){
    var url = "register.php?email="+inputUsername+"&passwd="+inputPasswd;
  request.open("POST",url,true);
  request.onreadystatechange = myAccount ;
  request.send(null);
}
else{
  alert("Password don't match!");
}

}
else{
  alert("Please fill up the required fields!");
}

}

function myAccount(){
  if(request.readyState==4 && request.status==200){
    var jObj = JSON.parse(request.responseText);
    if(jObj.success=="1"){
      if(jObj.name!=null){
       document.getElementById("username").innerHTML=jObj.name;
      }
      else{
       document.getElementById("username").innerHTML="Friend"; 
      }

      $('#inputEmail').val("");
      $('#inputPassword').val("");
      if(!isRegistered){
        $('#inputConfirm').val("");
      }
      $('#signin').hide();
      $('#login_box').modal('hide');
    }
  }
}

function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

// function checkPassword(){
//   var len = $("#inputPassword").val().length;
//   if(len>5){
//         $('#statusPassword').attr("src",success_img);
//         $('#statusPassword').show();   
//   }
//   else if(len>0){
//         $('#statusPassword').attr("src",error_img);
//         $('#statusPassword').show();    
//   }
//   else{
//       $('#statusPassword').hide();    
//   }
// }

function demo(){
  alert("Running...");
}