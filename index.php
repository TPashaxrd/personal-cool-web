<?php
$social_links = [
    ['url' => 'https://github.com/TPashaxrd', 'icon' => 'fab fa-github'],
    ['url' => 'https://www.instagram.com/toprak.altins', 'icon' => 'fab fa-instagram'],
    ['url' => 'https://spotify.com', 'icon' => 'fab fa-spotify']
];

$projects = [
    [
        'img' => 'your-img-link',
        'url' => 'https://nivesoft.com/',
        'title' => 'NiveSOFT',
        'desc' => 'Nivesoft'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="sr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
    <title>Toprak | Personal WebSite</title>
    <meta name="description" content="TPasha">
    <link rel="stylesheet" href="./personalim.css">
    <link rel="favicon" href="https://toprak.nivesoft.com/img/tpasha.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="animate-fade-in-down" style="height: 100%;">
    <main class="l-main">
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hollo,<br> <span class="home__title-color">Toprak</span><br>Dev & Full-stack</h1>
            </div>
            <div class="home__social">
                <?php foreach ($social_links as $link): ?>
                    <a href="<?= $link['url']; ?>" target="_blank" class="home__social-icon">
                        <i class="<?= $link['icon']; ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"></path>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"></path>
                        <image width="500" height="500" x="35" y="45" href="https://r.resimlink.com/c1f06BEFlv.png"></image>
                    </g>
                </svg>
            </div>
        </section>
        <section class="about bd-grid" id="about">
            <div class="about__data">
                <h2 class="about__title">About</h2>
                <p class="about__description">
                    Weather <strong>Sıcaklık:</strong> <span id="current-temperature">Yükleniyor...</span><br>
                    Job: Entrepreneur & Software Dev.<br>
                    Status: <span id="status">Active</span><br>
                    Time: <span id="time">Yükleniyor...</span>
                </p>
            </div>
        </section>
        <div class="fortext-portfolio">
            <h2>I Created</h2>
            <p>You can see My Projects & Others <a href="https://github.com/TPashaxrd">(Github)</a></p>
            <div class="fortext-projects">
                <?php foreach ($projects as $project): ?>
                    <div class="fortext-project">
                        <div class="fortext-project-image">
                            <img src="<?= $project['img']; ?>" alt="<?= $project['title']; ?>">
                            <a href="<?= $project['url']; ?>" class="fortext-project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                        <p style="text-align: left; font-weight: bold; font-size: 18px; color: black;"><?= $project['title']; ?></p>
                        <p style="text-align: left; font-size: 12px; color: gray;"><?= $project['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footer">
            <a href="toprak.nivesoft.com" class="footer-link">&copy; <?= date('Y'); ?> Toprak Tüm Hakları Saklıdır.</a>
        </div>
        <script src="scripts.js"></script>
    </main>
</body>
</html>
<style>
   .fortext-portfolio p a {
    color: #A1CEDC;
  }
</style>


<!-- 
// ! This 'Personel Page'
// ? Supported by Fortext Dev.
// ! Thank you ♥

<!-- 
// ! HTML - CSS - JS
// ? WHİTE THEME & DESİGN -->
// ! ABOUT & PERSONEL PAGE
//! DONT REMEMBER!
// ? IF YOU WANT USE PHP EVERYTİME,
// ! DONT REMEMBER, PHP IS NOT SAFE
// ? Php Have big risk, Example: SQL Server (SQLİnjection)

// ! You can use React Framework
// ? React is NodeJS Freamework &
// ? You can use 
// ? Tailwindcss & Css & JSX & TSX & HTML

// ! SQL & PHP = NotSafe
// ? React = Safe 

<!-- ! Dont use Php. If youre create only Personel blog you can, But if -->
<!-- ! You creating Big Project, Dont use PHP (IThink:YourChoice) -->
-->