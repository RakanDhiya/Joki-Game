<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit;
}

require "../database.php";
$query = mysqli_query($conn, "
    SELECT * FROM orders 
    WHERE game = 'Mobile Legends'
    ORDER BY created_at DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - JeanneStoreID</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Inter, sans-serif;
            background: #0f172a;
            color: #fff;
            padding: 30px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .logout {
            color: #ef4444;
            text-decoration: none;
            font-weight: 600;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #020617;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #020617;
            border-bottom: 1px solid #1e293b;
        }

        tr {
            border-bottom: 1px solid #1e293b;
        }

        tr:hover {
            background: #020617;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 20px;
            background: #22c55e;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="topbar">
    <h2>Dashboard Admin</h2>
    <a href="logout.php" class="logout">Logout</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Game<th>
            <th>Nickname</th>
            <th>Rank Awal</th>
            <th>Rank Tujuan</th>
            <th>WhatsApp</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['game']) ?></td>
            <td><?= htmlspecialchars($row['nickname']) ?></td>
            <td><?= htmlspecialchars($row['rank_awal']) ?></td>
            <td><?= htmlspecialchars($row['rank_tujuan']) ?></td>
            <td><?= htmlspecialchars($row['whatsapp']) ?></td>
            <td><?= htmlspecialchars($row['harga']) ?></td>
            <td><?= date('d M Y H:i', strtotime($row['created_at'])) ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>
