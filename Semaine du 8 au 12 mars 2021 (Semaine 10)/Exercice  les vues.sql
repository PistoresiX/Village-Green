-- Exercice 1.1 : 

CREATE VIEW v_hotels_station_3
AS
SELECT * FROM hotel
WHERE hot_sta_id

-- Exercice 1.2 : 

CREATE VIEW v_hotels_room_1
AS
SELECT * FROM chambre
WHERE cha_hot_id

-- Exercice 1.3 :

CREATE VIEW v_reserv_name_1
AS
SELECT * FROM reservation, client
WHERE res_cli_id

-- Exercice 1.4 : 

CREATE VIEW v_room_hotels_station_1
AS
SELECT * FROM chambre, hotel, station
WHERE hot_nom
