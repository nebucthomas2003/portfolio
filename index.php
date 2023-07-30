<html>
    <title>LOG-IN</title>
    <head>
        <link rel="stylesheet" href="stylemain.css">
    </head>
    <body>
        <style>
            h1{
                
    font-size: 100px;
    line-height: 160px;
    margin-right: 5px;
    margin-bottom: -77px;
    margin-left: 300px;
    color: transparent;
    -webkit-text-stroke: 1px #fff;
    background: url(./img/back.png);
    -webkit-background-clip: text;
    background-position: 0 0;
    animation: back 20s linear infinite;
    
}

@keyframes back{
    100%{
        background-position: 2000px 0;
    }
}
h2{
    font-size: 20px;
    font-weight: 600;
    margin-left: 450px;
    color: #fff;
    text-align: left;
    text-shadow:black 1px 0 10px;
    padding-top: 25px;
}

#p1{   
    font-size: 30px;
    font-weight: 600;
    margin-left: -490px;
    color: #fff;
    text-align: center;
    text-shadow:black 1px 0 10px;
    padding-top: 25px;
}



            </style>
            <h1>GRAPHIA</h1>
            <h2>Portfolio Website</h2>
            <p id="p1">"Code is like art;<br/>create it with passion,<br/> refine it with patience, and<br/> share it with pride.<br/> As a developer, 
                you have the power to shape the future<br/> through the lines of your code."<br/> - Nebu C Thomas</p>
        <div class="login-form">
            <form method="post"action="index_backend.php">
                <div class="contain"> 
                    
                    <h3>LOGIN</h3><br>
                    <label for="username">USERNAME</label><br>
                    <input type="text" name="username" id="username" placeholder="Username"required><br>
                    <label for="password">PASSWORD</label><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                    <?php
                        if(isset($_GET['error']))
                        {
                            $error=$_GET['error'];
                            if($error==1)
                            {
                                echo "wrong password or username";
                            }
                        }
                    ?>
                    <button>LOG-IN</button>
                </div>
                <div><p>
                    Forget Password?  <a href="reset_password_frontend.php">reset</a><br>
                    need an account?  <a href="signup_frontend.php">create an account</a>
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>