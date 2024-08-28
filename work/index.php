<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <h1 href="#" class="logo">
                </h1>
                

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Full Stack Developer and UX/UI Designer</h1>
            <p>Our passion lies in bringing creative visions to life through code, making technology accessible and enjoyable for users!</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Front-End</h4>
                    <p> User interface and design.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>UX/UI</h4>
                    <p>user experience and design.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>Back-End</h4>
                    <p>Server-side and database.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="about.png">
        </div>
        <div class="about-text">
            <h2>Start With Us</h2>
            <p>And unlock the full potential of your project with our comprehensive services, from robust back-end solutions and captivating front-end designs to seamless UX/UI enhacements.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p></p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>