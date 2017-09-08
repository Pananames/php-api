<?php
/**
 * Prices
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * Prices Class Doc Comment
 *
 * @category    Class
 * @description Prices for operations with a domain.
 */
class Prices 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'Prices';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'currency' => 'string',
		'register' => 'float',
		'renew' => 'float',
		'transfer' => 'float',
		'redeem' => 'float'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'currency' => null,
		'register' => 'float',
		'renew' => 'float',
		'transfer' => 'float',
		'redeem' => 'float'
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
		'currency' => 'currency',
		'register' => 'register',
		'renew' => 'renew',
		'transfer' => 'transfer',
		'redeem' => 'redeem'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'currency' => 'setCurrency',
		'register' => 'setRegister',
		'renew' => 'setRenew',
		'transfer' => 'setTransfer',
		'redeem' => 'setRedeem'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'currency' => 'getCurrency',
		'register' => 'getRegister',
		'renew' => 'getRenew',
		'transfer' => 'getTransfer',
		'redeem' => 'getRedeem'
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
	const CURRENCY_USD = 'usd';
	const CURRENCY_EUR = 'eur';
	
	

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public function getCurrencyAllowableValues()
	{
		return [
			self::CURRENCY_USD,
			self::CURRENCY_EUR,
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
		$this->container['currency'] = isset($data['currency']) ? $data['currency'] : 'usd';
		$this->container['register'] = isset($data['register']) ? $data['register'] : null;
		$this->container['renew'] = isset($data['renew']) ? $data['renew'] : null;
		$this->container['transfer'] = isset($data['transfer']) ? $data['transfer'] : null;
		$this->container['redeem'] = isset($data['redeem']) ? $data['redeem'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['currency'] === null) {
			$invalid_properties[] = "'currency' can't be null";
		}
		$allowed_values = $this->getCurrencyAllowableValues();
		if (!in_array($this->container['currency'], $allowed_values)) {
			$invalid_properties[] = sprintf(
				"invalid value for 'currency', must be one of '%s'",
				implode("', '", $allowed_values)
			);
		}

		if ($this->container['register'] === null) {
			$invalid_properties[] = "'register' can't be null";
		}
		if ($this->container['renew'] === null) {
			$invalid_properties[] = "'renew' can't be null";
		}
		if ($this->container['transfer'] === null) {
			$invalid_properties[] = "'transfer' can't be null";
		}
		if ($this->container['redeem'] === null) {
			$invalid_properties[] = "'redeem' can't be null";
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

		if ($this->container['currency'] === null) {
			return false;
		}
		$allowed_values = $this->getCurrencyAllowableValues();
		if (!in_array($this->container['currency'], $allowed_values)) {
			return false;
		}
		if ($this->container['register'] === null) {
			return false;
		}
		if ($this->container['renew'] === null) {
			return false;
		}
		if ($this->container['transfer'] === null) {
			return false;
		}
		if ($this->container['redeem'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->container['currency'];
	}

	/**
	 * Sets currency
	 * @param string $currency
	 * @return $this
	 */
	public function setCurrency($currency)
	{
		$allowed_values = $this->getCurrencyAllowableValues();
		if (!in_array($currency, $allowed_values)) {
			throw new \InvalidArgumentException(
				sprintf(
					"Invalid value for 'currency', must be one of '%s'",
					implode("', '", $allowed_values)
				)
			);
		}
		$this->container['currency'] = $currency;

		return $this;
	}

	/**
	 * Gets register
	 * @return float
	 */
	public function getRegister()
	{
		return $this->container['register'];
	}

	/**
	 * Sets register
	 * @param float $register
	 * @return $this
	 */
	public function setRegister($register)
	{
		$this->container['register'] = $register;

		return $this;
	}

	/**
	 * Gets renew
	 * @return float
	 */
	public function getRenew()
	{
		return $this->container['renew'];
	}

	/**
	 * Sets renew
	 * @param float $renew
	 * @return $this
	 */
	public function setRenew($renew)
	{
		$this->container['renew'] = $renew;

		return $this;
	}

	/**
	 * Gets transfer
	 * @return float
	 */
	public function getTransfer()
	{
		return $this->container['transfer'];
	}

	/**
	 * Sets transfer
	 * @param float $transfer
	 * @return $this
	 */
	public function setTransfer($transfer)
	{
		$this->container['transfer'] = $transfer;

		return $this;
	}

	/**
	 * Gets redeem
	 * @return float
	 */
	public function getRedeem()
	{
		return $this->container['redeem'];
	}

	/**
	 * Sets redeem
	 * @param float $redeem
	 * @return $this
	 */
	public function setRedeem($redeem)
	{
		$this->container['redeem'] = $redeem;

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


