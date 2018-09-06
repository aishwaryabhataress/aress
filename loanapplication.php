<html>
<title>Loan Application Page </title>
<head>
  <style> 
    h2{
      text-align : center;
    }
    #fft.single-fft #header .template_box__inner {
    position: absolute;
    width: 100%;
    height: calc(100% - 47px);
    margin: 0 auto;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    overflow-y: scroll;
}
</style>
  </head>
<body>
  <div class="template_box__head">
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
    

  </form>
  </div>
</body>
</html>
