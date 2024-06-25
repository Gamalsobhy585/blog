CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO users (name, email, password, created_at, updated_at) VALUES
('John Doe', 'john@example.com', 'password123', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Jane Smith', 'jane@example.com', 'password456', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Alice Johnson', 'alice@example.com', 'password789', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);





INSERT INTO posts (title, body, user_id, created_at, updated_at) VALUES
('First Post', 'This is the body of the first post.', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Second Post', 'This is the body of the second post.', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Third Post', 'This is the body of the third post.', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fourth Post', 'This is the body of the fourth post.', 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fifth Post', 'This is the body of the fifth post.', 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Sixth Post', 'This is the body of the sixth post.', 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Seventh Post', 'This is the body of the seventh post.', 3, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Eighth Post', 'This is the body of the eighth post.', 3, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Ninth Post', 'This is the body of the ninth post.', 3, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Tenth Post', 'This is the body of the tenth post.', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
