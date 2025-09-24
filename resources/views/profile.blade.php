<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #ff9a9e 0%, #fad0c4 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 50px 40px;
            border-radius: 25px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.25);
            width: 340px;
            animation: popUp 0.8s ease;
            position: relative;
        }

        @keyframes popUp {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .profile-image img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 18px;
            border: 6px solid #ff758c;
            box-shadow: 0 6px 18px rgba(0,0,0,0.25);
            transition: transform 0.4s ease;
        }

        .profile-image img:hover {
            transform: scale(1.15) rotate(-5deg);
        }

        .info-box {
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 14px;
            margin: 12px auto;
            width: 250px;
            border-radius: 14px;
            font-weight: 600;
            font-size: 16px;
            color: #fff;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        .info-box:hover {
            background: linear-gradient(135deg, #43cea2, #185a9d);
            transform: translateY(-4px) scale(1.05);
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            color: #444;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .decor {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 70px;
            height: 70px;
            background: #ff758c;
            border-radius: 50%;
            opacity: 0.4;
        }

        .decor2 {
            position: absolute;
            bottom: -25px;
            left: -25px;
            width: 100px;
            height: 100px;
            background: #667eea;
            border-radius: 50%;
            opacity: 0.3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="decor"></div>
        <div class="decor2"></div>

        <!-- Foto Profil -->
        <div class="profile-image">
            <img src="{{ asset('foto.jpg') }}" alt="Foto Profil">
        </div>

        <!-- Data Mahasiswa -->
        
        <div class="info-box">Nama : {{ $nama }}</div>
        <div class="info-box">Kelas : {{ $kelas }}</div>
        <div class="info-box">NPM : {{ $npm }}</div>
    </div>
</body>
</html>
