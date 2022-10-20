<html>
    <?php
        $usr= $_POST ["username"];
        $pwd= $_POST ["password"];
        
        if(isset($usr) || isset($pwd))
        {
            if($usr=="Andrea" && $pwd=="Rossetti")
            {
                echo "<br><br><h3>Benvento " .$usr. " nell'area riservata<br>";
            }
            else
            {
                header("refresh:0; url=index.html");
            }
            
        }
        else
        {
            header("refresh:0; url=index.html");
        }
     ?>
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
    </style>
</html>
