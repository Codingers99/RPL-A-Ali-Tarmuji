<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
  background-color: #800000;
  color: #ffffff;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  text-align: center;
  padding: 100px;
}

h2 {
  font-size: 36px;
  margin-bottom: 30px;
}

p {
  font-size: 20px;
  margin-bottom: 30px;
  line-height: 1.5;
}

.btn {
  font-size: 24px;
  padding: 15px 30px;
  background-color: #ffff;
  color: #800000;
  border-radius: 30px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #806000;
  color: #ffffff;
}

header {
  background-color: #ffff;
  padding: 20px;
  display: flex;
  justify-content: flex-end;
}

header ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

header ul li {
  display: inline-block;
  margin-left: 20px;
}

header ul li a {
  text-decoration: none;
  color: #800000;
  font-size: 18px;
  transition: color 0.3s ease;
}

header ul li a:hover {
  color: #806000;
}

.content {
  margin-top: 10px;
  padding: 50px;
}

footer {
  background-color: #ffffff;
  padding: 20px;
  text-align: center;
  color: #800000;
  font-size: 14px;
}

footer a {
  color: #800000;
  text-decoration: none;
}

footer a:hover {
  color: #806000;
}

    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="text">
            <h2>Selamat Datang di Kitchen Kings</h2>
            <p>Nikmati pengalaman kuliner terbaik dengan hidangan lezat dari berbagai masakan internasional.</p>
            <p>Kami menghadirkan cita rasa unik dan berkualitas tinggi dengan bahan-bahan segar dan pilihan terbaik. Jadikan momen bersantap Anda menjadi tak terlupakan dengan pelayanan yang ramah dan atmosfer yang nyaman.</p>
            <a href="#" class="btn">Pesan Sekarang</a>
        </div>
        <img src="https://u7.uidownload.com/vector/684/229/vector-restaurant-food-drink-menu-decorative-icons-set-isolated-vector-illustration-eps.jpg" alt="Gambar Vektor" width="100">
    </div>

    <div class="footer">
        <p>&copy; 2023 Reservasi Restaurant. All rights reserved.</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
