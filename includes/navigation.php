
    <?php session_start();?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if(isset($_SESSION['username'])){?>
                        <li>
                        <a href="your_urls.php">Your Urls</a>
                    </li>
                    <li>
                        <a href="./includes/logout.php">Logout</a>
                    </li>

                    <?php } else {?>
                    <li>
                        <a href="registration.php">Registration</a>
                    </li>
                    <li>
                        <a href="login_page.php">Login</a>
                    </li>
                    <?php } ?>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>