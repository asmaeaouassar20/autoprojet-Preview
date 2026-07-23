<?php 

include('include/svg.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        .icon{
            display:block;
            width:30px;
            height: 30px;
        }
        .social-medias{
            display : flex;
            list-style: none;
            padding-top: 20px;
            gap: 10px;
        }
        .contact{
            margin-top: 50px;;
        }
        .title{
            margin-bottom: 50px;
        }
        
        .content{
            display: flex;
            color:#757575;
            justify-content: space-between;
            flex-direction: column;
            gap:8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">Oops… Ce bouton ne mène nulle part ! </h1>
        <div class="content">
            <p>Cette page d'accueil, c'est 1 % de mon projet de fin d'études. Le reste ? Confidentiel.</p>
            <p>Le cœur du projet reste protégé, mais j'ai tenu à vous offrir un avant-goût de mon travail.</p>
            <p>Vous souhaitez en savoir plus ou voir mon portfolio complet ?</p>
        </div>
        <div class="contact">
            <p>Contactez-moi sur :</p>
            <ul class="social-medias">
                <li><a href="https://www.linkedin.com/in/asmae-aouassar-2738b624b/" class="icon"><?php echo ico_linkedin() ?></a></li>
                <li><a href="https://github.com/asmaeaouassar20" class="icon"><?php echo ico_github() ?></a></li>
                <li><a href="https://www.youtube.com/@algostyle5707" class="icon"><?php echo ico_youtube() ?></a></li>
                <li><a href="https://asmae-aouassar.netlify.app/" class="icon"><?php echo ico_portefolio() ?></a></li>
            </ul>
        </div>
    </div>
</body>

</html>