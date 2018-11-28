CREATE TABLE homestead.users
(
    id int(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    email_verified_at timestamp,
    password varchar(255) NOT NULL,
    remember_token varchar(100),
    created_at timestamp,
    updated_at timestamp
);
CREATE UNIQUE INDEX users_email_unique ON homestead.users (email);
INSERT INTO homestead.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (1, 'liuheran', '393563676@qq.com', null, '$2y$10$fOzhGNnQp1Lx2rM3JxrmHOmTrzhrf.0QwEhZmDipfFwwH1MXmjd6m', '4aMDTjpnYfAG2GxG5QcnIS2M8kV4DAC97N8t5GKytznApEZPkU5PMgLYQCB1', '2018-11-23 02:59:44', '2018-11-23 02:59:44');