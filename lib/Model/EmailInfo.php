<?php
/**
 * EmailInfo
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * EmailInfo Class Doc Comment
 *
 * @category    Class
 */
class EmailInfo 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'EmailInfo';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'email' => 'string',
		'first_email_date' => 'string',
		'verify_date' => 'string',
		'suspend_date' => 'string',
		'status' => 'string',
		'domains' => '\Pananames\Model\EmailInfoDomains[]'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'email' => null,
		'first_email_date' => 'dateTime',
		'verify_date' => 'dateTime',
		'suspend_date' => 'dateTime',
		'status' => null,
		'domains' => null
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
		'email' => 'email',
		'first_email_date' => 'first_email_date',
		'verify_date' => 'verify_date',
		'suspend_date' => 'suspend_date',
		'status' => 'status',
		'domains' => 'domains'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'email' => 'setEmail',
		'first_email_date' => 'setFirstEmailDate',
		'verify_date' => 'setVerifyDate',
		'suspend_date' => 'setSuspendDate',
		'status' => 'setStatus',
		'domains' => 'setDomains'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'email' => 'getEmail',
		'first_email_date' => 'getFirstEmailDate',
		'verify_date' => 'getVerifyDate',
		'suspend_date' => 'getSuspendDate',
		'status' => 'getStatus',
		'domains' => 'getDomains'
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
	const STATUS_UNVERIFIED = 'unverified';
	const STATUS_VERIFIED = 'verified';
	const STATUS_SUSPENDED = 'suspended';
	
	

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public function getStatusAllowableValues()
	{
		return [
			self::STATUS_UNVERIFIED,
			self::STATUS_VERIFIED,
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
		$this->container['email'] = isset($data['email']) ? $data['email'] : null;
		$this->container['first_email_date'] = isset($data['first_email_date']) ? $data['first_email_date'] : null;
		$this->container['verify_date'] = isset($data['verify_date']) ? $data['verify_date'] : null;
		$this->container['suspend_date'] = isset($data['suspend_date']) ? $data['suspend_date'] : null;
		$this->container['status'] = isset($data['status']) ? $data['status'] : null;
		$this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['email'] === null) {
			$invalid_properties[] = "'email' can't be null";
		}
		if ($this->container['first_email_date'] === null) {
			$invalid_properties[] = "'first_email_date' can't be null";
		}
		if ($this->container['suspend_date'] === null) {
			$invalid_properties[] = "'suspend_date' can't be null";
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

		if ($this->container['domains'] === null) {
			$invalid_properties[] = "'domains' can't be null";
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

		if ($this->container['email'] === null) {
			return false;
		}
		if ($this->container['first_email_date'] === null) {
			return false;
		}
		if ($this->container['suspend_date'] === null) {
			return false;
		}
		if ($this->container['status'] === null) {
			return false;
		}
		$allowed_values = $this->getStatusAllowableValues();
		if (!in_array($this->container['status'], $allowed_values)) {
			return false;
		}
		if ($this->container['domains'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->container['email'];
	}

	/**
	 * Sets email
	 * @param string $email The email.
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->container['email'] = $email;

		return $this;
	}

	/**
	 * Gets first_email_date
	 * @return string
	 */
	public function getFirstEmailDate()
	{
		return $this->container['first_email_date'];
	}

	/**
	 * Sets first_email_date
	 * @param string $first_email_date The date and time when verification email was sent first time.
	 * @return $this
	 */
	public function setFirstEmailDate($first_email_date)
	{
		$this->container['first_email_date'] = $first_email_date;

		return $this;
	}

	/**
	 * Gets verify_date
	 * @return string
	 */
	public function getVerifyDate()
	{
		return $this->container['verify_date'];
	}

	/**
	 * Sets verify_date
	 * @param string $verify_date The date and time when email was verified.
	 * @return $this
	 */
	public function setVerifyDate($verify_date)
	{
		$this->container['verify_date'] = $verify_date;

		return $this;
	}

	/**
	 * Gets suspend_date
	 * @return string
	 */
	public function getSuspendDate()
	{
		return $this->container['suspend_date'];
	}

	/**
	 * Sets suspend_date
	 * @param string $suspend_date The date and time when email will be blocked.
	 * @return $this
	 */
	public function setSuspendDate($suspend_date)
	{
		$this->container['suspend_date'] = $suspend_date;

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

	/**
	 * Gets domains
	 * @return \Pananames\Model\EmailInfoDomains[]
	 */
	public function getDomains()
	{
		return $this->container['domains'];
	}

	/**
	 * Sets domains
	 * @param \Pananames\Model\EmailInfoDomains[] $domains
	 * @return $this
	 */
	public function setDomains($domains)
	{
		$this->container['domains'] = $domains;

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


