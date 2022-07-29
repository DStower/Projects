<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <script src="./index.js" async></script>
</head>
<body>
    <header>
        <a href="#" class="logo">Huskies<span>.</span></a>
        <div class="menu--toggle" onclick="toggleMenu();">&#9776;</div>
        <div class="nav--container">
            <nav class="navigation">
                <ul>
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Animals</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <nav class="navigation">
                <ul>
                <?php
                    if(isset($_SESSION["userid"])){
                ?>
                    <li><a href="#"><?php echo $_SESSION["useruid"];?></a></li>
                    <li><a href="includes/logout.inc.php">Logout</a></li>
                <?php 
                    }else{
                ?>
                    <li class="split"><a href="#">Sign Up</a></li>
                    <li class="split"><a href="#">Login</a></li>
                <?php 
                    }
                ?>
                </ul>
            </nav>
        </div>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2><span>T</span>he Best Breed</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore itaque molestiae, ut consequuntur voluptate expedita dolorum.</p>
            <a href="#" class="btn">Our Huskies</a>
        </div>
    </section>
    <section class="login--section" id="login--section">
        <div class="wrapper">
            <div class="login--signup">
                <h2 class="title--text"><span>S</span>ign Up</h2>
                <p>Don't have an account yet?<a href="#">Sign Up Here!</a></p>
                <form action="includes/signup.inc.php" method="post">
                    <div class="input--box">
                        <input type="text" name="uid" placeholder="Username">
                    </div>
                    <div class="input--box">
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="input--box">
                        <input type="password" name="pwdrepeat" placeholder="Confirm Password">
                    </div>
                    <div class="input--box">
                        <input type="text" name="email" placeholder="Email">
                        <br>
                    </div>
                    <div class="input--box">
                        <input type="submit" name="submit" value="Sign Up">
                    </div>
                </form>
            </div>
            <div class="login--login">
                <h2 class="title--text"><span>L</span>ogin</h2>
                <p>Don't have an account yet?<a href="#">Sign Up Here!</a></p>
                <form action="includes/login.inc.php" method="post">
                    <div class="input--box">
                        <input type="text" name="uid" placeholder="Username">
                    </div>
                    <div class="input--box">
                        <input type="password" name="pwd" placeholder="Password">
                        <br>
                    </div>
                    <div class="input--box">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>