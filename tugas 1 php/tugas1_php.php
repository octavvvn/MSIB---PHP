<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Ujian</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #fbe9e7, #f48fb1);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      background: #fff;
      padding: 50px 55px;
      border-radius: 24px;
      box-shadow: 0 10px 28px rgba(0, 0, 0, 0.12);
      width: 100%;
      max-width: 450px;
      text-align: center;
      animation: fadeIn 0.7s ease-in-out;
      letter-spacing: 0.3px;
      line-height: 1.8;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(25px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h2 {
      color: #d81b60;
      margin-bottom: 35px;
      font-size: 1.9rem;
      font-weight: 700;
      letter-spacing: 1px;
    }

    form {
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #444;
      font-weight: 600;
      font-size: 0.95rem;
      letter-spacing: 0.5px;
    }

    input {
      width: 100%;
      padding: 13px 15px;
      margin-bottom: 22px;
      border: 1.5px solid #ddd;
      border-radius: 10px;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
      letter-spacing: 0.4px;
    }

    input:focus {
      border-color: #e91e63;
      box-shadow: 0 0 8px rgba(233, 30, 99, 0.25);
    }

    button {
      display: block;
      width: 100%;
      background: linear-gradient(135deg, #ec407a, #d81b60);
      color: #fff;
      border: none;
      padding: 13px;
      border-radius: 10px;
      cursor: pointer;
      font-weight: 600;
      letter-spacing: 0.7px;
      font-size: 15px;
      transition: all 0.3s ease;
      margin-top: 5px;
    }

    button:hover {
      transform: translateY(-2px) scale(1.03);
      box-shadow: 0 6px 15px rgba(233, 30, 99, 0.25);
    }

    .result {
      margin-top: 35px;
      padding: 25px;
      border-radius: 16px;
      background: #fce4ec;
      text-align: center;
      animation: slideUp 0.5s ease-in-out;
      letter-spacing: 0.4px;
      line-height: 1.8;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(15px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .result h3 {
      color: #d81b60;
      margin-bottom: 15px;
      font-size: 1.3rem;
      letter-spacing: 0.8px;
    }

    .result p {
      margin-bottom: 10px;
      color: #333;
      font-size: 0.96rem;
    }

    .status-box {
      display: inline-block;
      padding: 12px 25px;
      border-radius: 12px;
      font-weight: 700;
      letter-spacing: 1px;
      margin-top: 18px;
      text-transform: uppercase;
      font-size: 1rem;
      text-align: center;
    }

    .lulus {
      background-color: #e8f5e9;
      color: #2e7d32;
      border: 1px solid #c8e6c9;
      box-shadow: 0 4px 8px rgba(46, 125, 50, 0.2);
    }

    .remedial {
      background-color: #ffebee;
      color: #c62828;
      border: 1px solid #ef9a9a;
      box-shadow: 0 4px 8px rgba(198, 40, 40, 0.2);
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Form Penilaian Ujian</h2>
    <form method="POST" action="">
      <label>Nama</label>
      <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>

      <label>Email</label>
      <input type="email" name="email" placeholder="Masukkan email aktif" required>

      <label>Nilai Ujian</label>
      <input type="number" name="nilai" placeholder="Masukkan nilai ujian" required>

      <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $nama = htmlspecialchars($_POST['nama']);
      $email = htmlspecialchars($_POST['email']);
      $nilai = htmlspecialchars($_POST['nilai']);

      echo "<div class='result'>";
      echo "<h3>Hasil Penilaian</h3>";
      echo "<p><strong>Nama:</strong> $nama</p>";
      echo "<p><strong>Email:</strong> $email</p>";
      echo "<p><strong>Nilai:</strong> $nilai</p>";

      if ($nilai >= 70) {
        echo "<div class='status-box lulus'>LULUS</div>";
      } else {
        echo "<div class='status-box remedial'>REMEDIAL</div>";
      }

      echo "</div>";
    }
    ?>
  </div>
</body>

</html>