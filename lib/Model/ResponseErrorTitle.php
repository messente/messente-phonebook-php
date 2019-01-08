<?php
/**
 * ResponseErrorTitle
 *
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Phonebook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Phonebook API
 *
 * RESTful API for Messente phonebook
 *
 * OpenAPI spec version: 0.0.3
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Phonebook\Model;
use \Messente\Phonebook\ObjectSerializer;

/**
 * ResponseErrorTitle Class Doc Comment
 *
 * @category Class
 * @description Textual value which corresponds to ResponseErrorCode
 * @package  Messente\Phonebook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResponseErrorTitle
{
    /**
     * Possible values of this enum
     */
    const INVALID_DATA = 'Invalid data';
    const UNAUTHORIZED = 'Unauthorized';
    const MISSING_RESOURCE = 'Missing resource';
    const CONFLICT = 'Conflict';
    const CLIENT_ERROR = 'Client error';
    const GENERAL_ERROR = 'General error';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_DATA,
            self::UNAUTHORIZED,
            self::MISSING_RESOURCE,
            self::CONFLICT,
            self::CLIENT_ERROR,
            self::GENERAL_ERROR,
        ];
    }
}


