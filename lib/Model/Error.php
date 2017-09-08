<?php
/**
 * Error
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * Error Class Doc Comment
 *
 * @category    Class
 */
class Error 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'Error';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'code' => 'int',
		'message' => 'string',
		'description' => 'string'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'code' => 'int32',
		'message' => null,
		'description' => null
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
		'code' => 'code',
		'message' => 'message',
		'description' => 'description'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'code' => 'setCode',
		'message' => 'setMessage',
		'description' => 'setDescription'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'code' => 'getCode',
		'message' => 'getMessage',
		'description' => 'getDescription'
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
	const CODE_1 = 1;
	const CODE_2 = 2;
	const CODE_3 = 3;
	const CODE_4 = 4;
	const CODE_5 = 5;
	
	

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public function getCodeAllowableValues()
	{
		return [
			self::CODE_1,
			self::CODE_2,
			self::CODE_3,
			self::CODE_4,
			self::CODE_5,
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
		$this->container['code'] = isset($data['code']) ? $data['code'] : null;
		$this->container['message'] = isset($data['message']) ? $data['message'] : null;
		$this->container['description'] = isset($data['description']) ? $data['description'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['code'] === null) {
			$invalid_properties[] = "'code' can't be null";
		}
		$allowed_values = $this->getCodeAllowableValues();
		if (!in_array($this->container['code'], $allowed_values)) {
			$invalid_properties[] = sprintf(
				"invalid value for 'code', must be one of '%s'",
				implode("', '", $allowed_values)
			);
		}

		if ($this->container['message'] === null) {
			$invalid_properties[] = "'message' can't be null";
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

		if ($this->container['code'] === null) {
			return false;
		}
		$allowed_values = $this->getCodeAllowableValues();
		if (!in_array($this->container['code'], $allowed_values)) {
			return false;
		}
		if ($this->container['message'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets code
	 * @return int
	 */
	public function getCode()
	{
		return $this->container['code'];
	}

	/**
	 * Sets code
	 * @param int $code Unique error code
	 * @return $this
	 */
	public function setCode($code)
	{
		$allowed_values = $this->getCodeAllowableValues();
		if (!in_array($code, $allowed_values)) {
			throw new \InvalidArgumentException(
				sprintf(
					"Invalid value for 'code', must be one of '%s'",
					implode("', '", $allowed_values)
				)
			);
		}
		$this->container['code'] = $code;

		return $this;
	}

	/**
	 * Gets message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->container['message'];
	}

	/**
	 * Sets message
	 * @param string $message Error message
	 * @return $this
	 */
	public function setMessage($message)
	{
		$this->container['message'] = $message;

		return $this;
	}

	/**
	 * Gets description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->container['description'];
	}

	/**
	 * Sets description
	 * @param string $description Error description
	 * @return $this
	 */
	public function setDescription($description)
	{
		$this->container['description'] = $description;

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


