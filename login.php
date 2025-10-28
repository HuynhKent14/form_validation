<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="login">
        <input type="text" id="username" placeholder="Username"></input> <br>
        <input type="password" id="password" minlength="6" placeholder="Password"><br>
        <a href="">Forgot Your Password?</a><br>
        <input type="submit" value="Submit">
    </form>
</body>

<script>
    document.getElementById("login").onsubmit = function(e){
        if(
            document.getElementById("username").value == "" || 
            document.getElementById("password").value == "")
            {
            alert("Please fill out the neccessary fields.");
            e.preventDefault();
        }
    };
</script>
</html>