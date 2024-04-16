CREATE DATABASE IF NOT EXISTS shopdata
DEFAULT CHARACTER SET utf8;

USE shopdata;

CREATE TABLE `users`(
	`uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` CHAR(15) NOT NULL,
	`password` CHAR(32) NOT NULL,
	`sex` CHAR(1) NOT NULL DEFAULT '男',
	`email` VARCHAR(40),
	`time` DATETIME,
	PRIMARY KEY(uid)
);

INSERT INTO `users`(`uid`,`username`,`password`,`sex`,`email`,`time`) VALUES
	(1,'熊明','123456','男','xiongwei@qq.com','2021-05-03 08:45:21'),
	(2,'王伟','123456','男','wangwei@qq.com','2021-05-10 21:47:51'),
	(3,'李芳','123456','女','lifang@qq.com','2021-06-01 11:15:20'),
	(4,'张兰','123456','女','zhanglan@qq.com','2021-06-06 17:04:02');