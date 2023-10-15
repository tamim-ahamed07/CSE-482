<nav id="sidebar" style="min-height: 100vh;">
    <div class="sidebar-header">
        <img src="../images/<?php echo $_SESSION["image"]; ?>" width="100" class="rounded-circle mx-auto d-block img-fluid">
        <h5 class="text-center"><b class="text-warning"><?php echo $_SESSION['name']; ?></b></h5>
    </div>
    <ul class="lisst-unstyled components">
        <p class="text-center">Super admin</p>
        <li class="active">
            <a href="dashboard.php" >Home</a>
        </li>
        <li >
            <a href="#pdfmenu" data-toggle="collapse" arial-expanded="false" class="dropdown-toggle"><i class="fa fa-align-left"></i>Blog</a>
            <ul class="collapse lisst-unstyled" id="pdfmenu">
                <li>
                    <a href="blog.php"><i class="fa fa-align-left"></i>View All Blog</a>
                </li>
                <li>
                    <a href="add_blog.php">Add Blog</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="forum.php"><i class="fa fa-align-left"></i>Forum</a>
        </li>
    </ul>
</nav>