<div class="container-fluid ">

    </div>  
    <nav style="height:fit-content" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">AirCorp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="https://lesfs.ca">LES Financial Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="Services" class="dropdown-item" href="<?php echo $htmlroot;?>contact.php?service=web development">Web Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $htmlroot;?>contact.php?service=Server Administration">Server Administration</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"> Application Development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="projects" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Projects
                        </a>
                        <ul id="project_list" class="dropdown-menu">
                            <li><Button class="dropdown-item" onmouseover="ProjectList( 'web development','projects')">Web Based Project</button></li>
                            <li><a class="dropdown-item" onmouseover="ProjectList( 'Software development','projects')">Software Development Project</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="blank" href="<?php echo $htmlroot;?>contact.php">Contact me</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search " aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
