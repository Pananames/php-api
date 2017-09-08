<?php
/**
 * Claim
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * Claim Class Doc Comment
 *
 * @category    Class
 */
class Claim 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'Claim';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'trade_mark' => 'string',
		'jurisdiction' => 'string',
		'jurisdiction_country_code' => 'string',
		'goods' => 'string',
		'registrant_contact' => '\Pananames\Model\ClaimContact',
		'agent_contact' => '\Pananames\Model\ClaimContact',
		'description' => 'string[]'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'trade_mark' => null,
		'jurisdiction' => null,
		'jurisdiction_country_code' => null,
		'goods' => null,
		'registrant_contact' => null,
		'agent_contact' => null,
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
		'trade_mark' => 'trade_mark',
		'jurisdiction' => 'jurisdiction',
		'jurisdiction_country_code' => 'jurisdiction_country_code',
		'goods' => 'goods',
		'registrant_contact' => 'registrant_contact',
		'agent_contact' => 'agent_contact',
		'description' => 'description'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'trade_mark' => 'setTradeMark',
		'jurisdiction' => 'setJurisdiction',
		'jurisdiction_country_code' => 'setJurisdictionCountryCode',
		'goods' => 'setGoods',
		'registrant_contact' => 'setRegistrantContact',
		'agent_contact' => 'setAgentContact',
		'description' => 'setDescription'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'trade_mark' => 'getTradeMark',
		'jurisdiction' => 'getJurisdiction',
		'jurisdiction_country_code' => 'getJurisdictionCountryCode',
		'goods' => 'getGoods',
		'registrant_contact' => 'getRegistrantContact',
		'agent_contact' => 'getAgentContact',
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
		$this->container['trade_mark'] = isset($data['trade_mark']) ? $data['trade_mark'] : null;
		$this->container['jurisdiction'] = isset($data['jurisdiction']) ? $data['jurisdiction'] : null;
		$this->container['jurisdiction_country_code'] = isset($data['jurisdiction_country_code']) ? $data['jurisdiction_country_code'] : null;
		$this->container['goods'] = isset($data['goods']) ? $data['goods'] : null;
		$this->container['registrant_contact'] = isset($data['registrant_contact']) ? $data['registrant_contact'] : null;
		$this->container['agent_contact'] = isset($data['agent_contact']) ? $data['agent_contact'] : null;
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

		if ($this->container['trade_mark'] === null) {
			$invalid_properties[] = "'trade_mark' can't be null";
		}
		if ($this->container['jurisdiction'] === null) {
			$invalid_properties[] = "'jurisdiction' can't be null";
		}
		if ($this->container['jurisdiction_country_code'] === null) {
			$invalid_properties[] = "'jurisdiction_country_code' can't be null";
		}
		if ($this->container['goods'] === null) {
			$invalid_properties[] = "'goods' can't be null";
		}
		if ($this->container['registrant_contact'] === null) {
			$invalid_properties[] = "'registrant_contact' can't be null";
		}
		if ($this->container['agent_contact'] === null) {
			$invalid_properties[] = "'agent_contact' can't be null";
		}
		if ($this->container['description'] === null) {
			$invalid_properties[] = "'description' can't be null";
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

		if ($this->container['trade_mark'] === null) {
			return false;
		}
		if ($this->container['jurisdiction'] === null) {
			return false;
		}
		if ($this->container['jurisdiction_country_code'] === null) {
			return false;
		}
		if ($this->container['goods'] === null) {
			return false;
		}
		if ($this->container['registrant_contact'] === null) {
			return false;
		}
		if ($this->container['agent_contact'] === null) {
			return false;
		}
		if ($this->container['description'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets trade_mark
	 * @return string
	 */
	public function getTradeMark()
	{
		return $this->container['trade_mark'];
	}

	/**
	 * Sets trade_mark
	 * @param string $trade_mark
	 * @return $this
	 */
	public function setTradeMark($trade_mark)
	{
		$this->container['trade_mark'] = $trade_mark;

		return $this;
	}

	/**
	 * Gets jurisdiction
	 * @return string
	 */
	public function getJurisdiction()
	{
		return $this->container['jurisdiction'];
	}

	/**
	 * Sets jurisdiction
	 * @param string $jurisdiction
	 * @return $this
	 */
	public function setJurisdiction($jurisdiction)
	{
		$this->container['jurisdiction'] = $jurisdiction;

		return $this;
	}

	/**
	 * Gets jurisdiction_country_code
	 * @return string
	 */
	public function getJurisdictionCountryCode()
	{
		return $this->container['jurisdiction_country_code'];
	}

	/**
	 * Sets jurisdiction_country_code
	 * @param string $jurisdiction_country_code
	 * @return $this
	 */
	public function setJurisdictionCountryCode($jurisdiction_country_code)
	{
		$this->container['jurisdiction_country_code'] = $jurisdiction_country_code;

		return $this;
	}

	/**
	 * Gets goods
	 * @return string
	 */
	public function getGoods()
	{
		return $this->container['goods'];
	}

	/**
	 * Sets goods
	 * @param string $goods
	 * @return $this
	 */
	public function setGoods($goods)
	{
		$this->container['goods'] = $goods;

		return $this;
	}

	/**
	 * Gets registrant_contact
	 * @return \Pananames\Model\ClaimContact
	 */
	public function getRegistrantContact()
	{
		return $this->container['registrant_contact'];
	}

	/**
	 * Sets registrant_contact
	 * @param \Pananames\Model\ClaimContact $registrant_contact
	 * @return $this
	 */
	public function setRegistrantContact($registrant_contact)
	{
		$this->container['registrant_contact'] = $registrant_contact;

		return $this;
	}

	/**
	 * Gets agent_contact
	 * @return \Pananames\Model\ClaimContact
	 */
	public function getAgentContact()
	{
		return $this->container['agent_contact'];
	}

	/**
	 * Sets agent_contact
	 * @param \Pananames\Model\ClaimContact $agent_contact
	 * @return $this
	 */
	public function setAgentContact($agent_contact)
	{
		$this->container['agent_contact'] = $agent_contact;

		return $this;
	}

	/**
	 * Gets description
	 * @return string[]
	 */
	public function getDescription()
	{
		return $this->container['description'];
	}

	/**
	 * Sets description
	 * @param string[] $description
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


