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
 * @since 2.0.33
 */
class Command extends \yii\db\Command
{
    /**
     * {@inheritdoc}
     */
    protected function bindPendingParams()
    {
        $paramsPassedByReference = [];
        foreach ($this->pendingParams as $name => $value) {
            if (PDO::PARAM_STR === $value[1]) {
                $paramsPassedByReference[$name] = $value[0];
                $this->pdoStatement->bindParam($name, $paramsPassedByReference[$name], $value[1], strlen($value[0]));
            } else {
                $this->pdoStatement->bindValue($name, $value[0], $value[1]);
            }
        }
        $this->pendingParams = [];
    }
}