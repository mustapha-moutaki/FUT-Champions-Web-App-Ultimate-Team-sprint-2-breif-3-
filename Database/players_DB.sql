CREATE TABLE nationalities(
    nationality_id INT NOT NULL AUTO_INCREMENT,
    nationality_name VARCHAR(50),
    PRIMARY KEY (nationality_id)
);

CREATE TABLE clubs(
    club_id INT NOT NULL AUTO_INCREMENT,
    club_name VARCHAR(50),
    PRIMARY KEY (club_id)
);

CREATE TABLE players(
    player_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    photo VARCHAR(255),
    position ENUM('gk', 'CBL', 'CBR', 'LB', 'RB', 'CML', 'CMR', 'LM', 'RM', 'STL', 'STR'),
    nationality_id INT NOT NULL,
    club_id INT NOT NULL,
    PRIMARY KEY (player_id),
    FOREIGN KEY (nationality_id) REFERENCES nationalities(nationality_id),
    FOREIGN KEY (club_id) REFERENCES clubs(club_id)
);

CREATE TABLE player_stats(
    player_id INT NOT NULL,
    pace INT NOT NULL,
    shooting INT NOT NULL,
    passing INT NOT NULL,
    dribling INT NOT NULL,
    defending INT NOT NULL,
    physical INT NOT NULL,
    FOREIGN KEY (player_id) REFERENCES players(player_id)
);

CREATE TABLE goalkeeper_stats(
    player_id INT NOT NULL,
    diving INT NOT NULL,
    handling INT NOT NULL,
    kicking INT NOT NULL,
    reflexes INT NOT NULL,
    speed INT NOT NULL,
    positioning INT NOT NULL,
    FOREIGN KEY (player_id) REFERENCES players(player_id)
);
