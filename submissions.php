<?php
$title = 'Submissions';
require 'config/db.php';
include 'partials/header.php';
include 'partials/navbar.php';

$status = $_GET['status'] ?? '';

$stmt = $pdo->query("SELECT * FROM crypto_degens ORDER BY created_at DESC");
$rows = $stmt->fetchAll();
?>
<main class="container">
    <section class="card">
        <h2>Saved Crypto Degen Profiles</h2>

        <?php if ($status === 'saved'): ?>
            <div class="alert alert-success">New profile saved successfully.</div>
        <?php endif; ?>

        <?php if (empty($rows)): ?>
            <p>No profiles saved yet. <a href="form.php" class="btn btn-outline">Create the first one</a>.</p>
        <?php else: ?>

            <div class="actions" style="margin-bottom:16px; display:flex; gap:8px; flex-wrap:wrap;">
                <a href="form.php" class="btn">New Degen Profile</a>
                <a href="export_excel.php" class="btn btn-outline">Export to Excel</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Telegram</th>
                            <th>Wallet</th>
                            <th>Chain</th>
                            <th>Risk</th>
                            <th>Leverage</th>
                            <th>Fav Meme Coin</th>
                            <th>Budget</th>
                            <th>Degen Since</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['telegram_handle']); ?></td>
                                <td><?php echo htmlspecialchars($row['wallet_address']); ?></td>
                                <td><?php echo htmlspecialchars($row['preferred_chain']); ?></td>
                                <td><?php echo htmlspecialchars($row['risk_level']); ?></td>
                                <td><?php echo htmlspecialchars($row['leverage_preference']); ?></td>
                                <td><?php echo htmlspecialchars($row['favorite_meme_coin']); ?></td>
                                <td><?php echo htmlspecialchars($row['daily_trading_budget']); ?></td>
                                <td><?php echo htmlspecialchars($row['degen_since_year']); ?></td>
                                <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </section>
</main>
<?php include 'partials/footer.php'; ?>
