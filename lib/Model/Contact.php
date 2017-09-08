<?php
/**
 * Contact
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * Contact Class Doc Comment
 *
 * @category    Class
 */
class Contact 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'Contact';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'org' => 'string',
		'name' => 'string',
		'email' => 'string',
		'address' => 'string',
		'city' => 'string',
		'state' => 'string',
		'zip' => 'string',
		'country' => 'string',
		'phone' => 'string'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'org' => null,
		'name' => null,
		'email' => null,
		'address' => null,
		'city' => null,
		'state' => null,
		'zip' => null,
		'country' => null,
		'phone' => null
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
		'org' => 'org',
		'name' => 'name',
		'email' => 'email',
		'address' => 'address',
		'city' => 'city',
		'state' => 'state',
		'zip' => 'zip',
		'country' => 'country',
		'phone' => 'phone'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'org' => 'setOrg',
		'name' => 'setName',
		'email' => 'setEmail',
		'address' => 'setAddress',
		'city' => 'setCity',
		'state' => 'setState',
		'zip' => 'setZip',
		'country' => 'setCountry',
		'phone' => 'setPhone'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'org' => 'getOrg',
		'name' => 'getName',
		'email' => 'getEmail',
		'address' => 'getAddress',
		'city' => 'getCity',
		'state' => 'getState',
		'zip' => 'getZip',
		'country' => 'getCountry',
		'phone' => 'getPhone'
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
		$this->container['org'] = isset($data['org']) ? $data['org'] : null;
		$this->container['name'] = isset($data['name']) ? $data['name'] : null;
		$this->container['email'] = isset($data['email']) ? $data['email'] : null;
		$this->container['address'] = isset($data['address']) ? $data['address'] : null;
		$this->container['city'] = isset($data['city']) ? $data['city'] : null;
		$this->container['state'] = isset($data['state']) ? $data['state'] : null;
		$this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
		$this->container['country'] = isset($data['country']) ? $data['country'] : null;
		$this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['org'] === null) {
			$invalid_properties[] = "'org' can't be null";
		}
		if ($this->container['name'] === null) {
			$invalid_properties[] = "'name' can't be null";
		}
		if ($this->container['email'] === null) {
			$invalid_properties[] = "'email' can't be null";
		}
		if ($this->container['address'] === null) {
			$invalid_properties[] = "'address' can't be null";
		}
		if ($this->container['city'] === null) {
			$invalid_properties[] = "'city' can't be null";
		}
		if ($this->container['state'] === null) {
			$invalid_properties[] = "'state' can't be null";
		}
		if ($this->container['zip'] === null) {
			$invalid_properties[] = "'zip' can't be null";
		}
		if ((strlen($this->container['zip']) > 10)) {
			$invalid_properties[] = "invalid value for 'zip', the character length must be smaller than or equal to 10.";
		}

		if ($this->container['country'] === null) {
			$invalid_properties[] = "'country' can't be null";
		}
		if ($this->container['phone'] === null) {
			$invalid_properties[] = "'phone' can't be null";
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

		if ($this->container['org'] === null) {
			return false;
		}
		if ($this->container['name'] === null) {
			return false;
		}
		if ($this->container['email'] === null) {
			return false;
		}
		if ($this->container['address'] === null) {
			return false;
		}
		if ($this->container['city'] === null) {
			return false;
		}
		if ($this->container['state'] === null) {
			return false;
		}
		if ($this->container['zip'] === null) {
			return false;
		}
		if (strlen($this->container['zip']) > 10) {
			return false;
		}
		if ($this->container['country'] === null) {
			return false;
		}
		if ($this->container['phone'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets org
	 * @return string
	 */
	public function getOrg()
	{
		return $this->container['org'];
	}

	/**
	 * Sets org
	 * @param string $org Contact organization
	 * @return $this
	 */
	public function setOrg($org)
	{
		$this->container['org'] = $org;

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
	 * @param string $name Contact name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->container['name'] = $name;

		return $this;
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
	 * @param string $email Contact email
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->container['email'] = $email;

		return $this;
	}

	/**
	 * Gets address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->container['address'];
	}

	/**
	 * Sets address
	 * @param string $address Contact address
	 * @return $this
	 */
	public function setAddress($address)
	{
		$this->container['address'] = $address;

		return $this;
	}

	/**
	 * Gets city
	 * @return string
	 */
	public function getCity()
	{
		return $this->container['city'];
	}

	/**
	 * Sets city
	 * @param string $city Contact city
	 * @return $this
	 */
	public function setCity($city)
	{
		$this->container['city'] = $city;

		return $this;
	}

	/**
	 * Gets state
	 * @return string
	 */
	public function getState()
	{
		return $this->container['state'];
	}

	/**
	 * Sets state
	 * @param string $state Contact state
	 * @return $this
	 */
	public function setState($state)
	{
		$this->container['state'] = $state;

		return $this;
	}

	/**
	 * Gets zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->container['zip'];
	}

	/**
	 * Sets zip
	 * @param string $zip Contact zip
	 * @return $this
	 */
	public function setZip($zip)
	{
		if ((strlen($zip) > 10)) {
			throw new \InvalidArgumentException('invalid length for $zip when calling Contact., must be smaller than or equal to 10.');
		}

		$this->container['zip'] = $zip;

		return $this;
	}

	/**
	 * Gets country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->container['country'];
	}

	/**
	 * Sets country
	 * @param string $country Contact country
	 * @return $this
	 */
	public function setCountry($country)
	{
		$this->container['country'] = $country;

		return $this;
	}

	/**
	 * Gets phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->container['phone'];
	}

	/**
	 * Sets phone
	 * @param string $phone Contact phone
	 * @return $this
	 */
	public function setPhone($phone)
	{
		$this->container['phone'] = $phone;

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


