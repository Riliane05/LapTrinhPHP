<nav class="navbar navbar-expand-lg navbar-light bg-light custom-header">
    <a class="navbar-brand" href="home.php">HP's Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="model/init.php">Init</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signin.php">Sign In</a>
            </li>
        </ul>
    </div>
</nav>

<style>
.custom-header {
    background: #4A90E2 !important; 
    padding: 12px 25px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
}

.custom-header .navbar-brand {
    color: #fff !important;
    font-weight: 700;
    font-size: 22px;
}

.custom-header .nav-link {
    color: #ffffff !important;
    font-weight: 500;
    padding: 8px 14px !important;
    border-radius: 6px;
    transition: 0.25s ease;
}

.custom-header .nav-link:hover {
    background: rgba(255, 255, 255, 0.25);
    color: #fff !important;
}

.custom-header .active .nav-link {
    background: rgba(255, 255, 255, 0.45);
    color: #fff !important;
    border-radius: 6px;
}

.custom-header .navbar-toggler {
    border-color: rgba(255,255,255,0.7);
}

.custom-header .navbar-toggler-icon {
    filter: brightness(0) invert(1);
}

body {
    padding-top: 80px;
}
</style>
