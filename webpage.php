<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage | Graphia</title>
    <link rel="about" href="about.php">
    <link rel="webpage"href="webpage.php">
    <link rel="Contact" href="contact.php">
    <link rel="stylesheet"href="style1.css">
</head>
<body>
    
</body>
</html>

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
             font-size: 100px;
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
                background-color:#001c30;
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
   
.cards{
    display: inline-block;
    width: 20%;
    background-color:#001c30;
    border-radius: 5px;
    margin: 70px;
    margin-right: 80px;
    box-shadow: 2px 2px 10px black;
    margin-top: 10px;
   

}


.image img{
    width: 100%;
    border-radius: 5px;
}

.image img:hover{
    transform:scale(1.5s);
}
.tittle{
    text-align: center;
    font-family: 'poppins' sans-serif;
    color: white;
}
.des{
    text-align: center;
    padding: 4px;
    font-family: 'poppins' sans-serif;
    
}

button{
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: antiquewhite;
    border: 1px solid black;
    padding: 10px;
    border-radius: 5px;
}
button:hover{
    background-color: rgb(18, 49, 83);
    color: white;
    transition: .5s;
    cursor: pointer;
}

    </style>

    <h1>WEBPAGES</h1>
  <div class="rectangle">
    <p>A WEBPAGE IS A HYPERTEXT MARKUP DOUCUMENT IN 
        THE WORLD WIDE WEB. WEBPAGES ARE DELIVERED BY 
        A WEB SERVER TO THE USER AND DISPLAYED IN WEB BROWSER.
        A WEBSITE CONSIST OF MANY WEBPAGES LINKED TOGETHER
        UNDER A COMMON DOMAIN NAME. THE NAME "WEBPAGE" IS A METAPHOR OF PAPER
        PAGES BOUND TOGETHER IN A BOOK.
    </p>
  </div>

<div class="cards">
    <div class="image">
        <img id="img1" src="./img/Screenshot_20230717_214344.png">

    </div>
    <div class="tittle">
        <h3>WEBPAGE-1</h3>

    </div>
    <div class="des">
        <p>This webpage contains the modern aesthetic<br>
        design elements.</p>
        <a href="https://github.com/nebucthomas2003/html-base"><button> Read More</button></a>

    </div>
</div>

<div class="cards">
    <div class="image">
        <img id="img2" src="./img/Screenshot_20230715_120005.png">

    </div>
    <div class="tittle">
        <h3>WEBPAGE-2</h3>

    </div>
    <div class="des">
        <p>This webpage contains a simple login page.</p>
        <a href="https://github.com/nebucthomas2003/html-base"><button> Read More</button></a>

    </div>
</div>
<div class="cards">
    <div class="image">
        <img id="img1" src="./img/Screenshot_20230715_115920.png">

    </div>
    <div class="tittle">
        <h3>WEBPAGE-3</h3>

    </div>
    <div class="des">
        <p>This webpage contains a retro looking<br>
            website with 94's buttons.</p>
        <a href="https://github.com/nebucthomas2003/html-base"><button> Read More</button></a>

    </div>
</div>   
</body>
</html>