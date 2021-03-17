<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style> 
<script>
function validateForm() {
  var x1 = document.forms["myForm"]["userId"].value;
  var x2 = document.forms["myForm"]["password"].value;
  var x3 = document.forms["myForm"]["name"].value;
  var x4 = document.forms["myForm"]["country"].value;
  var x5 = document.forms["myForm"]["pincode"].value;
  var x6 = document.forms["myForm"]["myEmail"].value;
  var x7 = document.forms["myForm"]["phone"].value;

  var error1 = document.getElementById("error1");
  var error2 = document.getElementById("error2");
  var error3 = document.getElementById("error3");
  var error4 = document.getElementById("error4");
  var error5 = document.getElementById("error5");
  var error6 = document.getElementById("error6");
  var error7 = document.getElementById("error7");

  if (((x1.length)<5) || ((x1.length)>20)) {
    error1.textContent = "User-Id must be between 5 to 20 characters"; 
    error1.style.color = "red"; 
    return false;
  } else { 
            error1.textContent = ""; 
        } 
  if (((x2.length)<5) || ((x2.length)>20)) {
       error2.textContent = "Password must be between 5 to 20 characters"; 
       error2.style.color = "red"; 
    return false;
  }  else { 
            error2.textContent = ""; 
        } 
  if (x3 == "") {
    error3.textContent = "Please fill your Name"; 
    error3.style.color = "red"; 
    return false;
  }  else { 
            error3.textContent = ""; 
        } 
  if (x4 == "") {
    error4.textContent = "Please fill the Country's Name"; 
    error4.style.color = "red";   
    return false;
  }  else { 
            error4.textContent = ""; 
        } 
  if ((x5.length)==6) {
    error5.textContent = "Please fill your area pin code"; 
    error5.style.color = "red"; 
    return false;
  }  else { 
            error5.textContent = ""; 
        } 
  if (x6 == "") {
    error6.textContent = "Please fill your correct Email id"; 
    error6.style.color = "red"; 
    return false;
  }  else { 
            error6.textContent = ""; 
        } 
  if ((x7.length)==10) {
    error7.textContent = "Please Enter a valid Mobile no."; 
    error7.style.color = "red"; 
    return false;
  }  else { 
            error7.textContent = ""; 
        } 
}
</script> 
</head>  
<body>  
<form name="myForm"  onsubmit="return validateForm()" methord="post">  
  <div class="container">  
  <center>  <h1> Registeration Form</h1> </center>  
  <hr>  
  <label><b> User-Id</b> </label>   
<input type="text" name="userid" placeholder= "User-Id" size="20" id="userId" /><p id="error1"></p>
<label ><b>Password</b></label>  
    <input type="password" name="password" placeholder="Enter Password" id="password" ><p id="error2"></p>
<label> Name </label>  
    <input type="text" placeholder="Enter Name" name="name" id="name"> <p id="error3"></p>  
    <label>Current Address : </label> 
<textarea cols="80" rows="5" placeholder="Current Address" value="address" >  
</textarea>
<label> Country </label>  
    <input type="text" placeholder="Enter Country Name" name="country" id="country"><p id="error4"></p> 
    <label> Pin Code </label>
<input type="number" name="pincode" placeholder="Pin Code" size="6"/ id="pincode"><p id="error5"></p>
<div> 
<label for="email"><b>Email</b></label>  <p id="emailverify"></p>
 <input type="text" placeholder="Enter Email" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">  <p id="error6"></p> 
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
</div>  
 
 <div>  
<label>   
Country Code :  
</label>   
<select>  
<option value="Course">Country Code :</option>  
<option value="+90">+90</option>  
<option value="+91">+91</option>  
<option value="+92">+92</option>  
<option value="+93">+93</option> 
</select></div>  
<label> Contact No </label>
<input type="number" name="phone" placeholder="phone no." size="10"/ ><p id="error7"></p>
<div>
<label>About : </label> 
<textarea cols="80" rows="5" placeholder=" Write Something About Yourself" value="about" >  
</textarea></div>
        
    <button type="submit" class="registerbtn" >Register</button>    
</form>  

</body>  
</html>  