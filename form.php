<?php
$title = 'New Degen Entry';
include 'partials/header.php';
include 'partials/navbar.php';
?>
<main class="container">
    <section class="card">
        <h2>New Crypto Degen Profile</h2>
        <form method="POST" action="save_form.php" class="form-grid">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="full_name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Telegram Handle</label>
                <input type="text" name="telegram_handle" placeholder="@username">
            </div>
            <div class="form-group">
                <label>Wallet Address</label>
                <input type="text" name="wallet_address" placeholder="0x...">
            </div>
            <div class="form-group">
                <label>Preferred Chain</label>
                <select name="preferred_chain">
                    <option value="Ethereum">Ethereum</option>
                    <option value="Solana">Solana</option>
                    <option value="BSC">BSC</option>
                    <option value="Base">Base</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Risk Level</label>
                <select name="risk_level">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                    <option value="Full Degen">Full Degen</option>
                </select>
            </div>
            <div class="form-group">
                <label>Leverage Preference</label>
                <select name="leverage_preference">
                    <option value="Spot only">Spot only</option>
                    <option value="Up to 5x">Up to 5x</option>
                    <option value="6–20x">6–20x</option>
                    <option value="21x+">21x+</option>
                </select>
            </div>
            <div class="form-group">
                <label>Favorite Meme Coin</label>
                <input type="text" name="favorite_meme_coin" placeholder="e.g., DOGE, SHIB, PEPE">
            </div>
            <div class="form-group">
                <label>Daily Trading Budget (USD)</label>
                <input type="number" step="0.01" name="daily_trading_budget">
            </div>
            <div class="form-group">
                <label>Degen Since (Year)</label>
                <input type="number" name="degen_since_year" min="2015" max="<?php echo date('Y'); ?>">
            </div>
            <div class="form-group form-group-full">
                <label>Notes</label>
                <textarea name="notes" rows="3" placeholder="Share trading style, usual setups, or anything degen."></textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">Save Profile</button>
                <a href="index.php" class="btn btn-outline">Cancel</a>
            </div>
        </form>
    </section>
</main>
<?php include 'partials/footer.php'; ?>
