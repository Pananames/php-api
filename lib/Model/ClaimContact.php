<?php
/**
 * ClaimContact
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * ClaimContact Class Doc Comment
 *
 * @category    Class
 */
class ClaimContact 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'ClaimContact';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'organization' => 'string',
		'name' => 'string',
		'street' => 'string',
		'state' => 'string',
		'city' => 'string',
		'zip' => 'string',
		'country_code' => 'string',
		'phone' => 'string',
		'email' => 'string'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'organization' => null,
		'name' => null,
		'street' => null,
		'state' => null,
		'city' => null,
		'zip' => null,
		'country_code' => null,
		'phone' => null,
		'email' => null
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
		'organization' => 'organization',
		'name' => 'name',
		'street' => 'street',
		'state' => 'state',
		'city' => 'city',
		'zip' => 'zip',
		'country_code' => 'country_code',
		'phone' => 'phone',
		'email' => 'email'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'organization' => 'setOrganization',
		'name' => 'setName',
		'street' => 'setStreet',
		'state' => 'setState',
		'city' => 'setCity',
		'zip' => 'setZip',
		'country_code' => 'setCountryCode',
		'phone' => 'setPhone',
		'email' => 'setEmail'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'organization' => 'getOrganization',
		'name' => 'getName',
		'street' => 'getStreet',
		'state' => 'getState',
		'city' => 'getCity',
		'zip' => 'getZip',
		'country_code' => 'getCountryCode',
		'phone' => 'getPhone',
		'email' => 'getEmail'
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
		$this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
		$this->container['name'] = isset($data['name']) ? $data['name'] : null;
		$this->container['street'] = isset($data['street']) ? $data['street'] : null;
		$this->container['state'] = isset($data['state']) ? $data['state'] : null;
		$this->container['city'] = isset($data['city']) ? $data['city'] : null;
		$this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
		$this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
		$this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
		$this->container['email'] = isset($data['email']) ? $data['email'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['organization'] === null) {
			$invalid_properties[] = "'organization' can't be null";
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

		if ($this->container['organization'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets organization
	 * @return string
	 */
	public function getOrganization()
	{
		return $this->container['organization'];
	}

	/**
	 * Sets organization
	 * @param string $organization
	 * @return $this
	 */
	public function setOrganization($organization)
	{
		$this->container['organization'] = $organization;

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
	 * @param string $name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->container['name'] = $name;

		return $this;
	}

	/**
	 * Gets street
	 * @return string
	 */
	public function getStreet()
	{
		return $this->container['street'];
	}

	/**
	 * Sets street
	 * @param string $street
	 * @return $this
	 */
	public function setStreet($street)
	{
		$this->container['street'] = $street;

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
	 * @param string $state
	 * @return $this
	 */
	public function setState($state)
	{
		$this->container['state'] = $state;

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
	 * @param string $city
	 * @return $this
	 */
	public function setCity($city)
	{
		$this->container['city'] = $city;

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
	 * @param string $zip
	 * @return $this
	 */
	public function setZip($zip)
	{
		$this->container['zip'] = $zip;

		return $this;
	}

	/**
	 * Gets country_code
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->container['country_code'];
	}

	/**
	 * Sets country_code
	 * @param string $country_code
	 * @return $this
	 */
	public function setCountryCode($country_code)
	{
		$this->container['country_code'] = $country_code;

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
	 * @param string $phone
	 * @return $this
	 */
	public function setPhone($phone)
	{
		$this->container['phone'] = $phone;

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
	 * @param string $email
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->container['email'] = $email;

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


