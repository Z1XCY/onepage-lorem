<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lorem</title>
    <link rel="icon" type="image/x-icon" href="../img/lorem-logo-icon-removebg-preview.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <?php
    if (isset($_GET['lang']) && $_GET['lang'] === 'nl') { ?><link rel="stylesheet" href="../css/nl.css" /><?php }
    else if (isset($_GET['lang']) && $_GET['lang'] === 'en') { ?><link rel="stylesheet" href="../css/en.css" /><?php }
    ?>
</head>

<?php include 'languages/lang_config.php' ?>

<body>
<header class="page-header">
    <div class="page-header-logo-container">
        <img class="logo-header" src="{{ asset('/img/'.$images[0]->logo) }}" alt="logo Lorem">
    </div>
    <div class="page-header-right">
        <button id="lang-btn" onclick="showLanguage()">Hide language</button>
        <div id="language-toggle">
            <div class="languages">
                <a href="home?lang=nl" class="language language-nl">NL</a>
                <a href="home?lang=en" class="language language-en">EN</a>
            </div>
        </div>
        <img class="menu-toggle js-menu-toggle" src="../img/hamburger.png" alt="hamburger icon">
        <div class="nav">
        @foreach ($nav as $nav_item)
        <a> {{ $nav_item }} </a>
        @endforeach
        </div>
    </div>
</header>

<div class="page-content">
    <div class="projects">
        <div class="project-content">
            <h2><?= $heading['heading1'];  ?> <b><?= $heading['heading2'];  ?></b></h2>
            <p><?= $contents[0]->paragraphs; ?></p>
        </div>
    </div>
    <!-- MAIN PROJECTS -->
    <div class="images">
        <?php foreach ($projects as $prj): ?>
            <div class="image-wrapper">
                <img src="<?= $prj->project_image; ?>" alt="image of kitchen">
                <div class="shapes-pos">
                    <div class="parallel"><?= $project_details['price']; ?>
                        <br><b><?= number_format($prj->project_price, decimals: 3) ?>,-</b>
                    </div>
                    <div class="triangle">
                    </div>
                </div>
                <div class="text-overlay button-img">
                    <p><?= $project_details['name']; ?> <img src="<?= $prj->project_button; ?>" alt="button icon"></p>
                </div>
            </div>
        <?php endforeach; ?>
        <!--END MAIN PROJECTS -->
        <!-- EXTRA PROJECTS -->
        <?php foreach ($extra_projects as $extra_prj): ?>
            <div class="image-wrapper show-image">
                <img src="<?=$extra_prj->project_image; ?>" alt="image of kitchen">
                <div class="shapes-pos">
                    <div class="parallel"><?= $project_details['price']; ?>
                        <br><b><?= number_format($extra_prj->project_price, decimals: 3) ?>,-</b>
                    </div>
                    <div class="triangle">
                    </div>
                </div>
                <div class="text-overlay button-img">
                    <p><?= $project_details['name']; ?> <img src="<?= $extra_prj->project_button; ?>" alt="button icon"></p>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- END EXTRA PROJECTS -->
    </div>

    <div class="button-pos">
        <button onclick="myFunction()" class="more-projects"><?= $project_details['show-button']; ?></button>
    </div>

    <div class="more-info">
        <div class="more-info-content">
            <h2><?= $heading['heading3']; ?></h2>
            <p><?= $contents[1]->paragraphs;  ?></p>
        </div>
    </div>

    <div class="paragraph-row">
        <div class="paragraph-column">
            <h2><?= $heading['heading4']; ?></h2>
            <p><?= $contents[2]->paragraphs; ?></p>
        </div>

        <div class="paragraph-column">
            <h2><?= $heading['heading5']; ?></h2>
            <p><?= $contents[3]->paragraphs; ?></p>
            <h2><?= $heading['heading6']; ?></h2>
            <p><?= $contents[4]->paragraphs; ?> <a class="test-link" href="https://www.maxserv.com/"><?= $heading['p-link1']; ?></a> <?= $heading['p-link2']; ?></p>
        </div>
    </div>
</div>

<footer class="page-footer">
    <div class="other-info">
        <ul>
            <li><b><?= $footer_columns['ftr_column1']; ?></b></li>
            <?php foreach ($footer_column1 as $ftr_item1): ?>
                <li>
                    <a href="https://www.maxserv.com/"><?= $ftr_item1; ?></a>
                </li>
            <?php endforeach; ?>
            <li><b><?= $footer_columns['ftr_column2']; ?></b></li>
            <?php foreach ($footer_column2 as $ftr_item2): ?>
                <li>
                    <a href="https://www.maxserv.com/"><?= $ftr_item2; ?></a>
                </li>
            <?php endforeach; ?>
            <li><b><?= $footer_columns['ftr_column3']; ?></b></li>
            @foreach ($footer_column3 as $ftr_item3)
            <li> <a href="https://www.maxserv.com/"> {{ $ftr_item3 }}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="copyright-content">
        <p><?= $contents[0]->copyright; ?></p>
        <div class="logo-align">
            <a href=""><img class="logo-footer" src="{{ asset('/img/'.$images[0]->logo) }}" height="100" width="100" alt="logo Lorem"></a>
        </div>
        <p><?= $footer_columns['rights'] ?></p>
    </div>

    <div class="footer-info">
        <a href="https://www.maxserv.com/"><?= $footer_columns['bottom_link1']; ?></a>|
        <a href="https://www.maxserv.com/"><?= $footer_columns['bottom_link2']; ?></a>|
        <a href="https://www.maxserv.com/"><?= $footer_columns['bottom_link3'];  ?></a>
    </div>
</footer>

<script>
    const menuToggle = document.querySelector('.js-menu-toggle');
    menuToggle.addEventListener('click', function ()
    {
        this.classList.toggle("active");
    });

    function myFunction() {
        document.getElementsByClassName('show-image')[1].style.visibility='visible';
        document.getElementsByClassName('show-image')[0].style.visibility='visible';
        document.getElementsByClassName('more-projects')[0].style.visibility = 'hidden';
        document.getElementsByClassName('button-pos')[0].style.margin= '0';
    }

    function showLanguage() {
        const x = document.getElementById("language-toggle");
        const btn = document.getElementById("lang-btn");
        if (x.style.visibility === "hidden")
        {
            x.style.visibility = "visible";
            btn.innerHTML = "Hide";
        }
        else
        {
            x.style.visibility = "hidden";
            btn.innerHTML = "Show";
        }
    }
</script>

</body>

</html>