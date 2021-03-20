<html>
<body>

<form action="main.php" method="get">
<div class="first_name">
                    <label for="fname">First name</label>
                    <input type="text" placeholder="name" class="fname" id="fname" name="fname"><br>
                </div>
                <div class="pass_wrap">
                    <label for="password" class="pass_title">Password</label>
                    <input type="password" placeholder="password" class="fpass" id="fpass" name="password"><br>
                </div>
<button type="Submit" value="Submit">Submit</button>
<button type="Reset" value="Reset">Clear</button>
</form>

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
