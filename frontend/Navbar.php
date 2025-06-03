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
        <i id="close-btn" class="fa-solid fa-times"></i>
    </div>
    <a href="/"><i class="fa-solid fa-house-user"></i> Who we are</a>
    <div class="sidedrop">
        <div class="mainsidedrop">
            <a href="#"><i class="fa-solid fa-people-group"></i> Our Team <i id="arrow" class="fa-solid fa-caret-down"></i></a>
        </div>
        <div class="sidedropContent">
            <a href="eve.php"><i class="fa-solid fa-user-tie"></i> Executive</a>
            <a href="generalbody.php"><i class="fa-solid fa-users"></i> General Body</a>
            <a href="SeniorManagement.php"><i class="fa-solid fa-user-shield"></i> Senior Management</a>
            <a href="founder.php"><i class="fa-solid fa-user"></i> Founder</a>
        </div>
    </div>
    <div class="sidedrop">
        <div class="mainsidedrop">
            <a href="#"><i class="fa-solid fa-clipboard-list"></i> What we do <i id="arrow" class="fa-solid fa-caret-down"></i></a>
        </div>
        <div class="sidedropContent">
            <a href="Green_Energy.php"><i class="fa-solid fa-leaf"></i> Green Energy</a>
            <a href="enterprice.php"><i class="fa-solid fa-building"></i> Enterprise Developement</a>
            <a href="Agritural.php"><i class="fa-solid fa-seedling"></i> Food & Agriculture</a>
            <a href="readytoeat.php"><i class="fa-solid fa-pizza-slice"></i> Ready To Eat</a>
            <a href="health.php"><i class="fa-solid fa-stethoscope"></i> Health & Nutrition</a>
        </div>
    </div>
    <div class="sidedrop">
        <div class="mainsidedrop">
            <a href="#"><i class="fa-solid fa-chart-line"></i> Activities <i id="arrow" class="fa-solid fa-caret-down"></i></a>
        </div>
        <div class="sidedropContent">
            <a href="career.php"><i class="fa-solid fa-briefcase"></i> Career</a>
            <a href="notice.php"><i class="fa-solid fa-bullhorn"></i> Notice</a>
            <a href="press.php"><i class="fa-solid fa-newspaper"></i> Press</a>
            <a href="aboutus.php"><i class="fa-solid fa-circle-info"></i> About Us</a>
        </div>
    </div>
    <a href="Events.php"><i class="fa-solid fa-calendar-check"></i> Events</a>
    <a href="social.php"><i class="fa-solid fa-share-nodes"></i> Social</a>
    <a href="Contact.php"><i class="fa-solid fa-envelope-open-text"></i> Contacts</a>
</div>

<script src="navbar.js"></script>
<script src="menutoggle.js"></script>