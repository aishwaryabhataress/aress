<html>
  <head>
    <title>Create Customer</title>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
       .container{
	        height:1500 px; 
	        width:850px; 
	        align:center;
	        background-color:white; 
	        border: 3px solid black; 
	        margin-left:auto;
	        margin-right:auto;
	        margin-top:50px;
	        position: relative;
	        display:block;	
}
    </style>
    
  </head>
  <body>
    <form method="POST" >
      <div class = "container">
          <div style="display:inline-block;width:100%;">
      		    <div style="width:25%; float: left; text-align:right;">
	       		      <label for="firstname">Name</label> 
		          </div>
		          <div style="width:20%;float:left;"> 
			            <input type="text" name="firstname" placeholder="First Name"  required>
		          </div>
		          <div style="width:15%;float:left; padding-left:150px;"> 
			            <input type="text" name="lastname" placeholder="Last Name"  required>
		          </div>
	        </div>
      </div>
    </form>
  </body>
</html>
