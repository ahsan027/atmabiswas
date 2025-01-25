<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Active Page</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    body{
         font-family: Arial, sans-serif;     
        background-color: #e6f2ff;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }
    .navbar .top-row {
        margin-left: -1.2rem;

    }
    .navbar .top-row .bars{
        margin-left: -1rem;
    }
</style>
</head>
<body>
<div>
    <?php include 'Navbar.php' ?>
</div>
<div>
    <?php include 'exeandged.php' ?>

</div>
<div>
    <?php include 'footer.php'?>
</div>  

<script src="script.js"></script>
    <script>
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.bottom-row').classList.toggle('active');
        });

        document.getElementById('login-btn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('login-popup').classList.add('active');
        });

        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('login-popup').classList.remove('active');
        });
    </script>
</body>
</html>
