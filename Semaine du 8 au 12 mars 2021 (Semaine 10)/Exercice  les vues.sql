-- Exercice 1.1 : 

CREATE VIEW v_hotels_station_3
AS
SELECT * FROM hotel
WHERE hot_sta_id

-- Exercice 1.2 : 

CREATE VIEW v_hotels_room
AS
SELECT * FROM chambre
WHERE cha_hot_id

-- Exercice 1.3 :

CREATE VIEW v_reserv_name
AS
SELECT * FROM reservation, client
WHERE res_cli_id

-- Exercice 1.4 : 

CREATE VIEW v_room_hotels_station
AS
SELECT * FROM chambre, hotel, station
WHERE cha_hot_id

-- Exercice 1.5 :

CREATE VIEW v_reserv_name_hotels
AS
SELECT * FROM reservation, client, hotel
WHERE res_cli_id





IF (SELECT pro_stock FROM products WHERE ID=pro_stock) < pro_stock_alert
THEN
INSERT INTO commander_articles (codart, qte, date) VALUES(OLD.pro_id, NEW.diff, NEW.pro_uptade_date);