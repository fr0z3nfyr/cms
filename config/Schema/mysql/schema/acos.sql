CREATE TABLE `acos` (
`id` INTEGER(10) NOT NULL AUTO_INCREMENT,
`parent_id` INTEGER(10) DEFAULT NULL,
`lft` INTEGER(10) DEFAULT NULL,
`rght` INTEGER(10) DEFAULT NULL,
`plugin` VARCHAR(255) NOT NULL,
`alias` VARCHAR(255) NOT NULL,
`alias_hash` VARCHAR(32) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB