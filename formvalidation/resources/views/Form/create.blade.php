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
</head>  
<body>  
<form>  
  <div class="container">  
  <center>  <h1> Registeration Form</h1> </center>  
  <hr>  
  <label><b> User-Id</b> </label>   
<input type="text" name="userid" placeholder= "User-Id" size="20" required />
<label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat" required>
<label> Name </label>  
    <input type="text" placeholder="Enter Name" name="name" required>   
    <label>Current Address : </label> 
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required>  
</textarea>
<label> Country </label>  
    <input type="text" placeholder="Enter Country Name" name="country" required> 
    <label> Pin Code </label>
<input type="number" name="pincode" placeholder="Pin Code" size="6"/ required>
<div> 
<label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>   
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
<input type="number" name="phone" placeholder="phone no." size="10"/ required>
<div>
<label>About : </label> 
<textarea cols="80" rows="5" placeholder=" Write Something About Yourself" value="about" required>  
</textarea></div>
        
    <button type="submit" class="registerbtn">Register</button>    
</form>  

</body>  
</html>  