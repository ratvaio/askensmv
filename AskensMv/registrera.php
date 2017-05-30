<?php include "Connection.php"; ?>
    <?php include  "CreateFunction.php"?>



        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="registrera.css">
            <title>PHP Form</title>
        </head>

        <body>

            <form action="registrera.php" method="post">
                <img src="bilder/askens-mv-logga-png.png" alt="Avatar" class="avatar">
                <fieldset>
                    <legend>Sign up för Askens MålvaktsUtblidning:</legend>
                    <label> Användarnamn :
                        <BR>
                        <input type="text" class="username" name="username" required autocomplete="off"> </label>
                    <br>
                    <label> Email:
                        <br>
                        <input type="email" class="email" name="email" required autocomplete="off">
                        <br> </label>
                    <label>Lösenord:
                        <br>
                        <input type="password" class="password1" name="password1" required autocomplete="off"> </label>
                    <br>
                    <label> Återuprepa lösenord:
                        <br>
                        <input type="password" class="password2" name="password2" required autocomplete="off"> </label>
                    <br>


                    <button type="submit" class="submit" name="submit" value="create">Login</button>


                </fieldset>
            </form>




        </body>

        </html>