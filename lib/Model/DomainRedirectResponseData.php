<?php
/**
 * DomainRedirectResponseData
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * DomainRedirectResponseData Class Doc Comment
 *
 * @category    Class
 */
class DomainRedirectResponseData 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'DomainRedirectResponse_data';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'url' => 'string',
		'masking_enabled' => 'bool',
		'masking_title' => 'string',
		'masking_desc' => 'string',
		'masking_kwd' => 'string'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'url' => null,
		'masking_enabled' => null,
		'masking_title' => null,
		'masking_desc' => null,
		'masking_kwd' => null
	];

	public static function swaggerTypes()
	{
		return self::$swaggerTypes;
	}

	public static function swaggerFormats()
	{
		return self::$swaggerFormats;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attributeMap = [
		'url' => 'url',
		'masking_enabled' => 'masking_enabled',
		'masking_title' => 'masking_title',
		'masking_desc' => 'masking_desc',
		'masking_kwd' => 'masking_kwd'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'url' => 'setUrl',
		'masking_enabled' => 'setMaskingEnabled',
		'masking_title' => 'setMaskingTitle',
		'masking_desc' => 'setMaskingDesc',
		'masking_kwd' => 'setMaskingKwd'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'url' => 'getUrl',
		'masking_enabled' => 'getMaskingEnabled',
		'masking_title' => 'getMaskingTitle',
		'masking_desc' => 'getMaskingDesc',
		'masking_kwd' => 'getMaskingKwd'
	];

	public static function attributeMap()
	{
		return self::$attributeMap;
	}

	public static function setters()
	{
		return self::$setters;
	}

	public static function getters()
	{
		return self::$getters;
	}
	
	
	/**
	 * Associative array for storing property values
	 * @var mixed[]
	 */
	protected $container = [];

	/**
	 * boolean
	 */

	public $httpCode;

	/**
	 * Constructor
	 * @param mixed[] $data Associated array of property values initializing the model
	 */
	public function __construct(array $data = null)
	{
		$this->container['url'] = isset($data['url']) ? $data['url'] : null;
		$this->container['masking_enabled'] = isset($data['masking_enabled']) ? $data['masking_enabled'] : null;
		$this->container['masking_title'] = isset($data['masking_title']) ? $data['masking_title'] : null;
		$this->container['masking_desc'] = isset($data['masking_desc']) ? $data['masking_desc'] : null;
		$this->container['masking_kwd'] = isset($data['masking_kwd']) ? $data['masking_kwd'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		return $invalid_properties;
	}

	/**
	 * validate all the properties in the model
	 * return true if all passed
	 *
	 * @return bool True if all properties are valid
	 */
	public function valid()
	{


		return true;
	}

	/**
	 * Gets url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->container['url'];
	}

	/**
	 * Sets url
	 * @param string $url
	 * @return $this
	 */
	public function setUrl($url)
	{
		$this->container['url'] = $url;

		return $this;
	}

	/**
	 * Gets masking_enabled
	 * @return bool
	 */
	public function getMaskingEnabled()
	{
		return $this->container['masking_enabled'];
	}

	/**
	 * Sets masking_enabled
	 * @param bool $masking_enabled
	 * @return $this
	 */
	public function setMaskingEnabled($masking_enabled)
	{
		$this->container['masking_enabled'] = $masking_enabled;

		return $this;
	}

	/**
	 * Gets masking_title
	 * @return string
	 */
	public function getMaskingTitle()
	{
		return $this->container['masking_title'];
	}

	/**
	 * Sets masking_title
	 * @param string $masking_title
	 * @return $this
	 */
	public function setMaskingTitle($masking_title)
	{
		$this->container['masking_title'] = $masking_title;

		return $this;
	}

	/**
	 * Gets masking_desc
	 * @return string
	 */
	public function getMaskingDesc()
	{
		return $this->container['masking_desc'];
	}

	/**
	 * Sets masking_desc
	 * @param string $masking_desc
	 * @return $this
	 */
	public function setMaskingDesc($masking_desc)
	{
		$this->container['masking_desc'] = $masking_desc;

		return $this;
	}

	/**
	 * Gets masking_kwd
	 * @return string
	 */
	public function getMaskingKwd()
	{
		return $this->container['masking_kwd'];
	}

	/**
	 * Sets masking_kwd
	 * @param string $masking_kwd
	 * @return $this
	 */
	public function setMaskingKwd($masking_kwd)
	{
		$this->container['masking_kwd'] = $masking_kwd;

		return $this;
	}

	public function setHttpCode($code)
	{
		if (empty($code)) {
			throw new \InvalidArgumentException('Invalid HttpCode');
		}

		return $this->httpCode = $code;
	}

	public function getHttpCode()
	{
		return $this->httpCode;
	}

	public function isSuccessful()
	{
		$httpCode = $this->getHttpCode();

		if ($httpCode < 200 || $httpCode >= 300) {
			return false;
		}

		if ($httpCode != 204 && is_null($this->getData())) {
			return false;
		}

		return true;
	}

	public function hasErrors()
	{
		return !$this->isSuccessful();
	}

	/**
	 * Gets the string presentation of the object
	 * @return string
	 */
	public function __toString()
	{
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Pananames\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Pananames\Api\ObjectSerializer::sanitizeForSerialization($this));
	}
}


