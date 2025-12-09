<?php
require 'config/db.php';

// Get all rows in real time from the database
$stmt = $pdo->query("SELECT * FROM crypto_degens ORDER BY created_at DESC");
$rows = $stmt->fetchAll();

// Tell the browser this is a CSV file for Excel
$filename = 'crypto_degens_' . date('Ymd_His') . '.csv';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=' . $filename);

$output = fopen('php://output', 'w');

// Header row
fputcsv($output, [
    'ID',
    'Full Name',
    'Email',
    'Telegram Handle',
    'Wallet Address',
    'Preferred Chain',
    'Risk Level',
    'Leverage Preference',
    'Favorite Meme Coin',
    'Daily Trading Budget',
    'Degen Since Year',
    'Notes',
    'Created At'
]);

// Data rows
foreach ($rows as $row) {
    fputcsv($output, [
        $row['id'],
        $row['full_name'],
        $row['email'],
        $row['telegram_handle'],
        $row['wallet_address'],
        $row['preferred_chain'],
        $row['risk_level'],
        $row['leverage_preference'],
        $row['favorite_meme_coin'],
        $row['daily_trading_budget'],
        $row['degen_since_year'],
        $row['notes'],
        $row['created_at'],
    ]);
}

fclose($output);
exit;
