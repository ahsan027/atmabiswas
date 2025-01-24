<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Active Page</title>
<style>
    body{
         font-family: Arial, sans-serif;     
        background-color: #e6f2ff;
        margin: 0;
        padding: 0;
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
