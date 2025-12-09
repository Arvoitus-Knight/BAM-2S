CREATE TABLE crypto_degens (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100),
  email VARCHAR(150),
  telegram_handle VARCHAR(100),
  wallet_address VARCHAR(120),
  preferred_chain VARCHAR(50),
  risk_level VARCHAR(20),
  leverage_preference VARCHAR(20),
  favorite_meme_coin VARCHAR(100),
  daily_trading_budget DECIMAL(12,2),
  degen_since_year INT,
  notes TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
