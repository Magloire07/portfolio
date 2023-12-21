
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<nav>
        <div class="profile">
            <!-- <img src=<?php echo $user['imagepath'] ?>  alt="photo_de_profile">  -->
            <!-- <h1 ><?php  //echo $user['firstname'].' '.$user['surname'] ?>  </h1> -->
            <img src="images/bonHomme" alt="logo_bonhomme">
            <h1>Qui suis-je ? </h1>
            
        </div>
        <ul>
        
           <a href="index.php" ><div><img src="images/house.svg"alt="home"></div><li>Accueil</li></a> 
           <a href="projets.php"><div><img src="images/projets.jpg"        alt=""></div><li>Mes projets</li></a> 
           <a href="experiences.php"><div><img src="images/experience.svg"     alt=""></div><li>Expérience_Pro</li></a>
           <a href="education.php"><div><img src="images/education.svg"      alt=""></div><li>Educations</li></a>
           <a href="certifications.php"><div><img src="images/certifications.svg" alt=""></div><li>Certifications</li></a>
           <a href="competences.php"><div><img src="images/competences.svg"   alt=""></div><li>Compétences </li></a>


        </ul>
        <div class="options-deroulante">
            <a href="lien_vers_github" target="_blank">
                <img class="gitHub" src="images/GitHub-Logo.png" alt="GitHub">
                gitHub
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/instagram.jpg" alt="linkedin">
                linkedin
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/instagram.jpg" alt="instagram">
                instagram
            </a>
            <a href="lien_vers_github" target="_blank">
                <img src="images/facebook.png" alt="facebook">
                facebook
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
    </nav>
    
</body>
</html>