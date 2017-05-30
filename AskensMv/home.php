<?php include "connection.php";
 
if (isset($_POST["submit"]))
{  
   
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $password2 = mysqli_real_escape_string($connection, $_POST["password2"]);
   
   
    $query = "SELECT * FROM login WHERE username = '$username' AND password2 = '$password2'";
    
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1)
    {
        global $connection ;
            $username = $_POST["username"];
            $password2 = $_POST["password2"];
            
             if($_SESSION['login']){//här kollar den ifall sessionen login är active så kommer den att redirecta till video.html
            
        header("location: video.html");
        die;
             }
       
        if(!$result){
            die ("failed");
        }
       
       
       
    }
    else //ifall kontot inte finns så komemr deta medelande upp
    {    
         echo "Kontot existerar ej. Var vänligen och registrer dig!";    
    }
}

    
?>

    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8" />
        <title>Askens Mälvaktsutblidning</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>

    <body>
        <header>


        </header>

        <ul>
            <li><img src="Bilder/askens-mv-logga-png.png" width="70" </li>
                <li><a href="#">Hem</a></li>
                <li><a href="nyhet.php">Nyheter</a></li>
                <li>
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="login">Login</button>
                    </a>
                </li>
                <li style="float:right"><a href="ommig.html">Om Asken</a></li>
                <li style="float:right"><a href="#">Tjänster</a></li>
                <li style="float:right"><a href="#">Goalie Camps</a></li>

        </ul>
        <div>
            <h2>.</h2>

            <!-- här är själva pop upp rutan -->
            <div id="id01" class="modal">

                <form class="modal-content animate" action="video.html" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h2>Login</h2>
                        <img src="bilder/askens-mv-logga-png.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" class="username" name="username" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" class="password2" name="password2" required>

                        <button type="submit" class="submit" name="submit" value="login">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span>Har du inget Account?<a href="registrera.php">Registrera dig här!</a></span>
                        <span class="psw">Glömt<a href="#">Lösenord?</a></span>
                    </div>
                </form>
            </div>
        </div>






        <div class="kontainer">
            <h2><u>Askens Målvaktsutbildning!!</u></h2>
            <article>
                <img src="Bilder/robin%20FUS.jpg">
                <img src="Bilder/15826268_943544512448340_8947114635992211510_n.jpg" width="300px" hspace="65px">
                <p>Askens erbjuder allt ifrån individuell träning till gruppträning.
                    <br>Det mesta går att ordna och komma ut på enskilda pass är inga problem, oavsett vart landet behovet finns!
                    <br>som driver Askens heter Robin Asklöf och är en ren målvaktstränare sedan 2010 efter 20 år som aktiv målvakt.
                    <br> om mig och min tanke hittar ni under ”Om mig”.
                    <br>Tveka inte att höra av er om ni har några frågor eller vill ha en offert!
                    <br>
                    <br>Tack på förhand /Robin Asklöf</p>
            </article>
        </div>

        <footer>
            <div>
                <p>© 2017 Askens Målvaktsutbildning. All Rights Reserved. </p>
            </div>

        </footer>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


    </body>

    </html>