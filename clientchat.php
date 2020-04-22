<?php
session_start();

///$lawyer_name=$_SESSION["lawyer_name"];
///$client_name=$_SESSION["name2"];

?>

<html>
<head>
<title>Chat Box</title>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script>
function submitChat(){
    if(form1.msg.value==''){
        alert('message field is mandatory');
        return;
    }
     var msg=form1.msg.value;
     var xmlhttp=new XMLHttpRequest();
     xmlhttp.onreadystatechange= function(){
         if(xmlhttp.readyState==4 && xmlhttp.status==200){
             document.getElementById('chatlogs').innerHTML=xmlhttp.responseText;

         }
     }
     xmlhttp.open('GET','client_chat_connection.php?msg='+msg,true);
     xmlhttp.send();
}

$(document).ready(function(e){
    $.ajaxSetup({catch:false});
    setInterval(function(){$('#chatlogs').load('client_chat_refresh.php');},2000);

});


</script>

</head>
<body>
<button class="btn btn-primary" onclick="myFunction()">back</button>
     <script>
     	function myFunction(){
     		window.location.assign("message.php");
     	}   
     </script>

     <button class="btn btn-primary" onclick="logoutFunction()">LOGOUT</button>
     <script>
     	function logoutFunction(){
     		window.location.assign("logout.php");
     	}
	</script>
<form name="form1">
Your Message: <br />
<textarea name="msg"></textarea><br />
<a href="#" onclick="submitChat()">Send</a><br /><br />

<div id="chatlogs">
Loading chatlogs please wait..
</div>


</body>
