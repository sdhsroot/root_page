<? session_start(); ?>
<script language="javascript" type="text/javascript" src="assets/js/end.js"></script>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ROOT </a>
            </div>
            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a>
                    </li>
                    <li><a href="#services">About</a>
                    </li>

                    <li><a href="#price-sec">History</a>
                    </li>

                    <li><a href="#contact-sec">Map</a>
                    </li>
                    <?php
                    if(isset($_SESSION['email']))
                    {?>
                    <li><a href="#" onclick="end()">Ctf</a></li>
                    <?php 
                    }
                    ?>
              
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
          </header>