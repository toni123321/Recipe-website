<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginForm</title>
    <link rel="stylesheet" href="login-styles.css">
</head>
<body>
    <form>
        <fieldset>
            <legend>Log in</legend>
            <div class="avatarLogin">
                <img src="avatarLogin.png" alt="Avatar" class="avatar" width="200" height="200">
            </div>
            <div class="form">
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="password" required>
                    
                <button type="submit">Login</button>
                <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
            </div>
            <div class="form">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="password">Forgot <a href="#">password?</a></span>
            </div>
        </fieldset>
    </form>
</body>
</html>