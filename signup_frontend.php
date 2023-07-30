<html>
    <title>LOG-IN</title>
    <head>
        <link rel="stylesheet" href="stylemain.css">
    </head>
    <body>
        <style>
    body
{
    background-image: url("./img/img1.jpg.jpg");
    background-size: contain;
    font-family: 'poppins',sans-serif;
}
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
            


form
{
    height: 450;
    width: 400;
    border: 3px solid;
    border-color: dimgrey;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 75%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid lightslategrey; 
    box-shadow: whitesmoke;
    padding: 50px 35px;
}
form *
{
    font-family: Arial, Helvetica, sans-serif;
    color: #ffffff;
    letter-spacing: 1px;
}
label
{
    display: block;
    margin-top: 10px;
    font-size: 16px;
    font-weight: 500;
}
input
{
    display: block;
    height: 50px;
    width: 100%;
    background-color:white;
    border-radius: 20px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
#Username,#Password{
    color: #080710;
    font-size: 20px;
}
button
{
    margin-top: 30px;
    width: 50%;
    position: center;
    background-color: #ffffff;
    color: #080710;
    padding: 10px ;
    font-size: 20px;
    font-weight: 600;
    border-radius: 3px;
    cursor: pointer;
}
h3
{
    background-color:  transparent;
    width: 350;
    color: whitesmoke;
    font-size: 30px;
}
img
{
    height: 200px;
    width: 200px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 20%;
    left: 75%;
}
p
{
    font-size: 15px;
}
input{
    color: #080710;
    font-size: 25px;
    font-weight: 20px;

}
</style>

            <h1>GRAPHIA</h1>
            <h2>Portfolio Website</h2>
            <p id="p1">"Code is like art;<br/>create it with passion,<br/> refine it with patience, and<br/> share it with pride.<br/> As a developer, 
                you have the power to shape the future<br/> through the lines of your code."<br/> - Nebu C Thomas</p>


        <div class="login-form">
       
            <form method="post"action="signup_backend.php">
                <div class="contain"> 
                    <h3>SIGN UP</h3><br>
                    <label for="username">USERNAME</label><br>
                    <input type="text" name=username id="username" placeholder="Username"required><br>
                    <label for="password">PASSWORD</label><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                    <input type="submit" value="Sign Up">
                    <p>
                        already a member?<a href="index.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>