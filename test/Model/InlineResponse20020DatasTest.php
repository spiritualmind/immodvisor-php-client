<?php
/**
 * InlineResponse20020DatasTest
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
 * Please update the test case below to test the model.
 */

namespace Immodvisor;

use PHPUnit\Framework\TestCase;

/**
 * InlineResponse20020DatasTest Class Doc Comment
 *
 * @category    Class
 * @description InlineResponse20020Datas
 * @package     Immodvisor
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20020DatasTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "InlineResponse20020Datas"
     */
    public function testInlineResponse20020Datas()
    {
    }

    /**
     * Test attribute "highlights"
     */
    public function testPropertyHighlights()
    {
    }
}
