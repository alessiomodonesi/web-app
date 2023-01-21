CREATE DATABASE sandwiches;

CREATE  TABLE sandwiches.allergen ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	name                 VARCHAR(64)  NOT NULL     
 );

CREATE  TABLE sandwiches.break ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	`time`               TIME  NOT NULL     
 );

CREATE  TABLE sandwiches.class ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	year                 INT UNSIGNED NOT NULL,
	section              VARCHAR(1)  NOT NULL     
 );

CREATE  TABLE sandwiches.ingredient ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	name                 VARCHAR(64)  NOT NULL,
	description          VARCHAR(128),
	price                DECIMAL(4,2) UNSIGNED,
	extra                BOOLEAN NOT NULL DEFAULT (FALSE),
	quantity             INT UNSIGNED NOT NULL
 );

CREATE  TABLE sandwiches.product_allergen ( 
	product              INT UNSIGNED NOT NULL,
	allergen             INT UNSIGNED NOT NULL
 );

CREATE  TABLE sandwiches.pickup ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	name                 VARCHAR(128)  NOT NULL     
 );

CREATE  TABLE sandwiches.pickup_break ( 
	pickup               INT UNSIGNED NOT NULL,
	break                INT UNSIGNED NOT NULL     
 );

CREATE  TABLE sandwiches.product ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	name                 VARCHAR(64)  NOT NULL,
	price                DECIMAL(4,2) UNSIGNED NOT NULL,
	description          VARCHAR(128),
	quantity             INT  NOT NULL,
	nutritional_value    INT UNSIGNED NOT NULL,
	active               BOOLEAN  NOT NULL DEFAULT (TRUE)   
 );

CREATE  TABLE sandwiches.nutritional_value ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	kcal                 INT NOT NULL,
	fats                 DECIMAL(4,2) NOT NULL,
	saturated_fats       DECIMAL(4,2),
	carbohydrates        DECIMAL(4,2) NOT NULL,
	sugars               DECIMAL(4,2),
	proteins             DECIMAL(4,2) NOT NULL,
	fiber                DECIMAL(4,2),
	salt                 DECIMAL(4,2)
 );

CREATE  TABLE sandwiches.product_ingredient ( 
	product              INT UNSIGNED NOT NULL,
	ingredient           INT UNSIGNED NOT NULL     
 );

CREATE  TABLE sandwiches.`status` ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	description          VARCHAR(64)  NOT NULL     
 );

CREATE  TABLE sandwiches.tag ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	name                 VARCHAR(32)  NOT NULL     
 );

CREATE  TABLE sandwiches.`user` ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	name                 VARCHAR(64)  NOT NULL,
	surname              VARCHAR(64)  NOT NULL,
	email                VARCHAR(128),
	password             VARCHAR(128),
	active               BOOLEAN  NOT NULL DEFAULT (TRUE)    
 );

 CREATE  TABLE sandwiches.user_class (
	user                 INT UNSIGNED NOT NULL,
	class                INT UNSIGNED NOT NULL,
	`year`               YEAR NOT NULL
 );

CREATE  TABLE sandwiches.cart ( 
	`user`               INT UNSIGNED NOT NULL,
	product              INT UNSIGNED NOT NULL,
	quantity             INT UNSIGNED
 );

CREATE  TABLE sandwiches.favourite ( 
	user                 INT UNSIGNED NOT NULL,
	product              INT UNSIGNED NOT NULL,
	created              TIMESTAMP   DEFAULT (CURRENT_TIMESTAMP)    
 );

CREATE  TABLE sandwiches.offer ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	price                DECIMAL(4,2) UNSIGNED NOT NULL,
	`start`              TIMESTAMP  DEFAULT (CURRENT_TIMESTAMP)  NOT NULL,
	expiry               TIMESTAMP  DEFAULT (CURRENT_TIMESTAMP + 604800)  NOT NULL,
	description          VARCHAR(128)       
 );

CREATE  TABLE sandwiches.product_offer ( 
	product              INT UNSIGNED NOT NULL,
	offer                INT UNSIGNED NOT NULL  
 );

CREATE  TABLE sandwiches.`order` ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	`user`               INT UNSIGNED NOT NULL,
	created              TIMESTAMP  NOT NULL DEFAULT (CURRENT_TIMESTAMP),
	pickup               INT UNSIGNED NOT NULL,
	break                INT UNSIGNED NOT NULL,
	`status`             INT UNSIGNED NOT NULL,
	json                 LONGTEXT
 );

CREATE  TABLE sandwiches.product_order ( 
	product              INT UNSIGNED NOT NULL,
	`order`              INT UNSIGNED NOT NULL
 );

CREATE  TABLE sandwiches.product_tag ( 
	product              INT UNSIGNED NOT NULL,
	tag                  INT UNSIGNED NOT NULL    
 );

