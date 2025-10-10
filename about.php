<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codespaces</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/style.css" media="all" />
        <script src="/assets/script.js"></script>
    </head>
    <body class="about">
        <div id="main" class="about">
            <a href="/"><img src="/assets/codespaces.png" /></a>
            <div class="about__container">
                <div class="about__left">
                    <img src="/assets/IMG_7506.jpg" />
                </div>
                <div class="about__right">
                    <h1>About Me</h1>
                    <h3 class="about-name">John.B.Kelley</h3>
                    <p>Hello!! On this page I am going to tell you a little about myself.</p>
                    <p>My name is John Benjamin Kelley and i live in virginia. I just turned 18 years old on the 19th of september. some of the things i like to do is fish, hunt deer, dove and squirrelS. Another thing i like to do is build stuff like Legos and model cars. I like to liston to music while i do pretty much everything. some of my favorite artists are NF, Forrest Frank, and Tobby Mac.</p>
                    <p>My favorite song right now is Riptide by Vance Joy. I am currently in my last year of highschool. After i finish highschool i plan on going to Wytheville community College for their two year Electricians program but God may change my plans like He has before and i've just got to trust Him. He's got a plan for my life He's got someone out there for me He's got the right job for me. Jeremiah 29:11 says "For I know the plans I have for you,"declarers the Lord,"Plans to prosper you and not harm you,plans to give you hope and a future.".</p>
                    <table>
                <thead>
                        <tr>
                                <th>Hobby</th>
                                <th>About</th>
                        </tr>
                    </thead>      
                    <tbody>
                        </tr> 
                                <td>Deer Hunting</td>
                                <td>Being in the woods and in the silence of it all is just always fun. Until the gun goes off then its just like did I hit it or did I miss. Some days its cold and rainy but other times its dry and not cold. sitting up in a tree for bow season can be either really fun or really boring. </td>
                        </tr>
                        <tr>
                                <td>Basketball</td>
                                <td>Basketball is a fun and fastpast sport that takes team work. You have to learn plays to run in game and if not everyone knows them then they wont work. Everyone is a coach in a way. If someone doesn't know a play and you do try and teach them it.</td>
                        <tr>
                        </tr>
                                <td>Building Legos while listening to music</td>
                                <td>Building legos takes some time but once you get into building one you dont want to stop. listening to music while doing it kinda puts you into your own little world. Legos are really expensive ]:.</td>
                </tbody>
                    <div class="about__socials"><?php

                        // Set socials.
                        $socials = [
                            'instagram' => 'https://www.instagram.com/johnboy952855/',
                            'facebook'  => 'https://www.facebook.com/profile.php?id=100087872299878/',

                        ]; // Loop.
                        foreach( $socials as $social_id => $social_url ) {

                            // Output. ?>
                            <a href="<?php echo $social_url; ?>" class="about-social" target="_blank">
                                <img src="/assets/<?php echo $social_id; ?>.svg" />
                            </a><?php

                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>