<html>
<head>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta http-equiv="content-type" content="text/html"; charset=utf-8>
	<script type="text/javascript">
		var torf = true;
				function showUser()
				{
				var str = document.getElementById("email").value;
				  xmlhttp=new XMLHttpRequest();

				  xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				    {
				    	if(xmlhttp.responseText!=""){
				    		document.getElementById("alert1").innerHTML=xmlhttp.responseText;
				    		document.getElementById("nameField").style.backgroundColor="#FFE7E7";
				    		torf = false;
				    	}
				    	else{
				    		document.getElementById("alert1").innerHTML='';
				    		document.getElementById("nameField").style.backgroundColor="";
				    		torf = true;
				    	}
				    	
				    }
				  }
				xmlhttp.open("GET","sameOrNot.php?q="+str,false);
				xmlhttp.send();
				}
				function myFunction(a) {
                    if (a.keyCode == 8) return true;
                    if (a.keyCode == 9) return true;
                    if (a.keyCode >= 48 && a.keyCode <=57 | a.keyCode >= 96 && a.keyCode<=105) return true;
                    return false;
                }
				function validation(){
					var email        = document.getElementById("email");
			        var password     = document.getElementById("password");
			        var conformation = document.getElementById("conformation");
					var check        = document.getElementById("checkBox").checked;
			        //for email
			        if(torf==false){
			        	return false;
			        }
			        if (email.value == ""){
			        	document.getElementById("alert1").innerHTML="Enter your 'Email'";
			        	document.getElementById("nameField").style.backgroundColor="#FFE7E7"; 
			        	return false;
			        }
			        else{document.getElementById("nameField").style.backgroundColor=""; 
			        	document.getElementById("alert1").innerHTML="";
			    		}

					var b = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					var truemail=b.test(email.value);
					if (!truemail){
						document.getElementById("alert1").innerHTML="Email is not true";
			        	document.getElementById("nameField").style.backgroundColor="#FFE7E7";
				        return false;
					}
					else{document.getElementById("nameField").style.backgroundColor=""; 
			        	document.getElementById("alert1").innerHTML="";
			    		}

					//for password
					if (password.value==""){
						document.getElementById("alert2").innerHTML="Enter your password <br> password length must be more than seven";
						document.getElementById("passwordField").style.backgroundColor="#FFE7E7";
			          	return false;
					}
					else{document.getElementById("passwordField").style.backgroundColor="";
						document.getElementById("alert2").innerHTML=''; }

					if ((password.value).length<7){
						document.getElementById("alert2").innerHTML="Password length must be more than 7 ";
						document.getElementById("passwordField").style.backgroundColor="#FFE7E7";
			          	return false;
			        }
			        else{document.getElementById("passwordField").style.backgroundColor="";
						document.getElementById("alert2").innerHTML=''; }
					mustletter=/[a-z]/.test(password.value);
					if (!mustletter){
						document.getElementById("alert2").innerHTML="In password must be one letter";
						document.getElementById("passwordField").style.backgroundColor="#FFE7E7";
					 	return false;
					}
					else{document.getElementById("passwordField").style.backgroundColor="";
						document.getElementById("alert2").innerHTML=''; }

					if (conformation.value==""){
						document.getElementById("alert3").innerHTML="You forget to write your conformation password";
						document.getElementById("confPasswordField").style.backgroundColor="#FFE7E7";
			          	return false;
					}
					else{document.getElementById('confPasswordField').style.backgroundColor="";
						document.getElementById('alert3').innerHTML='';
						}
					if (password.value!=conformation.value){
						document.getElementById("alert3").innerHTML="Conformation password not same";
						document.getElementById("confPasswordField").style.backgroundColor="#FFE7E7";
			          	return false;
					}
					else{
						document.getElementById('confPasswordField').style.backgroundColor="";
						document.getElementById('alert3').innerHTML='';
					}
					//###################################################------------------------------------------------------------**************************************

					if (!check){
						document.getElementById("alert4").innerHTML="You forget to check";
					   	document.getElementById("checkField").style.backgroundColor="#FFE7E7";
			          	return false;
					}
					else {
						document.getElementById('checkField').style.backgroundColor="";
			        	document.getElementById("alert4").innerHTML="";
			        }
					return true;
				}
				function validation1(){
					var email        = document.getElementById("email");
			        var password     = document.getElementById("password");
			        var conformation = document.getElementById("conformation");
					var check        = document.getElementById("checkBox").checked;
			        //for email

			        if (email.value == ""){
			        	document.getElementById("alert1").innerHTML="Enter your 'Email'";
			        	document.getElementById("nameField").style.backgroundColor="#FFE7E7"; 
			        }
			        else{document.getElementById("nameField").style.backgroundColor=""; 
			        	document.getElementById("alert1").innerHTML="";
			    		}

					var b = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					var truemail=b.test(email.value);
					if (!truemail){
						document.getElementById("alert1").innerHTML="Email is not true";
			        	document.getElementById("nameField").style.backgroundColor="#FFE7E7";
					}
					else{document.getElementById("nameField").style.backgroundColor=""; 
			        	document.getElementById("alert1").innerHTML="";
			    		}

					//for password
					if (password.value==""){
						document.getElementById("alert2").innerHTML="Enter your password <br> password length must be more than seven";
						document.getElementById("passwordField").style.backgroundColor="#FFE7E7";
					}
					else{document.getElementById("passwordField").style.backgroundColor="";
						document.getElementById("alert2").innerHTML=''; }

					if ((password.value).length<7){
						document.getElementById("alert2").innerHTML="Password length must be more than 7 ";
						document.getElementById("passwordField").style.backgroundColor="#FFE7E7";
			        }
			        else{document.getElementById("passwordField").style.backgroundColor="";
						document.getElementById("alert2").innerHTML=''; }
					mustletter=/[a-z]/.test(password.value);
					if (!mustletter){
						document.getElementById("alert2").innerHTML="In password must be one letter";
						document.getElementById("passwordField").style.backgroundColor="#FFE7E7";
					}
					else{document.getElementById("passwordField").style.backgroundColor="";
						document.getElementById("alert2").innerHTML=''; }

					if (conformation.value==""){
						document.getElementById("alert3").innerHTML="You forget to write your conformation password";
						document.getElementById("confPasswordField").style.backgroundColor="#FFE7E7";
					}
					else{document.getElementById('confPasswordField').style.backgroundColor="";
						document.getElementById('alert3').innerHTML='';
						}
					if (password.value!=conformation.value){
						document.getElementById("alert3").innerHTML="Conformation password not same";
						document.getElementById("confPasswordField").style.backgroundColor="#FFE7E7";
					}
					else{
						document.getElementById('confPasswordField').style.backgroundColor="";
						document.getElementById('alert3').innerHTML='';
					}
					//###################################################------------------------------------------------------------**************************************

					if (!check){
						document.getElementById("alert4").innerHTML="You forget to check";
					   	document.getElementById("checkField").style.backgroundColor="#FFE7E7";
					}
					else {
						document.getElementById('checkField').style.backgroundColor="";
			        	document.getElementById("alert4").innerHTML="";
			        }
					return true;
				}
			</script>
