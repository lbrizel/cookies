<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>View Your Settings</title>
        <style type="text/css">
            body{
                <?php
                    //Check for a font size value
                    if (isset($_COOKIE['font_size'])) {
                        echo "font-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
                    } else {
                        echo "font-size: medium;";
                    }

                    //Check for a font color value
                    if (isset($_COOKIE['font_color'])) {
                        echo "font-color: #" . htmlentities($_COOKIE['font_color']) . ";\n";
                    } else {
                        echo "color: #000;";
                    }
                ?>
            }
        </style>
    </head>
    <body>
        <p><a href="customize.php">Customize Your Settings</a></p>
        <p><a href="reset.php">Reset Your Settings</a></p>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati excepturi ut officiis ex repellat,
        aliquam sunt,
        quibusdam commodi iusto consequuntur quidem ullam odit molestiae,
        rem nobis dolor ! Autem,
        quia. </p>
    </body>
    </html>