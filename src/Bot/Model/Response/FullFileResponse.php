<?php

/**
 * PHP version 7.0
 *
 * FullFileResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Response;

/**
 * PHP version 7.0
 *
 * FullFileResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method string getId()
 * @method $this setId(string $value)
 * @method int getSize()
 * @method $this setSize(int $value)
 * @method string getType()
 * @method $this setType(string $value)
 * @method string getUrl()
 * @method $this setUrl(string $value)
 */
class FullFileResponse extends CommonFields
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'size' => 'int',
        'type' => 'string',
        'url' => 'string'
    ];
}