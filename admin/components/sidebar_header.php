<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar  collapse bg-white" >
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">

                <a href="./" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-building fa-fw me-3"></i><span>Home</span></a>
                <a href="./courses.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-calendar fa-fw me-3"></i><span>Courses</span></a>
                <a href="./userRecord.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-users fa-fw me-3"></i><span>All Users</span></a>
                <a href="./addQuestions.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-add fa-fw me-3"></i><span>Question</span></a>

            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar pb-0  navbar-expand-lg navbar-dark bg-dark text-light fixed-top px-4" >
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div>
            <h4 >CODEFOX</h4>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <p>Hi,&nbsp;<span> <?php echo $_SESSION['user_name'] ?></span></p>
                    <p class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://www.pngkey.com/png/full/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png" class="rounded-circle" height="35" alt="" loading="lazy" />
                    </p>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item disabled" href="#">Teacher</a></li>
                        <li><a class="dropdown-item" href="./userProfile.php">My profile</a></li>
                        <li><a class="dropdown-item" href="./components/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </nav>
</header>