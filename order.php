<?php
require "database.php";

$harga_rank = [
    'Epic' => 5000,
    'Legend' => 7500,
    'Mythic' => 10000
];

$sukses = false;
$total_harga = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nickname     = mysqli_real_escape_string($conn, $_POST['nickname']);
    $rank_awal    = mysqli_real_escape_string($conn, $_POST['rank_awal']);
    $rank_tujuan  = mysqli_real_escape_string($conn, $_POST['rank_tujuan']);
    $whatsapp     = mysqli_real_escape_string($conn, $_POST['whatsapp']);
    $game         = "Mobile Legends";

    if(isset($harga_rank[$rank_tujuan])) {
        $total_harga = $harga_rank[$rank_tujuan];
    } else {
        $total_harga = 0;
    }

    $query = "INSERT INTO orders (nickname, game, rank_awal, rank_tujuan, whatsapp, harga)
              VALUES ('$nickname','$game','$rank_awal','$rank_tujuan','$whatsapp','$total_harga')";

    if (mysqli_query($conn, $query)) {
        $sukses = true;
    } else {
        die("INSERT ERROR: " . mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Order Joki Mobile Legends</title>
<link rel="stylesheet" href="assets/style2.css">
</head>
<body>
<div class="form-container">
    <?php if($sukses): ?>
        <div class="notif-success">
            Order berhasil! Total Harga: Rp <?= number_format($total_harga,0,",",".") ?><br>
            Mengalihkan ke halaman utama...
        </div>
        <script>
            setTimeout(function(){
                window.location.href = "index.php";
            }, 3000);
        </script>

    <?php else: ?>
        <h2>Form Joki Mobile Legends</h2>
        <form method="POST">
            <label>Nickname ML</label>
            <input type="text" name="nickname" required>

            <label>Rank Saat Ini</label>
            <input type="text" name="rank_awal" required>

            <label>Target Rank</label>
            <select name="rank_tujuan" required onchange="updateHarga()">
                <option value="">Pilih Rank</option>
                <option value="Epic">Epic</option>
                <option value="Legend">Legend</option>
                <option value="Mythic">Mythic</option>
            </select>

            <div class="total-harga" id="totalHarga">Harga: Rp 0</div>

            <label>No WhatsApp</label>
            <input type="text" name="whatsapp" required>

            <button type="submit">Order Sekarang</button>
        </form>
    <?php endif; ?>
</div>

<script>
const hargaRank = {
    'Epic': 5000,
    'Legend': 7500,
    'Mythic': 10000
};

function updateHarga() {
    const rank = document.querySelector('select[name="rank_tujuan"]').value;
    const totalDiv = document.getElementById('totalHarga');
    totalDiv.textContent = 'Harga: Rp ' + (hargaRank[rank] || 0).toLocaleString('id-ID');
}
</script>
</body>
</html>
 