CREATE TABLE IF NOT EXISTS questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    a VARCHAR(255),
    b VARCHAR(255),
    c VARCHAR(255),
    d VARCHAR(255),
    correct VARCHAR(255)
);

INSERT INTO questions (question, a, b, c, d, correct) VALUES
('What is the capital of France?', 'Berlin', 'Madrid', 'Paris', 'Lisbon', 'Paris'),
('Which planet is known as the Red Planet?', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Mars'),
('Who wrote Hamlet?', 'Shakespeare', 'Tolstoy', 'Hemingway', 'Joyce', 'Shakespeare');

CREATE TABLE IF NOT EXISTS leaderboard (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    score INT NOT NULL
);