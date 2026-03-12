<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mental Health AI Support</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom right, #f0f4ff, #f9f9f9);
      color: #111;
    }

    header {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    header h1 {
      margin-left: 10px;
      color: #6c63ff;
      font-size: 20px;
    }

    .main-title {
      text-align: center;
      font-size: 40px;
      font-weight: 700;
      padding: 30px 20px 10px 20px;
      color: #4c3cff;
      background: linear-gradient(to right, #f3f4ff, #e6e9ff);
      font-family: 'Inter', sans-serif;
    }

    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 30px 50px 20px 50px;
      flex-wrap: wrap;
      background: linear-gradient(to right, #e6e9ff, #f4f5ff);
      border-bottom: 1px solid #ddd;
    }

    .hero-text {
      max-width: 600px;
    }

    .hero-text h2 {
      font-size: 36px;
      margin-bottom: 15px;
      color: #2d2d2d;
    }

    .hero-text span {
      color: #6c63ff;
    }

    .hero-text p {
      font-size: 17px;
      color: #555;
    }

    .hero img {
      max-width: 360px;
      border-radius: 20px;
      object-fit: cover;
      max-height: 360px;
    }

    .info-blocks {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      padding: 40px 20px;
      background: #ffffff;
    }

    .info-card {
      background: #f9f9ff;
      padding: 30px;
      border-radius: 16px;
      width: 300px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      text-align: center;
    }

    .info-card h3 {
      margin-bottom: 15px;
      color: #6c63ff;
    }

    .info-card p {
      color: #555;
      font-size: 15px;
    }

    .icall-block {
      max-width: 900px;
      margin: 40px auto;
      background: #e0e8ff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.06);
      text-align: center;
    }

    .icall-block h3 {
      color: #4c3cff;
      font-size: 24px;
      margin-bottom: 15px;
    }

    .icall-block p {
      font-size: 16px;
      color: #444;
      margin-bottom: 20px;
    }

    .icall-block button {
      background: #6c63ff;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    .open-button {
      display: block;
      margin: 30px auto;
      background: linear-gradient(to right, #9f5cff, #6c63ff);
      color: white;
      padding: 22px 70px;
      font-size: 24px;
      border: none;
      border-radius: 35px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .open-button:hover {
      transform: scale(1.07);
    }

    #login-section, #chatbot-wrapper {
      margin: 40px auto;
      width: 95%;
      max-width: 1000px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      display: none;
    }

    iframe {
      width: 100%;
      height: 700px;
      border: none;
    }

    #chat-messages {
      height: 600px;
      padding: 20px;
      overflow-y: auto;
      background: #f8f8f8;
    }

    .chat-input {
      display: flex;
      border-top: 1px solid #ccc;
    }

    .chat-input input {
      flex: 1;
      padding: 15px;
      font-size: 16px;
      border: none;
      outline: none;
    }

    .chat-input button {
      padding: 15px 25px;
      border: none;
      background: #6c63ff;
      font-size: 16px;
      color: white;
      cursor: pointer;
    }

    .doctors {
      padding: 40px;
      text-align: center;
    }

    .doctors h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .doctor-cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .doctor-card {
      background: white;
      padding: 20px;
      border-radius: 16px;
      width: 260px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      text-align: left;
    }

    .doctor-card img {
      width: 100%;
      border-radius: 12px;
    }

    .doctor-card h4 {
      margin-top: 10px;
      margin-bottom: 5px;
    }

    .doctor-card p {
      color: #555;
      font-size: 14px;
      margin-bottom: 6px;
    }

    .doctor-card .btn {
      margin-top: 10px;
      padding: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
    }

    .btn-purple {
      background: #9f5cff;
      color: white;
    }

    .btn-blue {
      background: #4c6ef5;
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <img src="https://img.icons8.com/color/48/mental-health.png" alt="Logo" width="40" height="40">
    <h1>Mental Health AI Support</h1>
  </header>

  <div class="main-title">MindMate: Your 24x7 AI-Powered Mental Health Ally</div>

  <section class="hero">
    <div class="hero-text">
      <h2>Your Trusted <span>AI Wellness</span> Companion</h2>
      <p>Intelligent, always-available mental wellness assistant built for compassionate listening, stress support, and emotional resilience guidance. Empowering you 24/7 with seamless care and personalized recovery journeys.</p>
    </div>
    <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=800&q=80" alt="Mental Health AI Assistant">
  </section>

  <section class="info-blocks">
    <div class="info-card">
      <h3>Why Mental Health Matters</h3>
      <p>Maintaining mental health is essential for emotional balance, decision-making, and resilience. It impacts how we think, feel, and act daily.</p>
    </div>
    <div class="info-card">
      <h3>Early Support is Key</h3>
      <p>Addressing mental wellness early can prevent serious issues later. Recognizing early signs and getting help fosters long-term well-being.</p>
    </div>
    <div class="info-card">
      <h3>AI Assistance Advantage</h3>
      <p>AI-powered support ensures 24/7 availability, unbiased listening, and immediate response, enhancing access to mental care anytime.</p>
    </div>
  </section>

  <!-- iCall Helpline Block -->
  <div class="icall-block">
    <h3>Need to talk to someone? iCall is here.</h3>
    <p><strong>iCall</strong> is a telephone and email-based counseling service run by the School of Human Ecology, Tata Institute of Social Sciences. It offers free, confidential support to individuals in emotional and psychological distress across age, language, gender, and orientation through a team of trained professionals.</p>
    <p><strong>Call us on:</strong> 9152987821</p>
    <a href="https://icallhelpline.org/" target="_blank"><button>Click Here to Visit iCall</button></a>
  </div>

  <button class="open-button" onclick="openLogin()">Open Assistant</button>

  <div id="login-section">
    <iframe src="login.php"></iframe>
  </div>

  <div id="chatbot-wrapper">
    <iframe
src="https://agent.jotform.com/0197d900249874669c7e44d78f9d39f04c7a?embedMode=iframe&background=1&shadow=1"
allow="geolocation; microphone; camera; fullscreen"
style="width:100%;height:700px;border:none;">
</iframe>
  </div>

  <section class="doctors">
    <h2>Find Mental Health <span style="color:#6c63ff">Professionals</span> Near You</h2>
    <div class="doctor-cards">
      <div class="doctor-card">
        <img src="https://randomuser.me/api/portraits/men/48.jpg" alt="Dr Sarah">
        <h4>Dr. PANKAJ SHARMA</h4>
        <p>Clinical Psychologist</p>
        <p>⭐ 4.8 | 📍 0.5 KMS</p>
        <button class="btn btn-blue" onclick="openBookingForm('Dr. PANKAJ SHARMA')">Book Appointment</button>
        <button class="btn btn-purple">View Profile</button>
      </div>
      <div class="doctor-card">
        <img src="https://randomuser.me/api/portraits/men/50.jpg" alt="Dr Michael">
        <h4>Dr. ABDUL SHAH</h4>
        <p>Psychiatrist</p>
        <p>⭐ 4.9 | 📍 0.8 KMS</p>
        <button class="btn btn-blue" onclick="openBookingForm('Dr. ABDUL SHAH')">Book Appointment</button>
        <button class="btn btn-purple">View Profile</button>
      </div>
      <div class="doctor-card">
        <img src="https://randomuser.me/api/portraits/women/15.jpg" alt="Dr Emily">
        <h4>Dr. ANJALI MEHTHA</h4>
        <p>Therapist & Counselor</p>
        <p>⭐ 4.7 | 📍 1.2 KMS</p>
        <button class="btn btn-blue" onclick="openBookingForm('Dr. ANJALI MEHTHA')">Book Appointment</button>
        <button class="btn btn-purple">View Profile</button>
      </div>
    </div>
  </section>

  <!-- Appointment Modal -->
  <div id="booking-modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); z-index:1000;">
    <div style="background:#fff; max-width:500px; margin:5% auto; padding:30px; border-radius:10px; position:relative;">
      <span onclick="closeBookingForm()" style="position:absolute; top:10px; right:15px; cursor:pointer; font-size:20px;">&times;</span>
      <h3 style="text-align:center; color:#6c63ff;">Book Appointment</h3>
      <form action="book_appointment.php" method="POST">
        <input type="hidden" name="doctor" id="doctor-name">
        <input type="text" name="name" placeholder="Your Name" required style="width:100%; margin:10px 0; padding:10px;">
        <input type="email" name="email" placeholder="Email" required style="width:100%; margin:10px 0; padding:10px;">
        <input type="tel" name="phone" placeholder="Phone Number" required style="width:100%; margin:10px 0; padding:10px;">
        <input type="date" name="preferred_date" required style="width:100%; margin:10px 0; padding:10px;">
        <textarea name="message" placeholder="Your concern..." style="width:100%; margin:10px 0; padding:10px;"></textarea>
        <button type="submit" style="width:100%; padding:12px; background:#6c63ff; color:white; border:none; border-radius:6px;">Submit</button>
      </form>
    </div>
  </div>

  <script>
    function openLogin() {
      document.getElementById("login-section").style.display = "block";
    }

    function openBookingForm(doctorName) {
      document.getElementById("doctor-name").value = doctorName;
      document.getElementById("booking-modal").style.display = "block";
    }

    function closeBookingForm() {
      document.getElementById("booking-modal").style.display = "none";
    }

    window.addEventListener("message", function (event) {
      if (event.data === "login-success") {
        document.getElementById("login-section").style.display = "none";
        document.getElementById("chatbot-wrapper").style.display = "block";
      }
    });

    function sendMessage() {
      const input = document.getElementById('user-input');
      const chatBox = document.getElementById('chat-messages');
      const msg = input.value.trim();
      if (!msg) return;

      const div = document.createElement('div');
      div.textContent = "You: " + msg;
      chatBox.appendChild(div);

      input.value = '';
      chatBox.scrollTop = chatBox.scrollHeight;
    }
  </script>
</body>
</html>