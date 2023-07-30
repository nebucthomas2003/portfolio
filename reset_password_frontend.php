<html>
    <title>LOG-IN</title>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login-form">
       
            <form method="post"action="reset_password_backend.php">
                <div class="contain"> 
                    <h3>RESET PASSWORD</h3><br>
                    <label for="username">USERNAME</label><br>
                    <input type="text"name="username" id="username" placeholder="Username"required><br>
                    <label for="password">PASSWORD</label><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                    <button>RESET</button>
                </div>
            </form>
        </div>
    </body>
</html>