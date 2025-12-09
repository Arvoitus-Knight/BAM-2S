<?php
require 'config/db.php';

$full_name = $_POST['full_name'] ?? '';
$email = $_POST['email'] ?? '';
$telegram_handle = $_POST['telegram_handle'] ?? '';
$wallet_address = $_POST['wallet_address'] ?? '';
$preferred_chain = $_POST['preferred_chain'] ?? '';
$risk_level = $_POST['risk_level'] ?? '';
$leverage_preference = $_POST['leverage_preference'] ?? '';
$favorite_meme_coin = $_POST['favorite_meme_coin'] ?? '';
$daily_trading_budget = $_POST['daily_trading_budget'] ?? null;
$degen_since_year = $_POST['degen_since_year'] ?? null;
$notes = $_POST['notes'] ?? '';

$sql = "INSERT INTO crypto_degens (full_name, email, telegram_handle, wallet_address, preferred_chain, risk_level, leverage_preference, favorite_meme_coin, daily_trading_budget, degen_since_year, notes) VALUES (:full_name, :email, :telegram_handle, :wallet_address, :preferred_chain, :risk_level, :leverage_preference, :favorite_meme_coin, :daily_trading_budget, :degen_since_year, :notes)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':full_name' => $full_name,
    ':email' => $email,
    ':telegram_handle' => $telegram_handle,
    ':wallet_address' => $wallet_address,
    ':preferred_chain' => $preferred_chain,
    ':risk_level' => $risk_level,
    ':leverage_preference' => $leverage_preference,
    ':favorite_meme_coin' => $favorite_meme_coin,
    ':daily_trading_budget' => $daily_trading_budget !== '' ? $daily_trading_budget : null,
    ':degen_since_year' => $degen_since_year !== '' ? $degen_since_year : null,
    ':notes' => $notes
]);

header('Location: submissions.php?status=saved');
exit;
?>
