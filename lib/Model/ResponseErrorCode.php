<?php
/**
 * ResponseErrorCode
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
 * OpenAPI spec version: 0.0.1
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Phonebook\Model;
use \Messente\Phonebook\ObjectSerializer;

/**
 * ResponseErrorCode Class Doc Comment
 *
 * @category Class
 * @description Matches the following ResponseErrorTitles. This field is a constant. * 201 - Invalid data * 202 - Unauthorized * 203 - Missing resource * 204 - Conflict * 244 - Client error * 205 - General error
 * @package  Messente\Phonebook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResponseErrorCode
{
    /**
     * Possible values of this enum
     */
    const _201 = '201';
    const _202 = '202';
    const _203 = '203';
    const _204 = '204';
    const _244 = '244';
    const _205 = '205';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_201,
            self::_202,
            self::_203,
            self::_204,
            self::_244,
            self::_205,
        ];
    }
}


