<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>
        <label>First Name</label>
        <input type="text" id="Fname" pattern="[A-Za-z]+" required></input>
        <label>Last Name</label>
        <input type="text" id="Lname" pattern="[A-Za-z]+" required></input>
        <label>Email</label>
        <input type="email" id="userEmail" required></input>
        <label>Phone Number</label>
        <input type="number" id="userNumber" pattern="[0-9]+" maxlength="11" required></input>
        <label>Password</label>
        <input type="password" id="userPass" minlength="6" required></input>
        <label>Confirm Password</label>
        <input type="password" id="userConfirmPass" minlength="6" required></input> 
        <button type="submit">Submit</button> <br>
        <a href="">Already have an account?</a> <br>

    </form>
    
</body>
</html>
