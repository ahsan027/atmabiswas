<?php
  // Array of image URLs
  $images = [
    "Health/health_pic8.jpeg",
    "Awarness/awarness_pic8.jpeg",
    "Wash/washpic1.jpeg",
    "ordid_visit/ordid_visit1.jpg",
    "Health/helath_pic6.jpeg",
    "COW/COW_pic2.jpeg"
  ];

  // Array of messages corresponding to each card
  $messages = [
    "ATMABISWAS Hospital is a community-focused healthcare facility located in Nagdha Union, Alamdanga Thana, Chuadanga District. Established to serve underprivileged populations, the hospital provides essential medical services, ensuring quality healthcare access for rural communities in need.",

    "The ATMABISWAS Health & Nutrition Campaign promotes preventive healthcare, nutrition awareness, and hygiene education for rural communities. It aims to improve well-being through health camps, nutrition programs, and essential medical support.",

    "The ATMABISWAS Training Center empowers individuals with skill development programs, focusing on vocational training, entrepreneurship, and self-employment opportunities. It aims to enhance livelihoods by providing practical education and hands-on experience in various trades",
    
    "Representatives from PKSF (Palli Karma-Sahayak Foundation) and ORGID visited the ATMABISWAS field to assess ongoing projects and community impact. The visit focused on enterprise development, healthcare initiatives, and livelihood programs, highlighting ATMABISWAS's role in empowering rural communities. Their engagement provided valuable insights for future collaboration and support.",

    "The ATMABISWAS Training Center offers healthcare-related training programs, equipping individuals with essential medical skills such as first aid, maternal care, and community health services. It aims to develop skilled healthcare workers to serve rural communities effectively.",
    
    "The ATMABISWAS Training Center provides enterprise development training, focusing on entrepreneurship, business management, and vocational skills. It empowers individuals with the knowledge and resources to start and sustain their own businesses, promoting self-reliance and economic growth in rural communities.",
  ];

  // Array of headlines
  $headlines = [
    "ATMABISWAS Hospital",
    "Health & Nutrition Campaign",
    "Tanning Center",
    "PKSF and ORGID Visit to ATMABISWAS Field",
    "Helth",
    "New Entrepreneurs"
  ];
?>

  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      padding: 20px;
    }
    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      max-width: 1000px;
      margin: 0 auto;
    }
    .card {
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      cursor: pointer;
      transition: transform 0.3s ease;
    }
    .card:hover { transform: translateY(-5px); }
    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .card:hover img { transform: scale(1.05); }
    .card .card-body {
      padding: 15px;
      text-align: center;
    }
    .card .card-title { font-size: 1.2rem; color: #333; }
    .modal {
      display: none;
      position: fixed;
      z-index: 100;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.7);
      align-items: center;
      justify-content: center;
    }
    .modal-content {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
      max-width: 300px;
      width: 80%;
      animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .modal-content p { margin-bottom: 20px; font-size: 1.1rem; color: #333; }
    .modal-content button {
      padding: 10px 20px;
      background: #007BFF;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .modal-content button:hover { background: #0056b3; }
  </style>

  <div class="card-container">
    <?php foreach($images as $index => $img): ?>
      <div class="card" data-message="<?= htmlspecialchars($messages[$index]) ?>">
        <img src="<?= htmlspecialchars($img) ?>" alt="Office Image <?= $index + 1 ?>">
        <div class="card-body">
          <div class="card-title"><?= htmlspecialchars($headlines[$index]) ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="modal" id="modal">
    <div class="modal-content">
      <p id="modal-message"></p>
      <button id="close-modal">Close</button>
    </div>
  </div>
  <script>
    const modal = document.getElementById('modal');
    const modalMessage = document.getElementById('modal-message');
    const closeModalBtn = document.getElementById('close-modal');
    document.querySelectorAll('.card').forEach(card => {
      card.addEventListener('click', () => {
        modalMessage.textContent = card.getAttribute('data-message');
        modal.style.display = 'flex';
      });
    });
    closeModalBtn.addEventListener('click', () => { modal.style.display = 'none'; });
    window.addEventListener('click', (e) => {
      if (e.target === modal) { modal.style.display = 'none'; }
    });
  </script>


