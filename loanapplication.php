<html>
<title>Loan Application Page </title>
<head>
  <style> 
    h2{
      text-align : center;
    }
    .container{
	height:675px; 
	width:800px; 
	align:center;
	background-color:white; 
	border: 3px solid black; 
	border-radius:80px;
	margin-left:auto;
	margin-right:auto;
	margin-top:50px;
	position: relative;
	display:block;	
}
	  input {
  display: inline-block;
 
}
</style>
  </head>
<body>
  <div class="container">
  <h1>Loan Application Form</h1>
  

  <form name="loanapplication">
    <hr style="border: 3px solid#04C5F9;" />
    <h2>Personal Information</h2><br>
     <hr style="border: 3px solid#04C5F9;" />
    <br><br> Name: <input type="text" name="firstname" placeholder="First Name"  required>
    <input type="text" name="lastname" placeholder="Last Name"  required>
    <br><br>Birth Date: <input type="date" name="bday" data-date-inline-picker="true">
    <br><br>Age: <input type="age" name="age">
    <br><br>Address: <input type ="address" name="address">
    <br><br>Email: <input type="email" name="emailaddress">
    <br><br>Mobile: <input type="tel" name="usrtel">
    
	  
     <hr style="border: 3px solid#04C5F9;" />
     <h2>Loan Information</h2><br>
     <hr style="border: 3px solid#04C5F9;" />
    <br><br> Loan Application Name: <input type="text" name="loanname"  required>
    <br><br>Loan Type: <select>
	  <option value="select">---Select---</option>
  
  <option value="vehicle">Vehicle loan</option>
  <option value="home">Home loan</option>
  <option value="marriage">Marriage loan</option>
<option value="marriage">Marriage loan</option>
	  <option value="education">Education loan</option>
	  <option value="farming">Farming loan</option>
	  <option value="capital">Working Capital loan	</option>
</select>
    <br><br>Loan Amount: <input type="amount" name="amount">
      
	  

  </form>
  </div>
</body>
</html>
