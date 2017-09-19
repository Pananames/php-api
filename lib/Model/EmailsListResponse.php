<?php
/**
 * EmailsListResponse
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * EmailsListResponse Class Doc Comment
 *
 * @category    Class
 */
class EmailsListResponse 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'EmailsListResponse';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'meta' => '\Pananames\Model\PaginationMeta',
		'data' => '\Pananames\Model\EmailInfo[]'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'meta' => null,
		'data' => null
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
		'meta' => 'meta',
		'data' => 'data'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'meta' => 'setMeta',
		'data' => 'setData'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'meta' => 'getMeta',
		'data' => 'getData'
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
		$this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
		$this->container['data'] = isset($data['data']) ? $data['data'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['meta'] === null) {
			$invalid_properties[] = "'meta' can't be null";
		}
		if ($this->container['data'] === null) {
			$invalid_properties[] = "'data' can't be null";
		}
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

		if ($this->container['meta'] === null) {
			return false;
		}
		if ($this->container['data'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets meta
	 * @return \Pananames\Model\PaginationMeta
	 */
	public function getMeta()
	{
		return $this->container['meta'];
	}

	/**
	 * Sets meta
	 * @param \Pananames\Model\PaginationMeta $meta
	 * @return $this
	 */
	public function setMeta($meta)
	{
		$this->container['meta'] = $meta;

		return $this;
	}

	/**
	 * Gets data
	 * @return \Pananames\Model\EmailInfo[]
	 */
	public function getData()
	{
		return $this->container['data'];
	}

	/**
	 * Sets data
	 * @param \Pananames\Model\EmailInfo[] $data
	 * @return $this
	 */
	public function setData($data)
	{
		$this->container['data'] = $data;

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


