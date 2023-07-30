<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Graphia</title>
    <link rel="about" href="about.php">
    <link rel="webpages"href="webpage.php">
    <link rel="contact" href="contact.php">
    <link rel="stylesheet" href="style.css">
    
    
    
   
</head>
<body>
    <div class="container">
        <div class="navigation">
        <nav>
            <ul>
            <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="webpage.php">WEBPAGES</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
                

            </ul>
        </nav>
        </div>
        <style>
            h1{
                 font-size: 50px;
                 line-height: 160px;
                 margin-right: 5px;
                 margin-bottom: 10px;
                 color: transparent;
                 -webkit-text-stroke: 1px #fff;
                 background: url(./img/back.png);
                 -webkit-background-clip: text;
                 background-position: 0 0;
                 animation: back 20s linear infinite;
    
    
                @keyframes back{
                                 100%{
                                  background-position: 2000px 0;
                                      }
                                }
                }
                .rectangle{
                    height: 120px;
                    width: 1255px;
                    background-color:mediumaquamarine;
                    border-radius: 15px;
                }
              
        p{
        font-size: 20px;
        font-weight: 600;
        margin-left: 1px;
        color: #fff;
        text-align: center;
        text-shadow:black 1px 0 10px;
        padding-top: 25px;
    }

    form{
    margin: 17px auto;
    padding: 2em;
    width: 500px;
    border: 1px solid black;
    border-radius: 1em;
    background-color:#001c30;
    box-shadow: 2px 2px 10px black;
}
ul{
    margin: 1em;
    padding: 0em;
    list-style: none;
}

li + li{
    margin-top: 1em;
}

label{
    display: inline-block;
    width: 90px;
    text-align: right;
    color: white;
    font: 1em 'poppins';
}

textarea{
    vertical-align: top;
    height: 5em;
}

input,
textarea{
    font: 2em 'poppins';
    width: 300px;
    box-sizing: border-box;
    border: 1px #999;
   
}

.button{
    padding-left: 10px;
}

button{
    
    margin-left: 0.5px;
    width: 100px;
    height: -20px;
}

        </style>
    
        <h1>CONTACT US</h1>
        <p>HI EVERYONE , I HOPE EVERYONE LIKED MY PORTFOLIO<br>
        IF YOU HAVE ANY QUERIES FEEL FREE TO MESSAGE.</p>


        <form>
            <ul>
                <li>
                    <label for="name">NAME:</label>
                        <input type="text" id="name"name="user_name">
                </li>
                <li>
                    <label for="mail">EMAIL ID:</label>
                        <input type="email" id="mail"name="user_email">
                </li>
                <li>
                    <label for="message">MESSAGE:</label>
                        <textarea id="name"name="user_message"></textarea>
                </li>
                <li class="button"><button type="submit">SUBMIT</button>
                </li>
            </ul>
    </form>
</body>
</html>