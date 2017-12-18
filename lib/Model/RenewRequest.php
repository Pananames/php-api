<?php
/**
 * RenewRequest
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * RenewRequest Class Doc Comment
 *
 * @category    Class
 */
class RenewRequest 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'RenewRequest';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'period' => 'int',
		'premium_price' => 'float'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'period' => null,
		'premium_price' => 'float'
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
		'period' => 'period',
		'premium_price' => 'premium_price'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'period' => 'setPeriod',
		'premium_price' => 'setPremiumPrice'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'period' => 'getPeriod',
		'premium_price' => 'getPremiumPrice'
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
		$this->container['period'] = isset($data['period']) ? $data['period'] : null;
		$this->container['premium_price'] = isset($data['premium_price']) ? $data['premium_price'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['period'] === null) {
			$invalid_properties[] = "'period' can't be null";
		}
		if (($this->container['period'] < 1)) {
			$invalid_properties[] = "invalid value for 'period', must be bigger than or equal to 1.";
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

		if ($this->container['period'] === null) {
			return false;
		}
		if ($this->container['period'] < 1) {
			return false;
		}

		return true;
	}

	/**
	 * Gets period
	 * @return int
	 */
	public function getPeriod()
	{
		return $this->container['period'];
	}

	/**
	 * Sets period
	 * @param int $period Registration period in years.
	 * @return $this
	 */
	public function setPeriod($period)
	{

		if (($period < 1)) {
				throw new \InvalidArgumentException('invalid value for $period when calling RenewRequest., must be bigger than or equal to 1.');
		}

		$this->container['period'] = $period;

		return $this;
	}

	/**
	 * Gets premium_price
	 * @return float
	 */
	public function getPremiumPrice()
	{
		return $this->container['premium_price'];
	}

	/**
	 * Sets premium_price
	 * @param float $premium_price Price of renew operation. Required only for premium domains.
	 * @return $this
	 */
	public function setPremiumPrice($premium_price)
	{
		$this->container['premium_price'] = $premium_price;

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


