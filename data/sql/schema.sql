CREATE TABLE ebay_games (id BIGINT AUTO_INCREMENT, guid VARCHAR(255), title VARCHAR(255), block_title TEXT, link VARCHAR(255), description text, current_price BIGINT, end_time DATETIME, bid_count BIGINT, postage_packing_fee BIGINT, profile_name VARCHAR(255), profile_url VARCHAR(255), feedback_score BIGINT, title_processed tinyint(1), platform VARCHAR(20), status VARCHAR(255) DEFAULT 'live', slug VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX ebay_games_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE top_games (id BIGINT AUTO_INCREMENT, title VARCHAR(255), block_title VARCHAR(255), meta_critic_score VARCHAR(20), platform VARCHAR(20), cex_buy_price BIGINT, cex_sell_price BIGINT, cex_ex_price BIGINT, status VARCHAR(255) DEFAULT 'disabled', slug VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX top_games_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
