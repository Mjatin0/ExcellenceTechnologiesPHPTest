CREATE TABLE `user` (
`user_id` INT(11) AUTO_INCREMENT PRIMARY KEY,
`username` VARCHAR(255) NOT NULL UNIQUE,
`password` VARCHAR(50)  NOT NULL,
);

CREATE TABLE `Address` (
    `address_id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(11) FOREIGN KEY REFERENCES (user_id),
    `Street`   varchar(60) NOT NULL   default ,
    `City`     varchar(30) NOT NULL   default ,
    `State`    varchar(40)     NOT NULL   default ,
    `ZIP`      char(10)    NOT NULL   default ,
);
