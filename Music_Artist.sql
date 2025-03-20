CREATE TABLE Music_Artist (
    artist_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    debut_year INT NOT NULL,
    record_label VARCHAR(255) NOT NULL
);