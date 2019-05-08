<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
 <head> 
  <title>Free Funky 404 for Website Template | 404Pagefree.com</title> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <!-- <link href="//fonts.googleapis.com/css?family=Capriola" rel="stylesheet" type="text/css" />  -->
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<style type="text/css">
body{
	font-family: 'Capriola', sans-serif;
}
body{
	background:#DAD6CC;
}	
.wrap{
	margin:0 auto;
	width:1000px;
}
.logo h1{
	font-size:200px;
	color:#FF7A00;
	text-align:center;
	margin-bottom:1px;
	text-shadow:4px 4px 1px white;
}	
.logo p{
	color:#B1A18D;
	font-size:20px;
	margin-top:1px;
	text-align:center;
}	
.logo p span{
	color:lightgreen;
}	
.sub a{
	color:#ff7a00;
	text-decoration:none;
	padding:5px;
	font-size:13px;
	font-family: arial, serif;
	font-weight:bold;
}	
.footer{
	color:white;
	position:absolute;
	right:10px;
	bottom:10px;
}	
.footer a{
	color:#ff7a00;
}

@media (max-width:1024px) {
	.logo h1 {
		font-size: 170px;
		margin-top: 140px    
	}
	.wrap {
		width:100%;
	}
	.footer {
		font-size:14px;
		line-height: 30px;
	}
}

@media (max-width: 991px) {
	.logo h1 {
		font-size: 150px;
	}
}
	
@media (max-width: 768px) {
	body {
		display:-webkit-flex;
		display:flex;
		align-items: center;
		justify-content: center;
		height: 100vh;
		padding: 0;
		margin: 0;
	}
	.logo h1 { 
		margin-top: 0px 
	}
	.footer {
		right:0;
		width:100%;
		text-align:center;
	}
}

@media (max-width: 736px) {
	.logo h1 {
		font-size: 120px;
	}	
}

@media (max-width: 600px) {
	.logo h1 {
		font-size: 100px;
	}
}

@media (max-width: 568px) {
	.logo p {
		font-size:15px;
		margin-bottom:5px;
		margin-top:1px;
	}
}

@media (max-width: 480px) {
	.logo p {
		margin-bottom:10px;
	}
}

@media (max-width: 384px) {
	.footer {
		font-size: 13px;
		line-height: 25px;
	}
}

@media (max-width: 320px) {
	.logo h1 {
		font-size: 90px;
	}
	.logo p {
		font-size: 14px; 
		margin-top:10px;
		margin-bottom:15px;
	}
	.footer {
		right: 10px;
		left: 10px;
		width: 94%;
	}
} 	
</style>
 </head> 
 <body> 
  <div class="wrap"> 
   <div class="logo"> 
    <h1>404</h1> 
    <p> Sorry - Page not found! </p> 
    <div class="sub"> 
     <p><a href="http://localhost/egrop2"> Back to Home</a></p> 
    </div> 
   </div> 
  </div> 
  <div class="footer">
    &copy; 
   <script type="text/javascript">
  document.write(new Date().getFullYear());
</script> Funky 404 . All Rights Reserved | Design by
   <a href="http://404Pagefree.com">404Pagefree</a> 
  </div> 
 </body>
</html>