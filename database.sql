use `website`;
DROP TABLE `user`;
CREATE TABLE IF NOT EXISTS `user`
(
    `id_user` INT NOT NULL AUTO_INCREMENT,
    `user_firstname` VARCHAR(20) NOT NULL,
    `user_lastname` VARCHAR(20) NOT NULL,
    `user_pseudo` VARCHAR(65) NOT NULL DEFAULT 'UNKNOW',
    `user_age` INT NOT NULL,
    `user_tel` CHAR(10),
    `user_mail` VARCHAR(65) NOT NULL,
    `user_password` VARCHAR(65) NOT NULL,
    PRIMARY KEY(`id_user`),
    UNIQUE (`user_pseudo`)
);

INSERT INTO `user`(`user_firstname`,`user_lastname`,`user_pseudo`,`user_age`,`user_tel`,`user_mail`,`user_password`)
VALUES 
('RAZAFITSALAMA','Tsiorimbola Marius','Dadilove',21,'0328098159','mariustsiorimbola@gmail.com','12345678'),
('ANDRIAMANAJA','Tiana Khaleba','Karan',22,'0346076824','tianakhaleba@gmail.com','1234567'),
('RATONJATOVO','ZO Anjatiana','Detty',22,'0346076824','DEty@gmail.com','123a567'),
('AN','Tiana Khaleba','Kara',22,'0346076824','tiaakhaleba@gmail.com','1234567'),
('TODISOA','Nirina Michael','Mathman',22,'0328093468','TodisoaMichael@gmail.com','12345');

