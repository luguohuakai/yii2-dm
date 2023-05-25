<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace luguohuakai\db\dm;

use PDO;

/**
 * @author DM <769245396@qq.com>
 * @since 1.0
 */
class Connection extends \yii\db\Connection
{

    /**
     * @inheritdoc
     */
    public $commandClass = 'luguohuakai\db\dm\Command';

    /**
     * @var array PDO attributes (name => value) that should be set when calling [[open()]]
     * to establish a DB connection. Please refer to the
     * [PHP manual](http://www.php.net/manual/en/function.PDO-setAttribute.php) for
     * details about available attributes.
     */
    public $attributes = [
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];

    /**
     * @var array mapping between PDO driver names and [[Schema]] classes.
     * The keys of the array are PDO driver names while the values the corresponding
     * schema class name or configuration. Please refer to [[Yii::createObject()]] for
     * details on how to specify a configuration.
     *
     * This property is mainly used by [[getSchema()]] when fetching the database schema information.
     * You normally do not need to set this property unless you want to use your own
     * [[Schema]] class to support DBMS that is not supported by Yii.
     */
    public $schemaMap = [
        'dm' => 'luguohuakai\db\dm\Schema', // DM8
    ];

    /**
     * @var array mapping between PDO driver names and [[Command]] classes.
     * The keys of the array are PDO driver names while the values are either the corresponding
     * command class names or configurations. Please refer to [[Yii::createObject()]] for
     * details on how to specify a configuration.
     *
     * This property is mainly used by [[createCommand()]] to create new database [[Command]] objects.
     * You normally do not need to set this property unless you want to use your own
     * [[Command]] class or support DBMS that is not supported by Yii.
     * @since 2.0.14
     */
    public $commandMap = [
        'dm' => 'luguohuakai\db\dm\Command', // DM8
    ];
}