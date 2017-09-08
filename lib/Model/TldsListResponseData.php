<?php
/**
 * TldsListResponseData
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * TldsListResponseData Class Doc Comment
 *
 * @category    Class
 */
class TldsListResponseData 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'TldsListResponse_data';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'tld' => 'string',
		'prices' => '\Pananames\Model\Prices',
		'promo_prices' => '\Pananames\Model\Prices',
		'promo_untill' => '\DateTime'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'tld' => null,
		'prices' => null,
		'promo_prices' => null,
		'promo_untill' => 'date'
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
		'tld' => 'tld',
		'prices' => 'prices',
		'promo_prices' => 'promo_prices',
		'promo_untill' => 'promo_untill'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'tld' => 'setTld',
		'prices' => 'setPrices',
		'promo_prices' => 'setPromoPrices',
		'promo_untill' => 'setPromoUntill'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'tld' => 'getTld',
		'prices' => 'getPrices',
		'promo_prices' => 'getPromoPrices',
		'promo_untill' => 'getPromoUntill'
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
		$this->container['tld'] = isset($data['tld']) ? $data['tld'] : null;
		$this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
		$this->container['promo_prices'] = isset($data['promo_prices']) ? $data['promo_prices'] : null;
		$this->container['promo_untill'] = isset($data['promo_untill']) ? $data['promo_untill'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['tld'] === null) {
			$invalid_properties[] = "'tld' can't be null";
		}
		if ($this->container['prices'] === null) {
			$invalid_properties[] = "'prices' can't be null";
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

		if ($this->container['tld'] === null) {
			return false;
		}
		if ($this->container['prices'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets tld
	 * @return string
	 */
	public function getTld()
	{
		return $this->container['tld'];
	}

	/**
	 * Sets tld
	 * @param string $tld the registerable suffix. In most cases the suffix matches a TLD, but there are some cases where the suffix is a subzone of the TLD (e.g. co.uk).
	 * @return $this
	 */
	public function setTld($tld)
	{
		$this->container['tld'] = $tld;

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
	 * Gets promo_untill
	 * @return \DateTime
	 */
	public function getPromoUntill()
	{
		return $this->container['promo_untill'];
	}

	/**
	 * Sets promo_untill
	 * @param \DateTime $promo_untill
	 * @return $this
	 */
	public function setPromoUntill($promo_untill)
	{
		$this->container['promo_untill'] = $promo_untill;

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


