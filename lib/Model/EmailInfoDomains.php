<?php
/**
 * EmailInfoDomains
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * EmailInfoDomains Class Doc Comment
 *
 * @category    Class
 */
class EmailInfoDomains 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'EmailInfo_domains';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'domain' => 'string',
		'status' => 'string'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'domain' => null,
		'status' => null
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
		'domain' => 'domain',
		'status' => 'status'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'domain' => 'setDomain',
		'status' => 'setStatus'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'domain' => 'getDomain',
		'status' => 'getStatus'
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
	const STATUS_OK = 'ok';
	const STATUS_TRANSFER_OUT_READY = 'transfer out ready';
	const STATUS_TRANSFERRING_OUT = 'transferring out';
	const STATUS_EXPIRED = 'expired';
	const STATUS_REDEMPTION = 'redemption';
	const STATUS_SUSPENDED = 'suspended';
	
	

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public function getStatusAllowableValues()
	{
		return [
			self::STATUS_OK,
			self::STATUS_TRANSFER_OUT_READY,
			self::STATUS_TRANSFERRING_OUT,
			self::STATUS_EXPIRED,
			self::STATUS_REDEMPTION,
			self::STATUS_SUSPENDED,
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
		$this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
		$this->container['status'] = isset($data['status']) ? $data['status'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['domain'] === null) {
			$invalid_properties[] = "'domain' can't be null";
		}
		if ($this->container['status'] === null) {
			$invalid_properties[] = "'status' can't be null";
		}
		$allowed_values = $this->getStatusAllowableValues();
		if (!in_array($this->container['status'], $allowed_values)) {
			$invalid_properties[] = sprintf(
				"invalid value for 'status', must be one of '%s'",
				implode("', '", $allowed_values)
			);
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

		if ($this->container['domain'] === null) {
			return false;
		}
		if ($this->container['status'] === null) {
			return false;
		}
		$allowed_values = $this->getStatusAllowableValues();
		if (!in_array($this->container['status'], $allowed_values)) {
			return false;
		}

		return true;
	}

	/**
	 * Gets domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->container['domain'];
	}

	/**
	 * Sets domain
	 * @param string $domain
	 * @return $this
	 */
	public function setDomain($domain)
	{
		$this->container['domain'] = $domain;

		return $this;
	}

	/**
	 * Gets status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->container['status'];
	}

	/**
	 * Sets status
	 * @param string $status
	 * @return $this
	 */
	public function setStatus($status)
	{
		$allowed_values = $this->getStatusAllowableValues();
		if (!in_array($status, $allowed_values)) {
			throw new \InvalidArgumentException(
				sprintf(
					"Invalid value for 'status', must be one of '%s'",
					implode("', '", $allowed_values)
				)
			);
		}
		$this->container['status'] = $status;

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


