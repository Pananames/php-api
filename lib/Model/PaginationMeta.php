<?php
/**
 * PaginationMeta
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * PaginationMeta Class Doc Comment
 *
 * @category    Class
 */
class PaginationMeta 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'PaginationMeta';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'current_page' => 'int',
		'per_page' => 'int',
		'total_entries' => 'int',
		'total_pages' => 'int'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'current_page' => null,
		'per_page' => null,
		'total_entries' => null,
		'total_pages' => null
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
		'current_page' => 'current_page',
		'per_page' => 'per_page',
		'total_entries' => 'total_entries',
		'total_pages' => 'total_pages'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'current_page' => 'setCurrentPage',
		'per_page' => 'setPerPage',
		'total_entries' => 'setTotalEntries',
		'total_pages' => 'setTotalPages'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'current_page' => 'getCurrentPage',
		'per_page' => 'getPerPage',
		'total_entries' => 'getTotalEntries',
		'total_pages' => 'getTotalPages'
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
		$this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
		$this->container['per_page'] = isset($data['per_page']) ? $data['per_page'] : null;
		$this->container['total_entries'] = isset($data['total_entries']) ? $data['total_entries'] : null;
		$this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['current_page'] === null) {
			$invalid_properties[] = "'current_page' can't be null";
		}
		if ($this->container['per_page'] === null) {
			$invalid_properties[] = "'per_page' can't be null";
		}
		if ($this->container['total_entries'] === null) {
			$invalid_properties[] = "'total_entries' can't be null";
		}
		if ($this->container['total_pages'] === null) {
			$invalid_properties[] = "'total_pages' can't be null";
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

		if ($this->container['current_page'] === null) {
			return false;
		}
		if ($this->container['per_page'] === null) {
			return false;
		}
		if ($this->container['total_entries'] === null) {
			return false;
		}
		if ($this->container['total_pages'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets current_page
	 * @return int
	 */
	public function getCurrentPage()
	{
		return $this->container['current_page'];
	}

	/**
	 * Sets current_page
	 * @param int $current_page The page currently returned.
	 * @return $this
	 */
	public function setCurrentPage($current_page)
	{
		$this->container['current_page'] = $current_page;

		return $this;
	}

	/**
	 * Gets per_page
	 * @return int
	 */
	public function getPerPage()
	{
		return $this->container['per_page'];
	}

	/**
	 * Sets per_page
	 * @param int $per_page The number of entries returned per page.
	 * @return $this
	 */
	public function setPerPage($per_page)
	{
		$this->container['per_page'] = $per_page;

		return $this;
	}

	/**
	 * Gets total_entries
	 * @return int
	 */
	public function getTotalEntries()
	{
		return $this->container['total_entries'];
	}

	/**
	 * Sets total_entries
	 * @param int $total_entries The total number of entries available in the entire collection.
	 * @return $this
	 */
	public function setTotalEntries($total_entries)
	{
		$this->container['total_entries'] = $total_entries;

		return $this;
	}

	/**
	 * Gets total_pages
	 * @return int
	 */
	public function getTotalPages()
	{
		return $this->container['total_pages'];
	}

	/**
	 * Sets total_pages
	 * @param int $total_pages The total number of pages available given the current per_page value.
	 * @return $this
	 */
	public function setTotalPages($total_pages)
	{
		$this->container['total_pages'] = $total_pages;

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


