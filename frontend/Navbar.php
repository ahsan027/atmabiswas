<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="menutoggle.css">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Desktop Navbar -->
<div class="navbar desktop-only">
    <div class="top-row">
        <div class="logo"><a href="/index.php"><img src="logoBg.png" alt=""></a></div>
        <div class="bars">
            <a href="notice.php">Notice</a>
            <a target="_blank" href="career.php">Career</a>
            <a href="press.php">Press</a>
            <a href="aboutus.php">About Us</a>
        </div>
    </div>
    <div class="bottom-row">
        <a href="index.php">Who we are</a>
        <div class="dropdown">
            <div class="maindrop">
                <a href="#">Our Team <span class="space"> </span> <i id="arrow" class="fa-solid fa-caret-down"></i></a>
            </div>
            <div class="dropdown-content">
                <a href="eve.php">Executive</a>
                <a href="generalbody.php">General Body</a>
                <a href="SeniorManagement.php">Senior Management</a>
                <a href="founder.php">Founder</a>
            </div>
        </div>
        <div class="dropdown">
            <div class="maindrop">
                <a href="#">What we do <span> </span> <i id="arrow" class="fa-solid fa-caret-down"></i></a>
            </div>
            <div class="dropdown-content">
                <a href="Green_Energy.php">Green Energy</a>
                <a href="enterprice.php">Enterprise Development</a>
                <a href="Agritural.php">Food & Agriculture</a>
                <a href="readytoeat.php">Ready To Eat</a>
                <a href="health.php">Health & Nutrition</a>
            </div>
        </div>
        <a href="Events.php">Events</a>
        <a href="social.php">Social</a>
        <a href="Contact.php">Contact</a>
    </div>
</div>

<!-- Mobile Header -->
<div class="mobile-header mobile-only">
    <div class="logo"><a href="/index.php"><img src="LOGO/Monogram for web.jpg" alt=""></a></div>
    <div class="menu-toggle" id="menu-toggleId">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</div>

<!-- Mobile Sidebar -->
<div class="sidenav">
    <div class="sidelogo">
        <img src="LOGO/Monogram for web only.png" alt="Logo" class="profile-img">
        <i id="close-btn" class="fa-solid fa-x"></i>
    </div>
    <a href="/">Who we are</a>
    <div class="sidedrop">
        <div class="mainsidedrop">
            <a href="#">Our Team <i id="arrow" class="fa-solid fa-caret-down"></i></a>
        </div>
        <div class="sidedropContent">
            <a href="eve.php">Executive</a>
            <a href="generalbody.php">General Body</a>
            <a href="SeniorManagement.php">Senior Management</a>
            <a href="founder.php">Founder</a>
        </div>
    </div>
    <div class="sidedrop">
        <div class="mainsidedrop">
            <a href="#">What we do <i id="arrow" class="fa-solid fa-caret-down"></i></a>
        </div>
        <div class="sidedropContent">
            <a href="Green_Energy.php">Green Energy</a>
            <a href="enterprice.php">Enterprise Developement</a>
            <a href="Agritural.php">Food & Agriculture</a>
            <a href="readytoeat.php">Ready To Eat</a>
            <a href="health.php">Health & Nutrition</a>
        </div>
    </div>
    <div class="sidedrop">
        <div class="mainsidedrop">
            <a href="#">Activities <i id="arrow" class="fa-solid fa-caret-down"></i></a>
        </div>
        <div class="sidedropContent">
            <a href="career.php">Career</a>
            <a href="notice.php">Notice</a>
            <a href="press.php">Press</a>
            <a href="aboutus.php">About Us</a>
        </div>
    </div>
    <a href="Events.php">Events</a>
    <a href="social.php">Social</a>
    <a href="Contact.php">Contacts</a>
</div>

<script src="navbar.js"></script>
<script src="menutoggle.js"></script>