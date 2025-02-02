<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senior Management</title>
  <style>
    body {

      margin: 0;
      padding: 0;
        background-color: #e6f2ff;
        width: 100vw;
        overflow-x: hidden;

    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    .profile-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }
    .profile {
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 10px;
      background-color: #fff;
      text-align: center;
      transition: box-shadow 0.3s ease;
    }
    .profile:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .profile img {
      border-radius: 15px; /* Adjust the radius value for more or less rounded corners */
      width: 300px;
      height: 300px;
      object-fit: cover;
    }
    .profile h2 {
      font-size: 1.2em;
      margin: 10px 0;
      color: #005B96;
            margin-right: 3px;
    }
    .profile-row .profile {
  margin-bottom: 20px; /* Add this line for gap between rows */
}

.profile {
  margin-bottom: 20px; /* Add this line for gap between divs */
}

    .profile p {
      font-size: 1em;
      color: #0077C2;
      margin-right: 3px;
    }
    .profile-row {
      display: flex;
      flex-direction: column;
    }
    .profile-row .profile {
      display: flex;
      align-items: center;
    }
    .profile-row .profile img {
      margin-right: 20px;
    }
    .profile-row .profile:nth-child(2) {
      flex-direction: row-reverse;
    }
    /* Responsive styling */
    @media (max-width: 1024px) {
      .profile-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 768px) {
      .profile-grid {
        grid-template-columns: 1fr;
      }
      .profile img{
        width: 150px;
        height: 150px;

      }
    }
  </style>
</head>
<body>
  <?php include 'Navbar.php'?>

  <div class="container">
    <h1>Senior Management</h1>
    <div class="profile-row">
      <div class="profile">
        <img src="photos/ED sir.jpg" alt="Akramul Haque Biswas">
        <div>
          <h2>Akramul Haque Biswas</h2>
          <p>Enforcement Directorate, ATMABISWAS </p>

        </div>

      </div>
      <div class="profile">
        <img src="photos/DD New PP.jpg" alt="Rafiqul Hasan Joarder">
        <div class="text">
          <h2>Rafiqul Hasan Joarder </h2>
          <p>Director, ATMABISWAS </p>
        </div>
      </div>
    </div>

    
    <h1>Assistant Director (Microfinance)</h1>
    <section class="profile-grid"> 
      <div class="profile"> <img src="photos/Akkas PP.jpg" alt="Akkas Ali"> <h2>Akkas Ali </h2> <p>Assistant Director , ATMABISWAS </p></div>
       <div class="profile"> <img src="photos/Hasan PP.jpg" alt="MD. Hassanur Jamman"> <h2>MD. Hassanur Jamman , ATMABISWAS</h2> <p>Assistant Director , ATMABISWAS </p> </div> 
       
       <div class="profile"> <img src="photos/Rimu Sir PP.jpg" alt="Rimu Sir PP"> <h2>MD: Abu Sadat Rimu, ATMABISWAS</h2> <p>Assistant Director , ATMABISWAS </p> </div> </section>

      
<h1>Accounts Officer</h1>
    <section class="profile-grid"> 
      <div class="profile"> <img src="photos/MST.NARGIS PARVIN-ACCOUNTANT, pin-010.jpg" alt="Mst.Nargis Parvin "> <h2>Mst. Nargis Parvin </h2> <p>Accounts Officer , ATMABISWAS </p></div>

       <div class="profile"> <img src="photos/Rita PP.jpg" alt="Rita PP-ACCOUNTANT"> <h2>MST. Sharmin Sultana (Rita) </h2> <p>Accounts Officer , ATMABISWAS </p> </div> 
       
       <div class="profile"> <img src="photos/MST.JESMIN ARA HENA-ACCOUNTANT, PIN-004.jpg" alt="Rimu Sir PP"> <h2>Mst. Jesmin Ara Hena</h2> <p>Accounts Officer , ATMABISWAS </p> </div> </section>
       
       <h1>Manager/Officer</h1>
    <section class="profile-grid"> 
      <div class="profile"> <img src="photos/Zahangir.JPG" alt="Zahangir"> <h2>Md.Zahangir Alom </h2> <p> Manager(MIS) </p></div>
       <div class="profile"> <img src="photos/Abu Mohammad Jinnah-CO(Automation), Pin-0167.jpg" alt="Abu Mohammad Jinnah-CO(Automation), Pin-0167"> <h2>Abu Mohammad Jinnah</h2> <p>Co-Manager(MIS) , ATMABISWAS </p> </div> 
       
       <div class="profile"> <img src="photos/MST.SHARMIN AKTAR-CO, PIN-466.jpg" alt="MST.SHARMIN AKTAR-CO"> <h2>Mst. Sharmin Aktar</h2> <p>Officer(MIS) , ATMABISWAS </p> </div> </section>      
 
       <h1>Manager/Officer</h1>
    <section class="profile-grid"> 
      <div class="profile"> <img src="photos/Zahangir.JPG" alt="Zahangir"> <h2>Md.Zahangir Alom </h2> <p> Manager(MIS) </p></div>
       <div class="profile"> <img src="photos/Abu Mohammad Jinnah-CO(Automation), Pin-0167.jpg" alt="Abu Mohammad Jinnah-CO(Automation), Pin-0167"> <h2>Abu Mohammad Jinnah</h2> <p>Co-Manager(MIS) , ATMABISWAS </p> </div> 
       
       <div class="profile"> <img src="photos/MST.SHARMIN AKTAR-CO, PIN-466.jpg" alt="MST.SHARMIN AKTAR-CO"> <h2>Mst. Sharmin Aktar</h2> <p>Officer(MIS) , ATMABISWAS </p> </div> </section>      
  
  </div>
  <?php include 'ATMABISWAS'?>
</body>
</html>
