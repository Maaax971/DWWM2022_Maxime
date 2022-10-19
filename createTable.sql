CREATE TABLE IF NOT EXISTS users_data (
  num_user int(11) NOT NULL,
  name varchar(120) NOT NULL,
  lname varchar(120) NOT NULL,
  message varchar(250) NOT NULL,
  country varchar(80) NOT NULL,
  sport varchar(80) NOT NULL
) AUTO_INCREMENT=1 ;

ALTER TABLE users_data ADD PRIMARY KEY (num_user);

ALTER TABLE users_data
MODIFY num_user int(11) NOT NULL AUTO_INCREMENT;

-- Fonction à intégrer sur mySQL pour créer la table "user_data" qui enregistrera les données émises par les users