  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .services-section {
      padding: 50px 0;
      background-color: #f9f9f9;
    }
    .service-box {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding: 30px;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .service-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .service-box img {
        max-width: 300px;
        margin-bottom: 20px;
    }
    .service-box h5 {
        font-size: 1.25rem;
        color: #333;
        margin-bottom: 15px;
    }
    .service-box p {
        color: #666;
    }
    .section-title {
        text-align: center;
        margin-bottom: 40px;
    }
    .section-title h2 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 10px;
    }
    .section-title p {
      font-size: 1rem;
      color: #777;
    }
    </style>
<?php
include_once("nav/head.php");
?>
<!-- <body> -->
    
<div id="breadcrumb" class="hoc clear"> 
    <!-- يمكن إضافة محتوى الـ Breadcrumb هنا -->
</div>
</div>
<div class="services-section">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
      <p>Explore the professional services we offer in the airline industry.</p>
    </div>
    <div class="row">
  <!-- Passenger Transport Service -->
  <div class="col-md-6 col-lg-4">
    <div class="service-box">
      <img src="images/demo/Passenger Transport.jpg" alt="Passenger Transport">
      <h5>Passenger Transport</h5>
      <p>Experience world-class passenger transport services with comfort and reliability.</p>
      <p>We ensure on-time departures, exceptional customer service, and seamless travel experiences across our global routes.</p>
    </div>
  </div>
  
  <!-- Cargo Transport Service -->
  <div class="col-md-6 col-lg-4">
    <div class="service-box">
      <img src="images/demo/cargo transpot2.jpeg" alt="Cargo Transport">
      <h5>Cargo Transport</h5>
      <p>Efficient and secure cargo transport solutions tailored to your needs.</p>
      <p>We specialize in handling fragile, oversized, and time-sensitive shipments with the utmost care.</p>
    </div>
  </div>
  
  <!-- Custom Airline Solutions -->
  <div class="col-md-6 col-lg-4">
    <div class="service-box">
      <img src="images/demo/Custom Airline Solutions.jpg" alt="Additional Service">
      <h5>Custom Airline Solutions</h5>
      <p>Innovative and personalized solutions for your airline requirements.</p>
      <p>Whether you need tailored fleet management, charter services, or special assistance, our team is ready to help.</p>
    </div>
  </div>
</div>
</div>
</div>


<?php
include_once("nav/footer.php");
?>

