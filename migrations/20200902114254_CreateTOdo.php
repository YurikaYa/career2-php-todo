<?php

use Phpmig\Migration\Migration;

class CreateThread extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $sql = <<<EOT
CREATE TABLE IF NOT EXISTS `thread` (
`id` int(11) AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`content` varchar(255) NOT NULL,
`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
`deleted_at` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;
EOT;
        $container = $this->getContainer();
        $container['db']->query($sql);
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $sql = "DROP TABLE `thread`;";
        $container = $this->getContainer();
        $container['db']->query($sql);
    }
}