<html>
    <head>
        <title>Pagina Di Accesso</title>
    </head>
    <?php 
        if(!isset($_POST['invia']))//verifico se è il primo accesso o se è stato premuto il submit del form
          {
                echo<<<END
                    <form align="center" action="index.php" method="POST" >
                    <br><br><br>
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username"><br>

                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br>
        
                    <br>
                    <input type="submit" value="login" name ="invia">
                    </form>
                END; 
          }
        else
             {
                $usr=$_POST ["username"];
                $pwd=$_POST ["password"];

                if($usr=="Andrea" && $pwd=="Rossetti")
                {
                   echo "<h3>!!BENVENUTO NELL'AREA RISERVATA!!</h3>";
                }
                else
                {
                    echo "<h3>!!CREDENZIALI SBAGLIATE!!</h3>";
                } 
             }
     ?>

</html>

<style>
    body
    {
        background-color:#F0FFFF;
    }
    h3
    {
        margin-left:40%;
        margin: top 20px;%;
    }
    body
    {
        background-color:#F0FFFF;
    }
    h3
    {
        margin-left:40%;
        margin-top:20%;
    }
    </style>
