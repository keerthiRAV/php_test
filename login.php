<?php
session_start();

?>
<html>
    <head><title>date</title>
    <style>
        aside{
           float:right;
           width:30%;
           background-color: lightgrey; 
           padding-left:15 px;
           margin-left:15px;
           margin-bottom:100px;
        }
        footer{
            margin-top:100px;

        }
        nav,footer{
            background-color:cadetblue;
            height:100px;
            width:100%;
            text-align: center;
        }
        nav a,footer a{
            margin: 0;
            padding-top: 42px ;
            padding-bottom:48px;
            padding-left:15px;
            padding-right:15px;
            float:right;
            /*text-align:center;
            //float:right;*/


        }
        lname1,lname2,tbox1,tbox2{
            display:iblock;
        }
    </style>
    </head>

    <body>
        <?php
        //include 'databaseconnection.php';
        $mysqli = mysqli_connect("localhost", "root", "", "test");

  
        if(isset($_POST['submit'] ))
        {
            $uname= $_POST['tbox1'];
            $pwd= $_POST['tbox2']; 

            
            if($uname!="" && $pwd!=""){
                $sql= "SELECT id, username, password FROM test where username=$uname and password=$pwd";
                $result = mysqli_query($mysqli,$sql);
                if($result!=" ")
                {
                    echo "connected";
                    print_r($result);
                    $_SESSION["username"]=$uname;
                    $_SESSION["password"]=$pwd;
                    $_SESSION["active"]=1;
                }
                $_SESSION["username"]=$uname;
                $_SESSION["password"]=$pwd;
                $_SESSION["active"]=0;
                $sqla= "SELECT id, username, password FROM login";
                $resulta = mysqli_query($mysqli,$sqla);
               while( $row = mysqli_fetch_array($resulta, MYSQLI_ASSOC))
               {
                echo  $row["username"]." ".$row["password"],"<br>";
               }
            }
            else
            echo "sry";

        }
        ?>
        <header>
            <nav>
                <a href="login.php" >Login</a>
                <a href="register.php">Register</a>
                <a href="gallery.php">Gallery</a>
                <a href="contact.php">Contact</a>
                <a href="logout.php">Logout</a>
            </nav>
            <h2> LOGIN </h2>
        </header>
        <section>
            <h3>sign in here</h3>
            <article>
            <form method="POST" action="" >
                <label name="lname1">Username</label>
                <input type="text" name="tbox1" ><br><br>
                <label name="lname2">Password</label>
                <input type="text" name="tbox2" ><br><br>
                <input type="submit" name="submit"id="submit" value="submit" >
                </form>
            </article>
            <br>
        </section>
        <aside>
            <p>The Epcot center is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
            </aside>

 
        <section>
            <article>
                    <header></header>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum."
            </article>
        </section>
        <footer>
            <a href="a.html" >page 1</a>
            <a href="b.html">page 2</a>
            <a href="c.html">page 3</a>
            <a href="d.html">page 4</a>
        </footer>
    </body>
</html>