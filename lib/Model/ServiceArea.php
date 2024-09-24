<?php
/**
 * ServiceArea
 *
 * PHP version 5
 *
 * @category Class
 * @package  Immodvisor
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Immodvisor
 *
 * ## Terms of use The terms of use gather all the rules to follow to use the Immodvisor API. ## Technical side Your API key and the grains of salt of the checksums must remain secret, they represent your private parameters. It is strictly forbidden to communicate them to third parties. For security reasons, if one of these rules is not respected, we would be forced to deactivate your API key. ## Advices It is strongly recommended to use cache if you are using the API to display your rating and reviews on your site. This will ensure that the display of your page does not depend on the API responses and therefore does not affect its display time. ## Display the notices on your media ### On your website: You must clearly display the source of the reviews, namely Immodvisor. Thus, the Immodvisor logo or the seal of trust must clearly appear on the page displaying the reviews, with a link in the href, scanned by search engines, and pointing to the company file of the Immodvisor site. This point is essential for search engines to make the link between the 2 pages, and avoid duplication of content. The review pages of your site must be validated by our marketing department before going into production. You must also display a textual mention indicating that the reviews come from the Immodvisor site.   Our marketing department can be reached at 09 81 10 75 88 or by email at assistance@Immodvisor.com ### On other communication supports: You must always display the Immodvisor logo and indicate that the reviews are from the Immodvisor solution.  ## Display Rich Snippets in google results on your url Rich Snippets give the promise to the internet user to be able to read reviews. Any page displaying Rich Snippets in google must display the stars, as well as a link to the company's Immodvisor page. All these elements must match. For example, you can display the Rich Snippets of the company on the home page, and the Rich Snippets of each agency on your respective agency pages. Strong recommendation: a given Rich Snippet should only be placed on one and only one web page. Good to know: Rich Snippets tell Google's search engine a rating related to a web page. Google decides whether or not displaying the note in its search results is relevant to your web page. Immodvisor cannot influence Google's willingness to display or not the indicators sent by your site. ## Checksum For each call to the API, a checksum must be sent. This checksum is calculated as follows:   Concatenation of the following values, all formatted in SHA1 :  * apikey * values of the sent fields, formatted in JSON if it is an array or an object * checksum_salt_in  ### PHP code example ```PHP private function calcChecksumIn($api_key, $checksum_salt_in, $datas = array())     {         $checksum = \"\";         $checksum .= $api_key;         foreach ($datas as $k => $v) {             if (is_array($v) || is_object($v)) {                 $v = json_encode($v, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);             } elseif ($v === true) {                 $v = 1;             } elseif ($v === false) {                 $v = 0;             }             $checksum .= $v;         }         $checksum .= $checksum_salt_in;         return sha1($checksum);     }   ```
 *
 * OpenAPI spec version: 1.11.0
 * Contact: assistance@Immodvisor.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Immodvisor\Model;

use \ArrayAccess;
use \Immodvisor\ObjectSerializer;

/**
 * ServiceArea Class Doc Comment
 *
 * @category Class
 * @description Company&#x27;s intervention area
 * @package  Immodvisor
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceArea implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'service_area';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'zip' => 'string',
        'city' => 'string',
        'name' => 'string',
        'department' => 'string',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'zip' => null,
        'city' => null,
        'name' => null,
        'department' => null,
        'region' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'zip' => 'zip',
        'city' => 'city',
        'name' => 'name',
        'department' => 'department',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'zip' => 'setZip',
        'city' => 'setCity',
        'name' => 'setName',
        'department' => 'setDepartment',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'zip' => 'getZip',
        'city' => 'getCity',
        'name' => 'getName',
        'department' => 'getDepartment',
        'region' => 'getRegion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zipcode
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Department's name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department Department's code
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region Region's name
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
