<html>
<title>Loan Application Page </title>
<head>
  <style> 
    p {
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
}
     #form * {
    box-sizing: border-box;
}
    #form div[data-role=control] p {
    font-size: 1em;
}
</style>
  </head>
<body>
  <h1>Loan Application Form</h1>
  <p>Please fill in all needed information in the loan application form below to request a loan from your organization. Information regarding income assets are requested for qualification. If you have questions on how to fill this loan application form, feel free to contact the Loan Officer or any other member of the Loan Department.</p>
<hr style="border: 3px solid#04C5F9;" />
  <form name="loanapplication">
    Personal Information
    Please complete the form below to submit your loan application online. Your application is secure and we do not share any of your information.
   <br><br> Name: <input type="text" name="firstname" placeholder="First Name"  required>
    <input type="text" name="lastname" placeholder="Last Name"  required>
    <br><br>Birth Date: <input type="date" name="bday" data-date-inline-picker="true">
    <br><br>Age: <input type="age" name="age">
    <br><br>Address: <input type ="address" name="address">
    <br><br>Email: <input type="email" name="emailaddress">
    <br><br>Mobile: <input type="tel" name="usrtel">
    

  </form>

</body>
</html>
