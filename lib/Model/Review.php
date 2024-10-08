<?php
/**
 * Review
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
 * Review Class Doc Comment
 *
 * @category Class
 * @package  Immodvisor
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Review implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'review';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'idCompany' => 'int',
        'companyCustomId' => 'string',
        'customRef' => 'string',
        'idPro' => 'string',
        'rating' => 'float',
        'lang' => 'string',
        'title' => 'string',
        'description' => 'string',
        'date' => 'string',
        'lastUpdate' => 'string',
        'depositDate' => 'string',
        'needName' => 'string',
        'recommended' => 'bool',
        'picking' => 'string',
        'answer' => '\Immodvisor\Model\ReviewAnswer',
        'user' => '\Immodvisor\Model\ReviewUser',
        'pro' => '\Immodvisor\Model\ReviewPro',
        'exp' => '\Immodvisor\Model\ReviewExp',
        'highlight' => '\Immodvisor\Model\ReviewHighlight',
        'criterions' => '\Immodvisor\Model\ReviewCriterions[]',
        'folder' => '\Immodvisor\Model\ReviewFolder'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'idCompany' => null,
        'companyCustomId' => null,
        'customRef' => null,
        'idPro' => null,
        'rating' => null,
        'lang' => null,
        'title' => null,
        'description' => null,
        'date' => 'datetime',
        'lastUpdate' => 'datetime',
        'depositDate' => 'datetime',
        'needName' => null,
        'recommended' => null,
        'picking' => null,
        'answer' => null,
        'user' => null,
        'pro' => null,
        'exp' => null,
        'highlight' => null,
        'criterions' => null,
        'folder' => null
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
        'id' => 'id',
        'idCompany' => 'id_company',
        'companyCustomId' => 'company_custom_id',
        'customRef' => 'custom_ref',
        'idPro' => 'id_pro',
        'rating' => 'rating',
        'lang' => 'lang',
        'title' => 'title',
        'description' => 'description',
        'date' => 'date',
        'lastUpdate' => 'last_update',
        'depositDate' => 'deposit_date',
        'needName' => 'need_name',
        'recommended' => 'recommended',
        'picking' => 'picking',
        'answer' => 'answer',
        'user' => 'user',
        'pro' => 'pro',
        'exp' => 'exp',
        'highlight' => 'highlight',
        'criterions' => 'criterions',
        'folder' => 'folder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'idCompany' => 'setIdCompany',
        'companyCustomId' => 'setCompanyCustomId',
        'customRef' => 'setCustomRef',
        'idPro' => 'setIdPro',
        'rating' => 'setRating',
        'lang' => 'setLang',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'date' => 'setDate',
        'lastUpdate' => 'setLastUpdate',
        'depositDate' => 'setDepositDate',
        'needName' => 'setNeedName',
        'recommended' => 'setRecommended',
        'picking' => 'setPicking',
        'answer' => 'setAnswer',
        'user' => 'setUser',
        'pro' => 'setPro',
        'exp' => 'setExp',
        'highlight' => 'setHighlight',
        'criterions' => 'setCriterions',
        'folder' => 'setFolder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'idCompany' => 'getIdCompany',
        'companyCustomId' => 'getCompanyCustomId',
        'customRef' => 'getCustomRef',
        'idPro' => 'getIdPro',
        'rating' => 'getRating',
        'lang' => 'getLang',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'date' => 'getDate',
        'lastUpdate' => 'getLastUpdate',
        'depositDate' => 'getDepositDate',
        'needName' => 'getNeedName',
        'recommended' => 'getRecommended',
        'picking' => 'getPicking',
        'answer' => 'getAnswer',
        'user' => 'getUser',
        'pro' => 'getPro',
        'exp' => 'getExp',
        'highlight' => 'getHighlight',
        'criterions' => 'getCriterions',
        'folder' => 'getFolder'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['idCompany'] = isset($data['idCompany']) ? $data['idCompany'] : null;
        $this->container['companyCustomId'] = isset($data['companyCustomId']) ? $data['companyCustomId'] : null;
        $this->container['customRef'] = isset($data['customRef']) ? $data['customRef'] : null;
        $this->container['idPro'] = isset($data['idPro']) ? $data['idPro'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['lastUpdate'] = isset($data['lastUpdate']) ? $data['lastUpdate'] : null;
        $this->container['depositDate'] = isset($data['depositDate']) ? $data['depositDate'] : null;
        $this->container['needName'] = isset($data['needName']) ? $data['needName'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['picking'] = isset($data['picking']) ? $data['picking'] : null;
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['pro'] = isset($data['pro']) ? $data['pro'] : null;
        $this->container['exp'] = isset($data['exp']) ? $data['exp'] : null;
        $this->container['highlight'] = isset($data['highlight']) ? $data['highlight'] : null;
        $this->container['criterions'] = isset($data['criterions']) ? $data['criterions'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id unique Immodvisor ID of the review
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets idCompany
     *
     * @return int
     */
    public function getIdCompany()
    {
        return $this->container['idCompany'];
    }

    /**
     * Sets idCompany
     *
     * @param int $idCompany Immodvisor company ID
     *
     * @return $this
     */
    public function setIdCompany($idCompany)
    {
        $this->container['idCompany'] = $idCompany;

        return $this;
    }

    /**
     * Gets companyCustomId
     *
     * @return string
     */
    public function getCompanyCustomId()
    {
        return $this->container['companyCustomId'];
    }

    /**
     * Sets companyCustomId
     *
     * @param string $companyCustomId your company id reference
     *
     * @return $this
     */
    public function setCompanyCustomId($companyCustomId)
    {
        $this->container['companyCustomId'] = $companyCustomId;

        return $this;
    }

    /**
     * Gets customRef
     *
     * @return string
     */
    public function getCustomRef()
    {
        return $this->container['customRef'];
    }

    /**
     * Sets customRef
     *
     * @param string $customRef your reference
     *
     * @return $this
     */
    public function setCustomRef($customRef)
    {
        $this->container['customRef'] = $customRef;

        return $this;
    }

    /**
     * Gets idPro
     *
     * @return string
     */
    public function getIdPro()
    {
        return $this->container['idPro'];
    }

    /**
     * Sets idPro
     *
     * @param string $idPro Immodvisor pro ID
     *
     * @return $this
     */
    public function setIdPro($idPro)
    {
        $this->container['idPro'] = $idPro;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return float
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param float $rating score out of 5
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang lang of the review
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title of the review
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description text of the review
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date of validation of the review
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets lastUpdate
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->container['lastUpdate'];
    }

    /**
     * Sets lastUpdate
     *
     * @param string $lastUpdate date of last modification of the review
     *
     * @return $this
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->container['lastUpdate'] = $lastUpdate;

        return $this;
    }

    /**
     * Gets depositDate
     *
     * @return string
     */
    public function getDepositDate()
    {
        return $this->container['depositDate'];
    }

    /**
     * Sets depositDate
     *
     * @param string $depositDate date of submission of the review
     *
     * @return $this
     */
    public function setDepositDate($depositDate)
    {
        $this->container['depositDate'] = $depositDate;

        return $this;
    }

    /**
     * Gets needName
     *
     * @return string
     */
    public function getNeedName()
    {
        return $this->container['needName'];
    }

    /**
     * Sets needName
     *
     * @param string $needName experience - e.g.: purchase, rental, ...
     *
     * @return $this
     */
    public function setNeedName($needName)
    {
        $this->container['needName'] = $needName;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended pro recommended to a friend
     *
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets picking
     *
     * @return string
     */
    public function getPicking()
    {
        return $this->container['picking'];
    }

    /**
     * Sets picking
     *
     * @param string $picking picking status
     *
     * @return $this
     */
    public function setPicking($picking)
    {
        $this->container['picking'] = $picking;

        return $this;
    }

    /**
     * Gets answer
     *
     * @return \Immodvisor\Model\ReviewAnswer
     */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
     * Sets answer
     *
     * @param \Immodvisor\Model\ReviewAnswer $answer answer
     *
     * @return $this
     */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Immodvisor\Model\ReviewUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Immodvisor\Model\ReviewUser $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets pro
     *
     * @return \Immodvisor\Model\ReviewPro
     */
    public function getPro()
    {
        return $this->container['pro'];
    }

    /**
     * Sets pro
     *
     * @param \Immodvisor\Model\ReviewPro $pro pro
     *
     * @return $this
     */
    public function setPro($pro)
    {
        $this->container['pro'] = $pro;

        return $this;
    }

    /**
     * Gets exp
     *
     * @return \Immodvisor\Model\ReviewExp
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     *
     * @param \Immodvisor\Model\ReviewExp $exp exp
     *
     * @return $this
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets highlight
     *
     * @return \Immodvisor\Model\ReviewHighlight
     */
    public function getHighlight()
    {
        return $this->container['highlight'];
    }

    /**
     * Sets highlight
     *
     * @param \Immodvisor\Model\ReviewHighlight $highlight highlight
     *
     * @return $this
     */
    public function setHighlight($highlight)
    {
        $this->container['highlight'] = $highlight;

        return $this;
    }

    /**
     * Gets criterions
     *
     * @return \Immodvisor\Model\ReviewCriterions[]
     */
    public function getCriterions()
    {
        return $this->container['criterions'];
    }

    /**
     * Sets criterions
     *
     * @param \Immodvisor\Model\ReviewCriterions[] $criterions criterions
     *
     * @return $this
     */
    public function setCriterions($criterions)
    {
        $this->container['criterions'] = $criterions;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \Immodvisor\Model\ReviewFolder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \Immodvisor\Model\ReviewFolder $folder folder
     *
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

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