CREATE  TABLE sandwiches.reset ( 
	id                   INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	`user`               INT UNSIGNED NOT NULL,
	password             VARCHAR(128)  NOT NULL,
	requested            TIMESTAMP  NOT NULL DEFAULT (CURRENT_TIMESTAMP),
	expires              TIMESTAMP  NOT NULL DEFAULT (CURRENT_TIMESTAMP + 21600),
	completed            BOOLEAN  NOT NULL DEFAULT (FALSE)
 );

ALTER TABLE sandwiches.cart ADD CONSTRAINT fk_cart_product FOREIGN KEY ( product ) REFERENCES sandwiches.product ( id );

ALTER TABLE sandwiches.cart ADD CONSTRAINT fk_cart_user FOREIGN KEY ( `user` ) REFERENCES sandwiches.`user` ( id );

ALTER TABLE sandwiches.product_allergen ADD CONSTRAINT fk_product_allergen_product FOREIGN KEY ( product ) REFERENCES sandwiches.product ( id );

ALTER TABLE sandwiches.product_allergen ADD CONSTRAINT fk_product_allergen_allergen FOREIGN KEY ( allergen ) REFERENCES sandwiches.allergen ( id );

ALTER TABLE sandwiches.pickup_break ADD CONSTRAINT fk_pickup_break_pickup FOREIGN KEY ( pickup ) REFERENCES sandwiches.pickup ( id );

ALTER TABLE sandwiches.pickup_break ADD CONSTRAINT fk_pickup_break_break FOREIGN KEY ( `break` ) REFERENCES sandwiches.`break` ( id );

ALTER TABLE sandwiches.product_ingredient ADD CONSTRAINT fk_product_ingredient_product FOREIGN KEY ( product ) REFERENCES sandwiches.product ( id );

ALTER TABLE sandwiches.product_ingredient ADD CONSTRAINT fk_product_ingredient_ingredient FOREIGN KEY ( ingredient ) REFERENCES sandwiches.ingredient ( id );

ALTER TABLE sandwiches.favourite ADD CONSTRAINT fk_favourite_user FOREIGN KEY ( `user` ) REFERENCES sandwiches.`user` ( id );

ALTER TABLE sandwiches.favourite ADD CONSTRAINT fk_favourite_product FOREIGN KEY ( product ) REFERENCES sandwiches.product ( id );

ALTER TABLE sandwiches.product_tag  ADD CONSTRAINT fk_product_tag_product FOREIGN KEY ( product ) REFERENCES sandwiches.product ( id );

ALTER TABLE sandwiches.product_tag  ADD CONSTRAINT fk_product_tag_tag FOREIGN KEY ( tag ) REFERENCES sandwiches.tag ( id );

ALTER TABLE sandwiches.product_order  ADD CONSTRAINT fk_product_order_product FOREIGN KEY ( product ) REFERENCES sandwiches.product ( id );

ALTER TABLE sandwiches.product_order  ADD CONSTRAINT fk_product_order_order FOREIGN KEY ( `order` ) REFERENCES sandwiches.`order` ( id );

ALTER TABLE sandwiches.reset  ADD CONSTRAINT fk_reset_user FOREIGN KEY ( `user` ) REFERENCES sandwiches.`user` ( id );

ALTER TABLE sandwiches.`order`  ADD CONSTRAINT fk_order_user FOREIGN KEY ( `user` ) REFERENCES sandwiches.`user` ( id );

ALTER TABLE sandwiches.`order`  ADD CONSTRAINT fk_order_status FOREIGN KEY ( status ) REFERENCES sandwiches.status ( id );

ALTER TABLE sandwiches.`order`  ADD CONSTRAINT fk_order_pickup FOREIGN KEY ( pickup ) REFERENCES sandwiches.pickup ( id );

ALTER TABLE sandwiches.`order`  ADD CONSTRAINT fk_order_break FOREIGN KEY ( break ) REFERENCES sandwiches.break ( id );

ALTER TABLE sandwiches.product  ADD CONSTRAINT fk_product_nutritional_value FOREIGN KEY ( nutritional_value ) REFERENCES sandwiches.nutritional_value ( id );

ALTER TABLE sandwiches.user_class  ADD CONSTRAINT fk_user_class_user FOREIGN KEY ( `user` ) REFERENCES sandwiches.`user` ( id );

ALTER TABLE sandwiches.user_class  ADD CONSTRAINT fk_user_class_class FOREIGN KEY ( class ) REFERENCES sandwiches.class ( id );

ALTER TABLE sandwiches.product_offer ADD CONSTRAINT fk_product_offer_product FOREIGN KEY ( product ) REFERENCES sandwiches.product ( id );

ALTER TABLE sandwiches.product_offer  ADD CONSTRAINT fk_product_offer_offer FOREIGN KEY ( offer ) REFERENCES sandwiches.offer ( id );