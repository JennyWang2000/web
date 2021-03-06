<!-- Navigation -->
<div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <h1>Animal salvation and adoption</h1>

        </div>  <!-- end navbar-header div -->

        <div class="container">
        <!-- Navigation links go below -->
            <div class="navbar-collapse collapse">
 

                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    
                    <li><a href="Issues.php" class="dropdown-toggle" data-toggle="dropdown">Issues<b class="caret"></b></a>
                        <!-- dropdown-menu starts here  -->
                        <ul class="dropdown-menu">
                            <li><a href="../animal_news.php">Animal News</a></li>
                            <li><a href="../lost.php">Lost Animals </a></li>
                            <li><a href="../found.php">Found Animals</a></li>
                        </ul>

                    </li>

                    <li><a href="" class="dropdown-toggle" data-toggle="dropdown">Salvation<b class="caret"></b></a>
                        <!-- dropdown-menu starts here  -->
                        <ul class="dropdown-menu">
                            <li><a href="../animal_shelter.php">Animal Shelter</a></li>
                            <li><a href="../animal_center.php">Animal Center</a></li>
                        </ul>
                        <!-- dropdown-menu ends here  -->
                    </li>

                    <li><a href="" class="dropdown-toggle" data-toggle="dropdown">Adoption<b class="caret"></b></a>
                        <!-- dropdown-menu starts here  -->
                        <ul class="dropdown-menu">
                            <li><a href="../adopt.php">Adopt Animals</a></li>
                            <li><a href="../training.php">Animal Training</a></li>
                            <li><a href="../feeding_products.php">Feeding Products</a></li>
                        </ul>
                        <!-- dropdown-menu ends here  -->
                    </li>

                    <li><a href="" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="/Business_Web/presentation/views/adminUsers.php" data-toggle="modal">Users</a>
                            </li>
                            <li>
                                <a href="/Business_Web/presentation/views/adminProducts.php" data-toggle="modal">Products</a>
                            </li>
                        </ul>
                    </li>
        
                    <li>
                    </li>                 

                </ul>              
                <?php if (isset($_SESSION['userID'])) {
                    echo "<div class='btn btn-light'>Welcome " . $_SESSION['name'] ."<a href='/Business_Web/presentation/handlers/processlogout.php";

                }else {
                ?>

                <form action="/Business_Web/presentation/handlers/processLogin.php" class="form-inline my-2 my-lg-0" method="post">
                    <input class="form-control mr-sm-2" placeholder="Name" name="username" aria-label="Username">
                    <input class="form-control mr-sm-2" placeholder="Password" name="password" aria-label="Password">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Login
                    </button>
                </form>
                <?php
                }
                ?>

                <form action="/Business_Web/presentation/handlers/ProductSearchHandler.php" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="name" aria-label="Search">
                    <button class="btn btn-default" type="submit">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQ4NS4yMTMgNDg1LjIxMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDg1LjIxMyA0ODUuMjEzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ3MS44ODIsNDA3LjU2N0wzNjAuNTY3LDI5Ni4yNDNjLTE2LjU4NiwyNS43OTUtMzguNTM2LDQ3LjczNC02NC4zMzEsNjQuMzIxbDExMS4zMjQsMTExLjMyNCAgICBjMTcuNzcyLDE3Ljc2OCw0Ni41ODcsMTcuNzY4LDY0LjMyMSwwQzQ4OS42NTQsNDU0LjE0OSw0ODkuNjU0LDQyNS4zMzQsNDcxLjg4Miw0MDcuNTY3eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik0zNjMuOTA5LDE4MS45NTVDMzYzLjkwOSw4MS40NzMsMjgyLjQ0LDAsMTgxLjk1NiwwQzgxLjQ3NCwwLDAuMDAxLDgxLjQ3MywwLjAwMSwxODEuOTU1czgxLjQ3MywxODEuOTUxLDE4MS45NTUsMTgxLjk1MSAgICBDMjgyLjQ0LDM2My45MDYsMzYzLjkwOSwyODIuNDM3LDM2My45MDksMTgxLjk1NXogTTE4MS45NTYsMzE4LjQxNmMtNzUuMjUyLDAtMTM2LjQ2NS02MS4yMDgtMTM2LjQ2NS0xMzYuNDYgICAgYzAtNzUuMjUyLDYxLjIxMy0xMzYuNDY1LDEzNi40NjUtMTM2LjQ2NWM3NS4yNSwwLDEzNi40NjgsNjEuMjEzLDEzNi40NjgsMTM2LjQ2NSAgICBDMzE4LjQyNCwyNTcuMjA4LDI1Ny4yMDYsMzE4LjQxNiwxODEuOTU2LDMxOC40MTZ6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTc1LjgxNywxODEuOTU1aDMwLjMyMmMwLTQxLjgwMywzNC4wMTQtNzUuODE0LDc1LjgxNi03NS44MTRWNzUuODE2QzEyMy40MzgsNzUuODE2LDc1LjgxNywxMjMuNDM3LDc1LjgxNywxODEuOTU1eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    </button>
                </form>

                


              
            </div>  <!-- end navbar collapse -->
        
        </div>  <!-- end navigation container div -->
    </div>  <!-- end navbar navebar-default div -->
