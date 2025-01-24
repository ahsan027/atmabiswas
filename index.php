<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Active Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow-x: hidden;
            background-color: #e6f2ff; /* Light blue background */
            margin: 0;
            padding: 0;
        }

        .numbers {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.number-card {
    background-color: #ffffff;
    flex: 1;
    min-width: 200px;
    margin: 10px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.number-card:hover {
    transform: scale(1.05);
}

h2 {
    font-size: 2em;
    margin: 0;
    color: #333;
}

p {
    font-size: 1.2em;
    color: #666;
}

/* Responsive Design */
@media (max-width: 768px) {
    .number-card {
        min-width: 150px;
    }

    h2 {
        font-size: 1.5em;
    }

    p {
        font-size: 1em;
    }
}

@media (max-width: 480px) {
    .number-card {
        min-width: 100px;
    }

    h2 {
        font-size: 1.2em;
    }

}



.container_aboutus {
    width: 90%;
    max-width: 1200px;
    margin: 2% auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    opacity: 0;
    transition: opacity 2s;
}

.container_aboutus.show {
    opacity: 1;
}

h1, h2 {
    color: #0073e6;
}

p {
    margin: 1em 0;
}

ul {
    padding-left: 20px;
}

/* Responsive Styles */
@media (max-width: 768px) {
    body{
        padding: 1rem;
    }
   

    .container_aboutus {
        width: 100%;
        margin: 0;
        padding: 10px;
        margin-right: 1rem;
        border-radius: 5px;
    }

    h1, h2 {
        font-size: 1.5rem;
    }

    p, ul {
        font-size: 1rem;
    }
}

        @media (min-width:768px) {
            .container_aboutus{
                padding: 1rem;
            }
            
        }


.sectionalparts {
    width: 100%;
    padding: 50px 20px;
    background-color: #ffffff;
    text-align: center;
    border-bottom: 2px solid #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.sectionalparts h1 {
    font-size: 2.5rem;
    color: #0073e6;
    margin-bottom: 20px;
}

.sectionalparts p {
    font-size: 1.2rem;
    color: #555;
    line-height: 1.6;
}

.sectionalparts:hover {
    transform: scale(1.02);
    background-color: #ffffff;
    border-bottom: #0073e6 2px solid;
}

/* Responsive Design */
@media (max-width: 992px) {
    .sectionalparts h1 {
        font-size: 2rem;
    }
    .sectionalparts p {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .sectionalparts {
        padding: 30px 15px;
    }
    .sectionalparts h1 {
        font-size: 1.8rem;
    }
    .sectionalparts p {
        font-size: 0.95rem;
    }
}

@media (max-width: 480px) {
    .sectionalparts {
        padding: 20px 10px;
    }
    .sectionalparts h1 {
        font-size: 1.5rem;
    }
    .sectionalparts p {
        font-size: 0.85rem;
    }
}

.foot{
    width: 100vw;
}
.secbtns{

    display: flex; 
    gap:1rem;
    justify-content: center;
    align-items: center;
}
.secbtn{
    border-radius: 15px;
    font-family: Arial, Helvetica, sans-serif;
    font:bold;
    background-color: #0073e6;
    color: #ffffff;
    padding: 0.7rem;
    cursor: pointer;
    border: 0;
}


@media(max-width:768px){
.secbtns{

    display: flex;
   
    gap:1rem;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}


}
.secbtn{
    border-radius: 15px;
    font-family: Arial, Helvetica, sans-serif;
    font:bold;
    background-color: #0073e6;
    color: #ffffff;
    padding: 0.7rem;
    cursor: pointer;
    border: 0;
}
    </style>
</head>
<body>
    <div>
        <?php include 'Navbar.php'?>
    </div>

    <div>
        <?php include 'imageSlider.php' ?>
    </div>
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
<div>
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

</div>
<div class="sectionalparts">
    <h1>Latest</h1>
    <p><strong>Find the latest news of ATMABISWAS here.</strong></p>
</div>
<div class="sectionalparts">
    <?php include 'test.php'?>

</div>
<div class="sectionalparts">
    <?php include 'joinwithus.php' ?>

</div>

<div class="foot">
<?php include 'footer.php'?>    
</div>
    <script src="index.js">
       

    </script>
</body>
</html>
