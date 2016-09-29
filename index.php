<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <script type="text/javascript">
        function mostrar1(){
		document.getElementById("container2").style.display="block";
		document.getElementById("container1").style.visibility="hidden";
        }
        function mostrar2(){
                document.getElementById("container2").style.display="none";
		document.getElementById("container1").style.visibility="visible";
        }
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style type="text/css">
#fuera{
	font-family: "AR BERKLEY";
	font-size: 70px;
	
color: #ffb76b; /* Old browsers */
color: -moz-linear-gradient(45deg, #ffb76b 0%, #ffa73d 50%, #ff7c00 51%, #ff7f04 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#ffb76b), color-stop(50%,#ffa73d), color-stop(51%,#ff7c00), color-stop(100%,#ff7f04)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* IE10+ */
color: linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb76b', endColorstr='#ff7f04',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    
}
#fuera1{
	font-family: "AR BERKLEY";
	font-size: 50px;
	
color: #cedbe9; /* Old browsers */
color: -moz-linear-gradient(45deg, #cedbe9 0%, #aac5de 17%, #6199c7 50%, #3a84c3 51%, #419ad6 59%, #4bb8f0 71%, #3a8bc2 84%, #26558b 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#cedbe9), color-stop(17%,#aac5de), color-stop(50%,#6199c7), color-stop(51%,#3a84c3), color-stop(59%,#419ad6), color-stop(71%,#4bb8f0), color-stop(84%,#3a8bc2), color-stop(100%,#26558b)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* IE10+ */
color: linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedbe9', endColorstr='#26558b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#fuera2{
	font-family: "AR BERKLEY";
	font-weight: bold;
	font-size: 50px;
	
color: #cedbe9; /* Old browsers */
color: -moz-linear-gradient(45deg, #cedbe9 0%, #aac5de 17%, #6199c7 50%, #3a84c3 51%, #419ad6 59%, #4bb8f0 71%, #3a8bc2 84%, #26558b 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#cedbe9), color-stop(17%,#aac5de), color-stop(50%,#6199c7), color-stop(51%,#3a84c3), color-stop(59%,#419ad6), color-stop(71%,#4bb8f0), color-stop(84%,#3a8bc2), color-stop(100%,#26558b)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* IE10+ */
color: linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedbe9', endColorstr='#26558b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    
}
#fuera3{
	font-family: "AR BERKLEY";
	font-size: 70px;
	
color: #ffb76b; /* Old browsers */
color: -moz-linear-gradient(45deg, #ffb76b 0%, #ffa73d 50%, #ff7c00 51%, #ff7f04 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#ffb76b), color-stop(50%,#ffa73d), color-stop(51%,#ff7c00), color-stop(100%,#ff7f04)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* IE10+ */
color: linear-gradient(45deg, #ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb76b', endColorstr='#ff7f04',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#fuera4{
	font-family: "AR BERKLEY";
	font-size: 50px;
	
color: #cedbe9; /* Old browsers */
color: -moz-linear-gradient(45deg, #cedbe9 0%, #aac5de 17%, #6199c7 50%, #3a84c3 51%, #419ad6 59%, #4bb8f0 71%, #3a8bc2 84%, #26558b 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#cedbe9), color-stop(17%,#aac5de), color-stop(50%,#6199c7), color-stop(51%,#3a84c3), color-stop(59%,#419ad6), color-stop(71%,#4bb8f0), color-stop(84%,#3a8bc2), color-stop(100%,#26558b)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* IE10+ */
color: linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedbe9', endColorstr='#26558b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    
}
#fuera6{
	font-family: "AR BERKLEY";
	font-size: 50px;
	
color: #cedbe9; /* Old browsers */
color: -moz-linear-gradient(45deg, #cedbe9 0%, #aac5de 17%, #6199c7 50%, #3a84c3 51%, #419ad6 59%, #4bb8f0 71%, #3a8bc2 84%, #26558b 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#cedbe9), color-stop(17%,#aac5de), color-stop(50%,#6199c7), color-stop(51%,#3a84c3), color-stop(59%,#419ad6), color-stop(71%,#4bb8f0), color-stop(84%,#3a8bc2), color-stop(100%,#26558b)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* IE10+ */
color: linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedbe9', endColorstr='#26558b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    
}
#error{
	
	color: white;
    
	
}

#caja{
	background: #2A0000; /* Old browsers */
	
    background: -moz-linear-gradient(top, #8b8b8b 0%, #6a6a6a 50%, #5e5e5e 51%, #717171 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#8b8b8b), color-stop(50%,#6a6a6a),             color-stop(51%,#5e5e5e), color-stop(100%,#717171));
    background: -webkit-linear-gradient(top, #8b8b8b 0%,#6a6a6a 50%,#5e5e5e 51%,#717171 100%); 
    background: -o-linear-gradient(top, #8b8b8b 0%,#6a6a6a 50%,#5e5e5e 51%,#717171 100%); 
    background: -ms-linear-gradient(top, #8b8b8b 0%,#6a6a6a 50%,#5e5e5e 51%,#717171 100%); 
    background: linear-gradient(to bottom, #8b8b8b 0%,#6a6a6a 50%,#5e5e5e 51%,#717171 100%); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8b8b8b', endColorstr='#717171',GradientType=0 ); 
	width:250px;
	border:1px solid white;
	margin: 190px auto;
	padding:1em;
	border-radius:30px;
}
h1,h2,h3,h4{
	font-family: "Aharoni";
color: #cedbe9; /* Old browsers */
color: -moz-linear-gradient(45deg, #cedbe9 0%, #aac5de 17%, #6199c7 50%, #3a84c3 51%, #419ad6 59%, #4bb8f0 71%, #3a8bc2 84%, #26558b 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#cedbe9), color-stop(17%,#aac5de), color-stop(50%,#6199c7), color-stop(51%,#3a84c3), color-stop(59%,#419ad6), color-stop(71%,#4bb8f0), color-stop(84%,#3a8bc2), color-stop(100%,#26558b)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* IE10+ */
color: linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedbe9', endColorstr='#26558b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	}
input[type=text], input[type=password]{
	margin:0 0 1em 0 ;
	width:200px;
	border:20px ;
	padding:1em;
	border-radius:20px;
	
	
	}
	input[type=submit] , form a{
	padding:1em;
	background: #f2f6f8; /* Old browsers */
background: -moz-linear-gradient(45deg, #f2f6f8 0%, #d8e1e7 50%, #b5c6d0 51%, #e0eff9 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#f2f6f8), color-stop(50%,#d8e1e7), color-stop(51%,#b5c6d0), color-stop(100%,#e0eff9)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(45deg, #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(45deg, #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(45deg, #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* IE10+ */
background: linear-gradient(45deg, #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f6f8', endColorstr='#e0eff9',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */ 	
	border:none;
	color:black;
	font-family:Aharoni;
	font-size:15px;
    border-radius:20px;
	text-decoration:none;
	}
	input[type=submit]:hover, form a:hover{
	background: #cedbe9; /* Old browsers */
background: -moz-linear-gradient(45deg, #cedbe9 0%, #aac5de 17%, #6199c7 50%, #3a84c3 51%, #419ad6 59%, #4bb8f0 71%, #3a8bc2 84%, #26558b 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#cedbe9), color-stop(17%,#aac5de), color-stop(50%,#6199c7), color-stop(51%,#3a84c3), color-stop(59%,#419ad6), color-stop(71%,#4bb8f0), color-stop(84%,#3a8bc2), color-stop(100%,#26558b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* IE10+ */
background: linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedbe9', endColorstr='#26558b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
		cursor:pointer;
		}

#derechos {
color: rgb(76,76,76); /* Old browsers */
color: -moz-linear-gradient(45deg, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(76,76,76,1)), color-stop(12%,rgba(89,89,89,1)), color-stop(25%,rgba(102,102,102,1)), color-stop(39%,rgba(71,71,71,1)), color-stop(50%,rgba(44,44,44,1)), color-stop(51%,rgba(0,0,0,1)), color-stop(60%,rgba(17,17,17,1)), color-stop(76%,rgba(43,43,43,1)), color-stop(91%,rgba(28,28,28,1)), color-stop(100%,rgba(19,19,19,1))); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%); /* IE10+ */
color: linear-gradient(45deg, rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
width: 1039px auto;
}
body{
	background:white;
}
sdsds {
	color: #f2f6f8; /* Old browsers */
color: -moz-linear-gradient(45deg, #f2f6f8 0%, #b5c6d0 10%, #d8e1e7 24%, #b5c6d0 32%, #e0eff9 100%); /* FF3.6+ */
color: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#f2f6f8), color-stop(10%,#b5c6d0), color-stop(24%,#d8e1e7), color-stop(32%,#b5c6d0), color-stop(100%,#e0eff9)); /* Chrome,Safari4+ */
color: -webkit-linear-gradient(45deg, #f2f6f8 0%,#b5c6d0 10%,#d8e1e7 24%,#b5c6d0 32%,#e0eff9 100%); /* Chrome10+,Safari5.1+ */
color: -o-linear-gradient(45deg, #f2f6f8 0%,#b5c6d0 10%,#d8e1e7 24%,#b5c6d0 32%,#e0eff9 100%); /* Opera 11.10+ */
color: -ms-linear-gradient(45deg, #f2f6f8 0%,#b5c6d0 10%,#d8e1e7 24%,#b5c6d0 color: linear-gradient(45deg, #f2f6f8 0%,#b5c6d0 10%,#d8e1e7 24%,#b5c6d0 32%,#e0eff9 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f6f8', endColorstr='#e0eff9',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
width: 1039px auto;
}
#caja form {
	color: #2A0000;
}
#caja form {
	font-weight: bold;
}
#caja p {
	color: #FFFBF0;
	font-family: "AR BERKLEY";
	font-weight: bold;
}
.dd {
	text-align: center;
}
.sdsds {
	text-align: center;
}
.dsds {
	text-align: center;
}
.sds {
}
</style>
</head>

<body>
<div id="header"></div>
      <div id="container2" class="container2" style="display:none;">
	   
	<div id="caja">
<center><span onclick="mostrar2()"><input type="submit" value="Atras" /> </span></a></center>
  <h1>&nbsp;</h1>
  <h1>Login</h1>
  <form action="login.php" method="POST">
    <input type="text" name="id_usuario" placeholder="User" />
   
            
   <input type="password" name="password" placeholder="Password" />
   <input type="submit" name="submit" value="Acceder"/>
  
</form>
  <div  id="derechos" style="position: absolute; top: 535px; left: 147px; width: 1039px auto; height: 69px;visibility:visible z-index:1">
    
  </div>
</div>
<div  style="position: absolute; top: 180px; left: 128px; width: 254px; height: 33px;visibility:visible z-index:1">

</div>
	
      </div>	
      <div id="container1" class="container1"> 
      <center><span onclick="mostrar1()"><input type="submit" value="Ingresa" /></span>  </center>  
      </div>
	 
	  

</body>
</html>
