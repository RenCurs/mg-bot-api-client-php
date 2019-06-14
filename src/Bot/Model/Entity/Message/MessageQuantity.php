<?php

/**
 * PHP version 7.0
 *
 * MessageQuantity entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use RetailCrm\Mg\Bot\Model\Entity\CommonFields;

/**
 * PHP version 7.0
 *
 * MessageQuantity class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getUnit()
 * @method $this setUnit(string $value)
 * @method float getValue()
 * @method $this setValue(float $value)
 */
class MessageQuantity extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'unit' => 'string',
        'value' => 'float'
    ];
}