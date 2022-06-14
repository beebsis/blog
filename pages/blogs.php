<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb5aae4646.js" crossorigin="anonymous"></script>

    
    <!--Utility-->
    <link rel="stylesheet" href="../css/utility/colors.css">
    <link rel="stylesheet" href="../css/utility/fonts.css">
    <link rel="stylesheet" href="../css/utility/premade.css">
    <link rel="stylesheet" href="../css/utility/background.css">
    <link rel="stylesheet" href="../css/utility/tags.css">
    <link rel="stylesheet" href="../css/utility/nav.css">
    
    <!--page-->
    <link rel="stylesheet" href="../css/blogs.css">

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
        include '../lib/include/nav.php';
    ?>
    </header>
    <main>
        <div class="background"></div>
        <div class="container">
            <div class="wrapper">
                <div class="blog-top">
                    <div class="blog-title">
                        <h1>AI - Storage system</h1>
                    </div>
                    <div class="content-desc">
                        <h2>Storage System education institues. inbuild Ai, to give the users the best experienec.</h2>
                    </div>
                    <div class="blog-info">
                        <p><span class="date"></span>Marts 1. 2022<span class="readTime">15</span>min read</p>
                    </div>
                    <div class="self-tags">
                        <ul>
                            <li class="self-tag-1" value="1">Programming</li>
                            <li class="spacer"><span class="dot"></span></li>
                            <li class="self-tag-2" value="2">Personal Project</li>
                            <li class="spacer"><span class="dot"></span></li>
                            <li class="self-tag-3" value="3">Internal</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
</body>
</html>
