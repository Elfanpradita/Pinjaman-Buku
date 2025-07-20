<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Pemrograman Web</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #00c3ff, #ffff1c);
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #0077cc;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        a.button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #0077cc;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #005fa3;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>UAS Pemrograman Web</h1>
        <p>Selamat datang di aplikasi ujian akhir semester untuk mata kuliah Pemrograman Web.</p>
        <a href="{{ url('/admin') }}" class="button">Masuk ke Dashboard</a>
    </div>
</body>
</html>
