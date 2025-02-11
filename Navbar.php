<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="menutoggle.css">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="navbar">
    <div class="top-row">

        <div class="logo"><a href="/dashboard/atmabiswas/"><img src="logoBg.png" alt=""></a></div>
        <div class="bars">
            <a href="notice.php">Notice</a>
            <a target="_blank" href="career.php">Career</a>
            <a href="press.php">Press</a>
            <a target="_blank" href="aboutus.php">About Us</a>
        </div>

        <div class="menu-toggle" id="menu-toggleId">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
    <div class="bottom-row">
        <a href="/">Who we are</a>

        <div class="dropdown">
            <div class="maindrop">
                <a href="#">Our Team <span class="space"> </span> <i id="arrow" class="fa-solid fa-caret-down"></i></a>
            </div>

            <div class="dropdown-content">
                <a target="_blank" href="generalbody.php">Executive and General Body</a>
                <a target="_blank" href="SeniorManagement.php">Senior Management</a>

                <a target="_blank" href="founder.php">Founder</a>

            </div>
        </div>
        <div class="dropdown">
            <div class="maindrop">
                <a href="#">What we do <span> </span> <i id="arrow" class="fa-solid fa-caret-down"></i></a>
            </div>

            <div class="dropdown-content">
                <a target="_blank" href="Green_Energy.php">Green Energy</a>
                <a target="_blank" href="enterprice.php">Enterprise Development</a>
                <a target="_blank" href="Agritural.php">Food & Agriculture</a>
                <a target="_blank" href="readytoeat.php">Ready To Eat</a>
                <a target="_blank" href="health.php">Health & Nutrition</a>
            </div>
        </div>

        <a href="Events.php">Events</a>
        <a href="Contact.php">Contact</a>
        <a href="#" id="login-btn">Login</a>
    </div>

</div>

<!-- SideNavbar custome design by AHSAN-->
<div class="sidenav">
    <div class="sidelogo">

        <i id="close-btn" class="fa-solid fa-x"></i>
    </div>
    <a href="/">Who we are</a>
    <div class="sidedrop">
        <div class="mainsidedrop">
            <a href="#">Our Team <i id="arrow" class="fa-solid fa-caret-down"></i></a>
        </div>
        <div class="sidedropContent">

            <a href="generalbody.php">Executive & General Body</a>
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

    <a href="Events.php">Events</a>
    <a href="Contact.php">Contact & Locations</a>
    <a class="loginbtn" href="">Login</a>


</div>
<!-- END sideNavBar-->
<div class="popup" id="login-popup">
    <div class="close-btn" id="close-popup">&times;</div>
    <form>
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
<script src="prac.js"></script>

<script src="navbar.js"></script>
<script src="menutoggle.js"></script>