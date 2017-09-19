<?php
/**
 * CheckInfo
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * CheckInfo Class Doc Comment
 *
 * @category    Class
 */
class CheckInfo 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'CheckInfo';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'domain' => 'string',
		'available' => 'bool',
		'premium' => 'bool',
		'prices' => '\Pananames\Model\Prices',
		'promo_prices' => '\Pananames\Model\Prices',
		'claim' => 'bool'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'domain' => null,
		'available' => null,
		'premium' => null,
		'prices' => null,
		'promo_prices' => null,
		'claim' => null
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
		'available' => 'available',
		'premium' => 'premium',
		'prices' => 'prices',
		'promo_prices' => 'promo_prices',
		'claim' => 'claim'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'domain' => 'setDomain',
		'available' => 'setAvailable',
		'premium' => 'setPremium',
		'prices' => 'setPrices',
		'promo_prices' => 'setPromoPrices',
		'claim' => 'setClaim'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'domain' => 'getDomain',
		'available' => 'getAvailable',
		'premium' => 'getPremium',
		'prices' => 'getPrices',
		'promo_prices' => 'getPromoPrices',
		'claim' => 'getClaim'
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
		$this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
		$this->container['available'] = isset($data['available']) ? $data['available'] : null;
		$this->container['premium'] = isset($data['premium']) ? $data['premium'] : null;
		$this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
		$this->container['promo_prices'] = isset($data['promo_prices']) ? $data['promo_prices'] : null;
		$this->container['claim'] = isset($data['claim']) ? $data['claim'] : null;
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
		if ($this->container['available'] === null) {
			$invalid_properties[] = "'available' can't be null";
		}
		if ($this->container['premium'] === null) {
			$invalid_properties[] = "'premium' can't be null";
		}
		if ($this->container['prices'] === null) {
			$invalid_properties[] = "'prices' can't be null";
		}
		if ($this->container['claim'] === null) {
			$invalid_properties[] = "'claim' can't be null";
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
		if ($this->container['available'] === null) {
			return false;
		}
		if ($this->container['premium'] === null) {
			return false;
		}
		if ($this->container['prices'] === null) {
			return false;
		}
		if ($this->container['claim'] === null) {
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
	 * Gets available
	 * @return bool
	 */
	public function getAvailable()
	{
		return $this->container['available'];
	}

	/**
	 * Sets available
	 * @param bool $available
	 * @return $this
	 */
	public function setAvailable($available)
	{
		$this->container['available'] = $available;

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
	 * Gets prices
	 * @return \Pananames\Model\Prices
	 */
	public function getPrices()
	{
		return $this->container['prices'];
	}

	/**
	 * Sets prices
	 * @param \Pananames\Model\Prices $prices
	 * @return $this
	 */
	public function setPrices($prices)
	{
		$this->container['prices'] = $prices;

		return $this;
	}

	/**
	 * Gets promo_prices
	 * @return \Pananames\Model\Prices
	 */
	public function getPromoPrices()
	{
		return $this->container['promo_prices'];
	}

	/**
	 * Sets promo_prices
	 * @param \Pananames\Model\Prices $promo_prices
	 * @return $this
	 */
	public function setPromoPrices($promo_prices)
	{
		$this->container['promo_prices'] = $promo_prices;

		return $this;
	}

	/**
	 * Gets claim
	 * @return bool
	 */
	public function getClaim()
	{
		return $this->container['claim'];
	}

	/**
	 * Sets claim
	 * @param bool $claim
	 * @return $this
	 */
	public function setClaim($claim)
	{
		$this->container['claim'] = $claim;

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


