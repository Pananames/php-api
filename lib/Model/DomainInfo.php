<?php
/**
 * DomainInfo
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * DomainInfo Class Doc Comment
 *
 * @category    Class
 */
class DomainInfo 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'DomainInfo';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'domain' => 'string',
		'premium' => 'bool',
		'auto_renew' => 'bool',
		'whois_privacy' => 'bool',
		'lock_status' => 'string',
		'registration_date' => 'string',
		'expiration_date' => 'string',
		'deletion_date' => 'string',
		'status' => 'string',
		'name_servers' => 'string[]'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'domain' => null,
		'premium' => null,
		'auto_renew' => null,
		'whois_privacy' => null,
		'lock_status' => null,
		'registration_date' => 'dateTime',
		'expiration_date' => 'dateTime',
		'deletion_date' => 'dateTime',
		'status' => null,
		'name_servers' => null
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
		'premium' => 'premium',
		'auto_renew' => 'auto_renew',
		'whois_privacy' => 'whois_privacy',
		'lock_status' => 'lock_status',
		'registration_date' => 'registration_date',
		'expiration_date' => 'expiration_date',
		'deletion_date' => 'deletion_date',
		'status' => 'status',
		'name_servers' => 'name_servers'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'domain' => 'setDomain',
		'premium' => 'setPremium',
		'auto_renew' => 'setAutoRenew',
		'whois_privacy' => 'setWhoisPrivacy',
		'lock_status' => 'setLockStatus',
		'registration_date' => 'setRegistrationDate',
		'expiration_date' => 'setExpirationDate',
		'deletion_date' => 'setDeletionDate',
		'status' => 'setStatus',
		'name_servers' => 'setNameServers'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'domain' => 'getDomain',
		'premium' => 'getPremium',
		'auto_renew' => 'getAutoRenew',
		'whois_privacy' => 'getWhoisPrivacy',
		'lock_status' => 'getLockStatus',
		'registration_date' => 'getRegistrationDate',
		'expiration_date' => 'getExpirationDate',
		'deletion_date' => 'getDeletionDate',
		'status' => 'getStatus',
		'name_servers' => 'getNameServers'
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
	const LOCK_STATUS_UNLOCKED = 'unlocked';
	const LOCK_STATUS_CLIENT = 'client';
	const LOCK_STATUS_REGISTRAR = 'registrar';
	const LOCK_STATUS_REGISTRY = 'registry';
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
	public function getLockStatusAllowableValues()
	{
		return [
			self::LOCK_STATUS_UNLOCKED,
			self::LOCK_STATUS_CLIENT,
			self::LOCK_STATUS_REGISTRAR,
			self::LOCK_STATUS_REGISTRY,
		];
	}

	

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
		$this->container['premium'] = isset($data['premium']) ? $data['premium'] : null;
		$this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : null;
		$this->container['whois_privacy'] = isset($data['whois_privacy']) ? $data['whois_privacy'] : null;
		$this->container['lock_status'] = isset($data['lock_status']) ? $data['lock_status'] : null;
		$this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
		$this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
		$this->container['deletion_date'] = isset($data['deletion_date']) ? $data['deletion_date'] : null;
		$this->container['status'] = isset($data['status']) ? $data['status'] : null;
		$this->container['name_servers'] = isset($data['name_servers']) ? $data['name_servers'] : null;
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
		if ($this->container['premium'] === null) {
			$invalid_properties[] = "'premium' can't be null";
		}
		if ($this->container['auto_renew'] === null) {
			$invalid_properties[] = "'auto_renew' can't be null";
		}
		if ($this->container['whois_privacy'] === null) {
			$invalid_properties[] = "'whois_privacy' can't be null";
		}
		if ($this->container['lock_status'] === null) {
			$invalid_properties[] = "'lock_status' can't be null";
		}
		$allowed_values = $this->getLockStatusAllowableValues();
		if (!in_array($this->container['lock_status'], $allowed_values)) {
			$invalid_properties[] = sprintf(
				"invalid value for 'lock_status', must be one of '%s'",
				implode("', '", $allowed_values)
			);
		}

		if ($this->container['registration_date'] === null) {
			$invalid_properties[] = "'registration_date' can't be null";
		}
		if ($this->container['expiration_date'] === null) {
			$invalid_properties[] = "'expiration_date' can't be null";
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

		if ($this->container['name_servers'] === null) {
			$invalid_properties[] = "'name_servers' can't be null";
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
		if ($this->container['premium'] === null) {
			return false;
		}
		if ($this->container['auto_renew'] === null) {
			return false;
		}
		if ($this->container['whois_privacy'] === null) {
			return false;
		}
		if ($this->container['lock_status'] === null) {
			return false;
		}
		$allowed_values = $this->getLockStatusAllowableValues();
		if (!in_array($this->container['lock_status'], $allowed_values)) {
			return false;
		}
		if ($this->container['registration_date'] === null) {
			return false;
		}
		if ($this->container['expiration_date'] === null) {
			return false;
		}
		if ($this->container['status'] === null) {
			return false;
		}
		$allowed_values = $this->getStatusAllowableValues();
		if (!in_array($this->container['status'], $allowed_values)) {
			return false;
		}
		if ($this->container['name_servers'] === null) {
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
	 * Gets premium
	 * @return bool
	 */
	public function getPremium()
	{
		return $this->container['premium'];
	}

	/**
	 * Sets premium
	 * @param bool $premium
	 * @return $this
	 */
	public function setPremium($premium)
	{
		$this->container['premium'] = $premium;

		return $this;
	}

	/**
	 * Gets auto_renew
	 * @return bool
	 */
	public function getAutoRenew()
	{
		return $this->container['auto_renew'];
	}

	/**
	 * Sets auto_renew
	 * @param bool $auto_renew
	 * @return $this
	 */
	public function setAutoRenew($auto_renew)
	{
		$this->container['auto_renew'] = $auto_renew;

		return $this;
	}

	/**
	 * Gets whois_privacy
	 * @return bool
	 */
	public function getWhoisPrivacy()
	{
		return $this->container['whois_privacy'];
	}

	/**
	 * Sets whois_privacy
	 * @param bool $whois_privacy
	 * @return $this
	 */
	public function setWhoisPrivacy($whois_privacy)
	{
		$this->container['whois_privacy'] = $whois_privacy;

		return $this;
	}

	/**
	 * Gets lock_status
	 * @return string
	 */
	public function getLockStatus()
	{
		return $this->container['lock_status'];
	}

	/**
	 * Sets lock_status
	 * @param string $lock_status
	 * @return $this
	 */
	public function setLockStatus($lock_status)
	{
		$allowed_values = $this->getLockStatusAllowableValues();
		if (!in_array($lock_status, $allowed_values)) {
			throw new \InvalidArgumentException(
				sprintf(
					"Invalid value for 'lock_status', must be one of '%s'",
					implode("', '", $allowed_values)
				)
			);
		}
		$this->container['lock_status'] = $lock_status;

		return $this;
	}

	/**
	 * Gets registration_date
	 * @return string
	 */
	public function getRegistrationDate()
	{
		return $this->container['registration_date'];
	}

	/**
	 * Sets registration_date
	 * @param string $registration_date
	 * @return $this
	 */
	public function setRegistrationDate($registration_date)
	{
		$this->container['registration_date'] = $registration_date;

		return $this;
	}

	/**
	 * Gets expiration_date
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->container['expiration_date'];
	}

	/**
	 * Sets expiration_date
	 * @param string $expiration_date
	 * @return $this
	 */
	public function setExpirationDate($expiration_date)
	{
		$this->container['expiration_date'] = $expiration_date;

		return $this;
	}

	/**
	 * Gets deletion_date
	 * @return string
	 */
	public function getDeletionDate()
	{
		return $this->container['deletion_date'];
	}

	/**
	 * Sets deletion_date
	 * @param string $deletion_date
	 * @return $this
	 */
	public function setDeletionDate($deletion_date)
	{
		$this->container['deletion_date'] = $deletion_date;

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
	 * Gets name_servers
	 * @return string[]
	 */
	public function getNameServers()
	{
		return $this->container['name_servers'];
	}

	/**
	 * Sets name_servers
	 * @param string[] $name_servers The list of name servers for the domain.
	 * @return $this
	 */
	public function setNameServers($name_servers)
	{
		$this->container['name_servers'] = $name_servers;

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


