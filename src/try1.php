<?php
$cookie_name = "userName";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?><html>
<head>
    <script>
var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }
function putCookie(form)
                //this should set the UserName cookie to the proper value;
  {
   setCookie("userName", form[0].usrname.value);

    return true;
  }

  function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}  

function setUser(){

	var user = readCookie("userName");

	if (user == null){
		document.getElementById("monkey").style.display = "block";
	}
	else {
		document.getElementById("monkey").style.display = "none";
		document.getElementById("cname").value = user;
	}
 }
  </script>
</head>
<body  onload="setUser();">
<p></p>
<form>
 <input type="text" id="cname" value="Enter Your Nickname" name='cname'>

 <div id="monkey">Cookie</div>

 <input type="text" value="Enter Your Nickname" id="nameBox" name='usrname'>
 <input type="button" value="Go!" id="submit" onclick="putCookie(document.getElementsByTagName('form'));">
</form>
</body>

</html>
