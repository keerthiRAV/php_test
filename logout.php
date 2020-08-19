
<?php
 // unset($_SESSION['counter']);
 session_start();
 unset($_SESSION["username"]);
 unset($_SESSION["password"]);
session_destroy();

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
        $message = "Logged out successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
       header("location:/test/login.php");
         
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