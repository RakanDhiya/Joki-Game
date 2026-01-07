<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - RakanStoreID</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS utama -->
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-box {
            background: #020617;
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 40px rgba(0,0,0,.5);
        }

        .admin-box h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .admin-box label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .admin-box input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            margin-bottom: 18px;
            background: #0f172a;
            color: #fff;
        }

        .admin-box button {
            width: 100%;
            padding: 12px;
            background: #22c55e;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .admin-box button:hover {
            background: #16a34a;
        }

        .back-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .back-link a {
            color: #38bdf8;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="admin-box">
    <h2>Admin Login</h2>

    <form action="admin_login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <div class="back-link">
        <a href="../index.php">← Kembali ke Home</a>
    </div>
</div>

</body>
</html>
