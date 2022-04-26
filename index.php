<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb5aae4646.js" crossorigin="anonymous"></script>

    <!--Twitter Meta Tags for Embeds-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@BeebsiBlogs" />
    <meta name="twitter:creator" content="@Beebsis" />
    <meta property="og:url" content="https://xalp03.skp-dp.sde.dk/blog/" />
    <meta property="og:title" content="Blogsi for Beebsis" />
    <meta property="og:description" content="I wanted to some place to post my adventure, my small journeys and discoveries" />
    <meta property="og:image" content="https://xalp03.skp-dp.sde.dk/blog/lib/assets/embed.jpg" />

    
    <!--Utility-->
    <link rel="stylesheet" href="./css/utility/colors.css">
    <link rel="stylesheet" href="./css/utility/fonts.css">
    <link rel="stylesheet" href="./css/utility/premade.css">
    <link rel="stylesheet" href="./css/utility/background.css">
    <link rel="stylesheet" href="./css/utility/tags.css">
    <link rel="stylesheet" href="./css/utility/nav.css">
    
    <!--page-->
    <link rel="stylesheet" href="./css/homepage.css">

    <!--JavaScript-->
    <!--COOKIE
        <script src="./js/themeChange.js" defer></script>
        <script src="./js/expandPost.js" defer></script>
    -->

    <!--PHP DB CONNECT-->
    <?php #include './lib/php/dbconnect.php'; ?>
    
    <title>Beebsis' Blog</title>
</head>
<body>
    <div class="background"></div>

    <header>
    <?php
        include './lib/include/nav.php';
    ?>
    </header>
    <div class="main">

        <div class="socials">
            <button class="github"><i class=" fab fa-github fa-xl"></i></button>
            <button class="twitter"><i class="fa-brands fa-twitter fa-xl"></i></button>
            <button class="discord"><i class="fa-brands fa-discord fa-xl"></i></button>
            <button class="linkedin"><i class="fa-brands fa-linkedin fa-xl"></i></button>
            <button class="spotify"><i class="fa-brands fa-spotify fa-xl"></i></button>
        </div>
        <div class="container">
            <div class="bio-container">
                <div class="bio-wrapper">
                    <div class="bio-profile">
                        <img src="./lib/assets/bioPic.jpg" alt="Beebsis Profile">
                    </div>
                    <div class="bio-info">
                        <h3>Hello there, I’m Alex</h3>
                        <p>As of currently I am studying as a Data-Technician student in Denmark.</p>
                        <p>I’m mainly a web-developer when it comes to it. I have less expertise within software development however still ready to get thrown into it.</p>
                        <p>I do <code>UX/UI, html, css, scss, js, php, sql</code> and more. Currently learning <code>reactJS</code> and <code>TypeScript</code> on the side.</p>
                    </div>
                </div>
            </div>
            <div class="blogs">
                <div class="button-container">
                    <h3>NEWEST</h3>
                    <div class="blog-transforms">
                        <button><span>1</span></button>
                        <button><span>2</span></button>
                        <button><span>3</span></button>
                    </div>
                </div>
                <div class="post-container">
                    <div class="posts-info">
                        <div class="post-count">
                            <p><span id="post-count">21</span> POSTS <code class="link">view</code></p>
                        </div>
                        <div class="source-code">
                            <p class="link">
                                <a href="https://github.com/LawTRIBAL-Official/blog" target="blank_">
                                Source Code 
                                    <i class="fa-brands fa-github"> </i>
                                </a> 
                            </p>
                        </div>
                    </div>
                    <div class="posts">

                        <div class="card" type="button">
                            <div class="top">
                                <div class="shade"></div>
                                <img src="./lib/assets/test-img.webp" alt="">
                                <div class="top-text">
                                    <div class="top-left">
                                        <h3>
                                            Machine Learning with Neural Network using JavaScript
                                        </h3>
                                        <p>- <span>Alexander W. Pedersen</span></p>
                                    </div>
                                    <div class="top-right">
                                        <span>10min</span>
                                    </div>
                                </div>
                                <div class="date-lang">
                                    <div class="date">
                                        <span>
                                            1. March 2022
                                        </span>
                                    </div>
                                    <div class="tags">
                                        <span class="tag tag-js">JS</span>
                                        <span class="tag tag-ml">ML</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="sub-title">
                                    <img class="card-pfp" src="./lib/assets/bioPic.jpg" alt="">
                                    <p>Object Identification</p>
                                </div>
                                <div class="stats-links">
                                    <span><i class="fa-solid fa-eye"></i>7.4k</span>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card" type="button">
                            <div class="top">
                                <div class="shade"></div>
                                <img src="./lib/assets/test-img.webp" alt="">
                                <div class="top-text">
                                    <div class="top-left">
                                        <h3>
                                            Machine Learning with Neural Network using JavaScript
                                        </h3>
                                        <p>- <span>Alexander W. Pedersen</span></p>
                                    </div>
                                    <div class="top-right">
                                        <span>10min</span>
                                    </div>
                                </div>
                                <div class="date-lang">
                                    <div class="date">
                                        <span>
                                            1. March 2022
                                        </span>
                                    </div>
                                    <div class="tags">
                                        <span class="tag tag-js">JS</span>
                                        <span class="tag tag-ml">ML</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="sub-title">
                                    <img class="card-pfp" src="./lib/assets/bioPic.jpg" alt="">
                                    <p>Object Identification</p>
                                </div>
                                <div class="stats-links">
                                    <span><i class="fa-solid fa-eye"></i>7.4k</span>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
