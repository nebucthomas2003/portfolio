<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Graphia</title>
    <link rel="about" href="about.php">
    <link rel="webpages"href="webpage.php">
    <link rel="contact" href="contact.php">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
<div class="container">
        <div class="navigation">
        <nav>
            <ul>
            <li><a href="home.php">HOME</a></li>
                <li><a href="webpage.php">WEBPAGES</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
                

            </ul>
        </nav>
        </div>
        <style>
  
  
        body {
    font-family: "Segoe UI", sans-serif;
    margin: 0;
    padding: 20px;
    background-image: linear-gradient(rgba(0,0,0,0.3),transparent),url(./img/img1.jpg.jpg);
    background-size: cover;
    background-position: center;

    
    
}

nav{
    float: right;
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 120px;
    text-decoration: none;
    font-size: 17px;

}
nav ul li{
    display: inline;
    list-style: none;
    margin: 10px 30px;
     
}

nav ul li a{
    color:black;
    text-decoration: none;
    position: relative;
  
}

nav ul li a::after{
    content: '';
    width: 0;
    height: 3px;
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    background-color: black;
    transition: width 0.3s;
}
    
nav ul li a:hover::after{
    width: 50%;

}


h3{
    text-align: center;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

.profile-pic img {
    border-radius: 25%;
    max-width: 200px;
    display: block;
    margin: 0 auto 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.about h1 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 20px;
}

.about p {
    text-align: justify;
    line-height: 1.8;
    font-size: 16px;
}

.details {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.languages,
.contact {
    flex-basis: 45%;
}

.languages h2,
.contact h2,
.links h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    margin-bottom: 10px;
}

ul li a {
    color: #3498db;
    text-decoration: none;
    transition: color 0.2s ease-in-out;
}

ul li a:hover {
    color: #007bff;
}

.links {
    margin-top: 30px;
}

.links ul li a {
    display: block;
    padding: 5px 0;
    font-size: 18px;
    border-bottom: 1px solid #e6e6e6;
    transition: border-color 0.2s ease-in-out;
}

.links ul li:last-child a {
    border-bottom: none;
}

.links ul li a:hover {
    border-bottom-color: #007bff;
}

@media (max-width: 600px) {
    .details {
        flex-direction: column;
    }
}
</style>

    


    <div class="container">
        <div class="profile-pic">
            <img src="./img/61150.jpg" alt="Profile Picture">
        </div>
        <div class="about">
            <h1>About Me</h1>
            <p>
           

Hello there! I'm Nebu C Thomas, a passionate and enthusiastic Full Stack Web Developer with a deep interest in the ever-evolving world of technology and programming. Born and raised in the beautiful state of Kerala, India, I am currently pursuing a Computer 
Science and Engineering (CSE) degree, which has fueled my curiosity to explore and create innovative solutions.</p>




<h3>**Positive Mindset and Attitude**</h3>
<p>


I strongly believe in the power of a positive mindset and always strive to approach challenges with optimism. 
I see every obstacle as an opportunity for growth and learning. My positive attitude helps me stay motivated, 
even in the face of complex projects and demanding deadlines.</p>

<h3>**Great Skillset in Communication, Leadership, and Time Management:**</h3>
<p>
Having honed my skills in various group projects and leadership roles, I possess excellent communication and interpersonal abilities. I enjoy collaborating with diverse teams, as it brings out the best in everyone involved. My leadership skills empower me to guide and inspire others, fostering a cooperative and productive work environment.

Moreover, I take pride in my effective time management skills. Organizing tasks efficiently and prioritizing effectively ensures that I deliver high-quality work within set timelines.
</p>
<h3>**Adaptability and Embracing Change:**</h3>
<p>
In the fast-paced tech industry, being adaptable is key to staying relevant. I have developed a knack for quickly adapting to new technologies, tools, and methodologies. Embracing change is not just a necessity; it excites me as it opens up endless possibilities for innovation and creativity.
</p>
<h3>**Passion for Technology and Programming World:**</h3>
    <p>
From a young age, I've been captivated by the wonders of technology. This passion led me to explore the vast world of programming, where I found my true calling. Whether it's crafting beautiful front-end interfaces or architecting robust back-end systems, I find joy in every aspect of web development.

My insatiable curiosity drives me to stay up-to-date with the latest trends and breakthroughs in the tech industry. I'm constantly on the lookout for exciting projects that challenge and push my boundaries, as they provide invaluable opportunities for growth.

I firmly believe that technology has the power to transform lives and make the world a better place. As a Full Stack Web Developer, I am committed to leveraging my skills and creativity to contribute meaningfully to this digital transformation.

Thank you for visiting my profile, and I look forward to connecting with fellow tech enthusiasts, collaborating on exciting projects, and making a positive impact in the digital realm. If you'd like to get in touch or discuss potential opportunities, feel free to reach out through my contact information provided below.

]
            </p>
        </div>
        <div class="details">
            <div class="languages">
                <h2>Languages Known</h2>
                <ul>
                    <li>Java</li>
                    <li>C</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>MySql</li>
                    <!-- Add more languages if needed -->
                </ul>
            </div>
            <div class="contact">
                <h2>Contact Details</h2>
                <ul>
                    <li>Email: nebucthomas2003@gmail.com</li>
                    <li>Phone: 9207376249</li>
                </ul>
            </div>
        </div>
        <div class="links">
            <h2>Links</h2>
            <ul>
                <li><a href="https://github.com/nebucthomas2003" target="_blank">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/nebu-c-thomas-68a67a251" target="_blank">LinkedIn</a></li>
                
                <!-- Add more links if needed -->
            </ul>
        </div>
    </div>
</body>
</html>

