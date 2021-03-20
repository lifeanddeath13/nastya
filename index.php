<html>
<body>

<form action="main.php" method="get">
Login: <input type="text" name="login"><br><br>
Password: <input type="text" name="password"><br><br>
<button type="Submit" value="Submit">Submit</button>
<button type="Reset" value="Reset">Clear</button>

<script>
	
	    document.forms[0].onsubmit = function(e){
        let login = document.getElementById('fname').value;
        let password = document.getElementById('fpass').value;
 
        if ( login === "Anastasiya" && password === "123456789") 
            alert("Welcome");
        else {
            e.preventDefault();
            alert("Invalid password or login");
        }
    };
    
	</script>
</body>
</html>
