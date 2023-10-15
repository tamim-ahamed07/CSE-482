<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-align-left"></i>
            <span>||</span>
        </button>
        <div style="float: left">
            <div class="dropdown mr-3" style="position: relative;">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;padding: 2px">
                    <img class="nav-user-photo rounded-circle" width="50" src="../images/<?php echo $_SESSION["image"]; ?>">
                </button>
                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton" style="position: absolute;left: -90px">
                    <a class="dropdown-item position-relative" href="logout/">Switch to seller</a>
                    <a class="dropdown-item position-relative" href="?logout">Logout</a>
                </div>
                </div>
        </div>
    </div>
</nav>