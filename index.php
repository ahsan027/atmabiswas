<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Active Page</title>
    
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="menutoggle.css">
    <link rel="stylesheet" href="imageSlider.css">


<link rel="stylesheet" href="index.css">
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

</style>
<body>

<?php include 'prac.php'?>
<!-- <br> -->
<?php include 'imageSlider.php' ?>

<div class="container">
            <div class="numbers">
        <div class="number-card">
            <h2 id="number1">0</h2>
            <p>Projects Completed</p>
        </div>
        <div class="number-card">
            <h2 id="number2">0</h2>
            <p>Happy Clients</p>
        </div>
        <div class="number-card">
            <h2 id="number3">0</h2>
            <p>Awards Won</p>
        </div>
        <div class="number-card">
            <h2 id="number4">0</h2>
            <p>Cups of Coffee</p>
        </div>
    </div>
</div>

<div class="sectionalparts">
    <h1>Our Goals</h1>
    <p>Our mission is to work for progressive social transformation with the aim of institutionalizing a society that place <strong>harmony, peace, justice and ecological balance together</strong></p>
    <div class="secbtns">
        <button class="secbtn">Achievements</button>
        <button class="secbtn">Vision, Mission</button>
        <button class="secbtn">OrganoGram</button>
        <button class="secbtn">Our Partners</button>
</div>


    </div>


<div class="sectionalparts">
    <h1>Latest</h1>
    <p><strong>Find the latest news of ATMABISWAS here.</strong></p>
</div>

    <?php include 'test.php'?>



    <?php include 'joinwithus.php' ?>




<?php include 'footer.php'?>    

    <script src="index.js">
       

    </script>
</body>
</html>
