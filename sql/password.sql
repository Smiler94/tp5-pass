CREATE TABLE `password` (
	`id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键 id',
	`name` varchar(20) NOT NULL DEFAULT '' COMMENT '名称',
	`account` varchar(100) NOT NULL DEFAULT '' COMMENT '账号',
	`url` varchar(255) NOT NULL DEFAULT '' COMMENT '网址',
	`type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '类型',
	`password` varchar(100) NOT NULL DEFAULT '' COMMENT '密码',
	`remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
	`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
);