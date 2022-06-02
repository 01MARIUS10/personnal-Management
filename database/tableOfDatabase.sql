DROP TABLE `user`;
CREATE TABLE IF NOT EXISTS `user`
(
    `id_user` INT NOT NULL AUTO_INCREMENT,
    `user_firstname` VARCHAR(20) NOT NULL,
    `user_lastname` VARCHAR(20) NOT NULL,
    `user_pseudo` VARCHAR(65) NOT NULL DEFAULT 'UNKNOW',
    `user_age` INT NOT NULL,
    `user_sex` VARCHAR(10) NOT NULL,
    `user_tel` CHAR(10),
    `user_mail` VARCHAR(65) NOT NULL,
    `user_password` VARCHAR(65) NOT NULL,
    PRIMARY KEY(`id_user`),
    UNIQUE (`user_pseudo`)
);

INSERT INTO `user`(`user_firstname`,`user_lastname`,`user_pseudo`,`user_age`,`user_sex`,`user_tel`,`user_mail`,`user_password`)
VALUES 
('RAZAFITSALAMA','Tsiorimbola Marius','Dadilove',21,'man','0328098159','mariustsiorimbola@gmail.com','12345678'),
('ANDRIAMANAJA','Tiana Khaleba','Karan',22,'man','0346076824','tianakhaleba@gmail.com','1234567');

INSERT INTO `user`(`user_firstname`,`user_lastname`,`user_pseudo`,`user_age`,`user_sex`,`user_tel`,`user_mail`,`user_password`)
VALUES
('TODISOA','Nirina Michael','Mathman',22,'man','0328093468','TodisoaMichael@gmail.com','12345');