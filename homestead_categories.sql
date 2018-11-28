CREATE TABLE homestead.categories
(
    id int(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    sort int(11) DEFAULT '100' NOT NULL,
    created_at timestamp,
    updated_at timestamp
);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (1, 'PHP', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (2, 'MySQL', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (3, 'Linux', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (4, 'Redis', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (5, 'JavaScript', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (6, 'HTML5/CSS3', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (7, '算法', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (8, '数据结构', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (9, '设计模式', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (10, 'Docker', 100, null, null);
INSERT INTO categories (id, name, sort, created_at, updated_at) VALUES (11, '其它', 100, null, null);