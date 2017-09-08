<?php
/**
 * NameServerRecord
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * NameServerRecord Class Doc Comment
 *
 * @category    Class
 */
class NameServerRecord 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'NameServerRecord';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'id' => 'int',
		'name' => 'string',
		'type' => 'string',
		'value' => 'string',
		'priority' => 'int',
		'ttl' => 'int'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'id' => null,
		'name' => null,
		'type' => null,
		'value' => null,
		'priority' => null,
		'ttl' => null
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
		'id' => 'id',
		'name' => 'name',
		'type' => 'type',
		'value' => 'value',
		'priority' => 'priority',
		'ttl' => 'ttl'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'id' => 'setId',
		'name' => 'setName',
		'type' => 'setType',
		'value' => 'setValue',
		'priority' => 'setPriority',
		'ttl' => 'setTtl'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'id' => 'getId',
		'name' => 'getName',
		'type' => 'getType',
		'value' => 'getValue',
		'priority' => 'getPriority',
		'ttl' => 'getTtl'
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
	const TYPE_A = 'A';
	const TYPE_AAAA = 'AAAA';
	const TYPE_CNAME = 'CNAME';
	const TYPE_NS = 'NS';
	const TYPE_MX = 'MX';
	const TYPE_SRV = 'SRV';
	const TYPE_TXT = 'TXT';
	
	

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public function getTypeAllowableValues()
	{
		return [
			self::TYPE_A,
			self::TYPE_AAAA,
			self::TYPE_CNAME,
			self::TYPE_NS,
			self::TYPE_MX,
			self::TYPE_SRV,
			self::TYPE_TXT,
		];
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
		$this->container['id'] = isset($data['id']) ? $data['id'] : null;
		$this->container['name'] = isset($data['name']) ? $data['name'] : null;
		$this->container['type'] = isset($data['type']) ? $data['type'] : null;
		$this->container['value'] = isset($data['value']) ? $data['value'] : null;
		$this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
		$this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['name'] === null) {
			$invalid_properties[] = "'name' can't be null";
		}
		if ($this->container['type'] === null) {
			$invalid_properties[] = "'type' can't be null";
		}
		$allowed_values = $this->getTypeAllowableValues();
		if (!in_array($this->container['type'], $allowed_values)) {
			$invalid_properties[] = sprintf(
				"invalid value for 'type', must be one of '%s'",
				implode("', '", $allowed_values)
			);
		}

		if ($this->container['value'] === null) {
			$invalid_properties[] = "'value' can't be null";
		}
		if ($this->container['priority'] === null) {
			$invalid_properties[] = "'priority' can't be null";
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

		if ($this->container['name'] === null) {
			return false;
		}
		if ($this->container['type'] === null) {
			return false;
		}
		$allowed_values = $this->getTypeAllowableValues();
		if (!in_array($this->container['type'], $allowed_values)) {
			return false;
		}
		if ($this->container['value'] === null) {
			return false;
		}
		if ($this->container['priority'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets id
	 * @return int
	 */
	public function getId()
	{
		return $this->container['id'];
	}

	/**
	 * Sets id
	 * @param int $id The unique identificator of ns record.
	 * @return $this
	 */
	public function setId($id)
	{
		$this->container['id'] = $id;

		return $this;
	}

	/**
	 * Gets name
	 * @return string
	 */
	public function getName()
	{
		return $this->container['name'];
	}

	/**
	 * Sets name
	 * @param string $name Name of the host record
	 * @return $this
	 */
	public function setName($name)
	{
		$this->container['name'] = $name;

		return $this;
	}

	/**
	 * Gets type
	 * @return string
	 */
	public function getType()
	{
		return $this->container['type'];
	}

	/**
	 * Sets type
	 * @param string $type
	 * @return $this
	 */
	public function setType($type)
	{
		$allowed_values = $this->getTypeAllowableValues();
		if (!in_array($type, $allowed_values)) {
			throw new \InvalidArgumentException(
				sprintf(
					"Invalid value for 'type', must be one of '%s'",
					implode("', '", $allowed_values)
				)
			);
		}
		$this->container['type'] = $type;

		return $this;
	}

	/**
	 * Gets value
	 * @return string
	 */
	public function getValue()
	{
		return $this->container['value'];
	}

	/**
	 * Sets value
	 * @param string $value Data of the host record
	 * @return $this
	 */
	public function setValue($value)
	{
		$this->container['value'] = $value;

		return $this;
	}

	/**
	 * Gets priority
	 * @return int
	 */
	public function getPriority()
	{
		return $this->container['priority'];
	}

	/**
	 * Sets priority
	 * @param int $priority Priority of the host record
	 * @return $this
	 */
	public function setPriority($priority)
	{
		$this->container['priority'] = $priority;

		return $this;
	}

	/**
	 * Gets ttl
	 * @return int
	 */
	public function getTtl()
	{
		return $this->container['ttl'];
	}

	/**
	 * Sets ttl
	 * @param int $ttl TTL of the host record
	 * @return $this
	 */
	public function setTtl($ttl)
	{
		$this->container['ttl'] = $ttl;

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

		if ($httpCode != 204 && empty($this->getData())) {
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


