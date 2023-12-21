
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- pour la rendre compatible avec Internet exploirer (IE) ou edge-->
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body >
<nav >
        <div class="profile">
            <!-- <img src=<?php echo $user['imagepath'] ?>  alt="photo_de_profile">  -->
            <!-- <h1 ><?php  //echo $user['firstname'].' '.$user['surname'] ?>  </h1> -->
            <img src="images/bonHomme" alt="logo_bonhomme">
            <h1>Qui suis-je ? </h1>
            
        </div>
        <ul>
       
           <a href="#"  id="github_et_reseaux"><div><img src="images/GitHub-Logo.svg"alt=""></div><li>GitHub et Reseaux</li></a> 
           <a href="projets.php"><div><img src="images/projets.jpg"        alt=""></div><li>Mes projets</li></a> 
           <a href="experiences.php"><div><img src="images/experience.svg"     alt=""></div><li>Expérience_Pro</li></a>
           <a href="education.php"><div><img src="images/education.svg"      alt=""></div><li>Educations</li></a>
           <a href="certifications.php"><div><img src="images/certifications.svg" alt=""></div><li>Certifications</li></a>
           <a href="competences.php"><div><img src="images/competences.svg"   alt=""></div><li>Compétences </li></a>
       

        </ul>
        <div class="options-deroulante">
            <a href="https://github.com/Magloire07" target="_blank">
                <img src="images/GitHub-Logo.png" alt="GitHub">

                gitHub
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/instagram.jpg" alt="instagram">
                instagram
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/LinkedIn-Symbole.svg" alt="linkedin">
                Linkedin
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/tweeter.png" alt="tweeter">
                tweeter
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/telegram.jpg" alt="telegram">
                telegram
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/whatsApp.png" alt="whatsApp">
                whatsApp
            </a>
            <!-- Ajoutez d'autres liens vers vos réseaux sociaux ici -->
       </div>
    </nav>    <section class="page-content">
       <header>
    <h1>Hey je suis future ingénieur DevOps </h1>
      <p>L’ingénieur <span>  DevOps</span> est un expert qui a les missions du <span>développeur </span> (celui qui développe 
        une solution informatique) et celles de <span>l’administrateur système</span> (celui qui est chargé de 
        la déployer). Dans un premier temps, l’ingénieur DevOps est chargé de <span>créer une application</span>
         qui répond précisément aux attentes et besoins mentionnés dans un cahier des charges. 
         Dans un second temps, il doit mener des tests et <span>déployer</span> cette solution tout en garantissant
          son bon fonctionnement tout au long de son <span>cycle de vie</span>.</p>
       
    
       </header>
      
      <section class="presentation-image">
         <img src="images/devops.png" alt="devops_image">
      </section>
     
    <script type="text/JavaScript" src="index.js"></script>
    <div class="overlay1" ></div>

</body>
</html>