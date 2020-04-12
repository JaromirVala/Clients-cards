
CREATE DATABASE Cards;


CREATE TABLE `users` (
    `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `user_name` varchar(125) COLLATE utf8mb4_czech_ci NOT NULL,
    `user_lastname` varchar(125) COLLATE utf8mb4_czech_ci NOT NULL,
    `user_address` varchar(125) COLLATE utf8mb4_czech_ci default NULL,    
    `user_email` varchar(125) COLLATE utf8mb4_czech_ci not NULL,
    `user_phone` varchar(13) COLLATE utf8mb4_czech_ci not NULL,
    `user_create_at` datetime NOT NULL,       
    `user_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,    
    PRIMARY KEY (`user_id`),
    UNIQUE KEY `user_email` (`user_email`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;


  CREATE TABLE `card_number` (
    `card_number_id` int(11) ZEROFILL NOT NULL AUTO_INCREMENT, 
    `card_number_user_id` int(11)  unsigned default NULL,
    `card_number_type_code` varchar(4) COLLATE utf8mb4_czech_ci NOT NULL,
    `card_number_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,        
    PRIMARY KEY (`card_number_id`),
    CONSTRAINT FK_UsersCardnumber FOREIGN KEY (`card_number_user_id`)
    REFERENCES users(`user_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci; 
  
  
  CREATE TABLE `l_card_type` (
    `card_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,      
    `card_type_code` varchar(4) COLLATE utf8mb4_czech_ci NOT NULL,
    `card_type_desc` varchar(125) COLLATE utf8mb4_czech_ci,
    `card_type_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`card_type_id`)
  # CONSTRAINT FK_CardnumberCardtype FOREIGN KEY (`card_type_code`)
  # REFERENCES card_number(`card_number_type_code`)
  # CONSTRAINT UC_CardnumberCardtype UNIQUE KEY (`card_number_type_code`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci; 
 
  
  CREATE TABLE `purchase` (
    `purchase_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `purchase_card_number_id` int(11) unsigned NOT NULL, 
    `purchase_commodity_type` int(11) unsigned NOT NULL,
    `purchase_commodity_type_quantity` int(11) unsigned NOT NULL,
    `purchase_commodity_type_price`  int(11) unsigned NOT NULL,  
    `purchase_commodity_price_total` int(11) unsigned NOT NULL,
    `purchase_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,        
    CONSTRAINT FK_CardnumberPurchase FOREIGN KEY (`purchase_card_number_id`)
    REFERENCES card_number(`card_number_id`),    
    PRIMARY KEY (`purchase_id`)     
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci; 
  
  
  INSERT INTO l_card_type (card_type_code, card_type_desc, card_type_timestamp)
  VALUES ('1', 'dočasná', now()),
         ('2', 'základní', now());


         INSERT INTO card_number (card_number_type_code, card_number_timestamp)
         VALUES ('2', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('2', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now()),
                ('1', now()),
                ('2', now()),
                ('1', now());



//# Nutno upravit 'purchase_card_number_id' podle user_id a card_number_user_id #
//# To znamená, že se napřed ve formu musí karty uživateli přiřadit             #
INSERT INTO purchase (purchase_card_number_id,
                  purchase_commodity_type,
                  purchase_commodity_type_quantity,
                  purchase_commodity_type_price,
                  purchase_commodity_price_total,
                  purchase_timestamp)
            VALUES ('4', '2', '5', '100', '500', now()),
                   ('8', '2', '8', '100', '800', now()),
                   ('9', '2', '9', '100', '900', now()),
                   ('13', '2', '15', '100', '150', now()),
                   ('14', '2', '7', '100', '700', now()),
                   ('12', '2', '10', '100', '1000', now()),
                   ('5', '1', '9', '110', '990', now()),
                   ('15', '1', '8', '110', '880', now()),
                   ('7', '1', '7', '110', '770', now()),
                   ('6', '1', '6', '110', '660', now()),
                   ('16', '1', '5', '110', '550', now()),
                   ('17', '1', '4', '110', '440', now()),
                   ('18', '1', '3', '110', '330', now()),
                   ('19', '3', '10', '120', '1200', now()),
                   ('20', '3', '9', '120', '1080', now()),
                   ('11', '3', '8', '120', '960', now()),
                   ('10', '3', '7', '120', '840', now());



 
DROP TABLE users ;
DROP TABLE card_number ;
DROP TABLE l_card_type ;
DROP TABLE purchase ; 