</head>
<?php include('header1.php'); ?>
<body style="background-color:#E7E7E7" onload="myFunction">
	<header id='registrDiv' >
		<div>
			<form onsubmit="return validation()" method="post" action="registr.php">
		<div id='emaill'>
			<div id = 'nameField'><input type="text" onkeyup="showUser()" name="email" placeholder="Ваш логин" id="email"/></br><div id='alert1'></div></div>
			<div id='em'>Логин</div></br></br>
		</div>
		<div id='passwordd'>		
			<div id='passwordField'><input type="password" onblur="validation()" name="password" placeholder="Ваш пароль" id="password"/><div id='alert2'></div></div>
			<div id='pass'>Пароль</div>
		</div>
		<div id='confPasswordd'>	
			<div id='confPasswordField'><input type="password" name="confPassword" onkeyup="validation()" placeholder="Павтор пароля" id="conformation"/><div id='alert3'></div></div>
			<div id='conf'>Павторите пароль</div>
		</div>
		<div id='checkk'>
			<div id='checkField'><input type="checkbox" id="checkBox" onblur="validation()"/><div id='alert4'></div></div>
			<div id='checked'>Согласие</div>
		</div>
		<div id='buttons'>
				<input type="submit" onClick="validation1()"/>
				<button onclick="window.location.href='main.php'">back</button>
		</div>
			</form>
		</div>
	</header>
</body>
<?php include('footer.php'); ?>
</html>