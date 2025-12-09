<?php
$title = 'Dashboard';
require 'config/db.php';
include 'partials/header.php';
include 'partials/navbar.php';

$stmt = $pdo->query("SELECT COUNT(*) AS total FROM crypto_degens");
$row = $stmt->fetch();
$total = $row ? $row['total'] : 0;
?>
<main class="container">
    <section class="card">
        <h2>Overview</h2>
        <p>Total degen profiles saved: <span class="badge"><?php echo $total; ?></span></p>
        <p>Use this simple modular system to capture and review crypto degen profiles with live database storage.</p>
        <div class="actions">
            <a href="form.php" class="btn">Create New Degen Profile</a>
            <a href="submissions.php" class="btn btn-outline">View All Submissions</a>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>
