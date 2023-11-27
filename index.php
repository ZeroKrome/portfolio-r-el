<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/index.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <!-- lien de la police d'écriture -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- box icone -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Mathieu Lemaire</a>

        <!-- menu du responsive -->
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Accueil</a>
            <a href="#a-propos">A-Propos</a>
            <a href="#experience">Expériences</a>
            <a href="#projet">Mes projet</a>
            <a href="mailto:lemaire.mathieu.dev@gmail.com" id="contact">Me Contacter</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-texte">
            <h3>Bienvenue, moi c'est</h3>
            <br>
            <h1>Mathieu Lemaire</h1>
            <br>
            <h3>et je suis <span>developpeur web</span></h3>
            <br>
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100009009425590" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://github.com/ZeroKrome" target="_blank"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/mathieu-lemaire-8b394a294/" target="_blank"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="/download/CV.pdf" download="" class="btn">Mon CV</a>
        </div>
        <div class="acceuil-img">
            <img src="/logo/logo2.png" alt="">
        </div>
    </section>

    <section class="a-propos" id="a-propos">
        <div class="propos-img">
            <img src="/logo/logo2.png" alt="">
        </div>
        <div class="propos-text">
            <h2 class="heading">A propos de <span>moi</span></h2>
            <br>
            <h3>Développeur web et web mobile</h3>
            <br>
            <p>Dans le but de me reconvertir, je suis actuellement
                en formation pour devenir Développeur web et web mobile.
                Ce métier m'a toujours attiré et c'est donc dans cette
                optique que je me suis lancé. </p>
            <a href="#" class="btn">En savoir plus</a>
        </div>
    </section>
    <section class="experience" id="experience">
        <div>
            <h2><span>Mon </span>éxperience</h2>
            <p></p>
        </div>
    </section>
    <section class="projet" id="projet">
        <div>

        </div>
    </section>

</body>

</html>