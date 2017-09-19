<?php
/**
 * WhoisResponseData
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * WhoisResponseData Class Doc Comment
 *
 * @category    Class
 */
class WhoisResponseData 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'WhoisResponse_data';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'whois_privacy' => 'bool',
		'preview' => 'bool',
		'registrant_contact' => '\Pananames\Model\Contact',
		'admin_contact' => '\Pananames\Model\Contact',
		'tech_contact' => '\Pananames\Model\Contact',
		'billing_contact' => '\Pananames\Model\Contact'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'whois_privacy' => null,
		'preview' => null,
		'registrant_contact' => null,
		'admin_contact' => null,
		'tech_contact' => null,
		'billing_contact' => null
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
		'whois_privacy' => 'whois_privacy',
		'preview' => 'preview',
		'registrant_contact' => 'registrant_contact',
		'admin_contact' => 'admin_contact',
		'tech_contact' => 'tech_contact',
		'billing_contact' => 'billing_contact'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'whois_privacy' => 'setWhoisPrivacy',
		'preview' => 'setPreview',
		'registrant_contact' => 'setRegistrantContact',
		'admin_contact' => 'setAdminContact',
		'tech_contact' => 'setTechContact',
		'billing_contact' => 'setBillingContact'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'whois_privacy' => 'getWhoisPrivacy',
		'preview' => 'getPreview',
		'registrant_contact' => 'getRegistrantContact',
		'admin_contact' => 'getAdminContact',
		'tech_contact' => 'getTechContact',
		'billing_contact' => 'getBillingContact'
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
		$this->container['whois_privacy'] = isset($data['whois_privacy']) ? $data['whois_privacy'] : null;
		$this->container['preview'] = isset($data['preview']) ? $data['preview'] : null;
		$this->container['registrant_contact'] = isset($data['registrant_contact']) ? $data['registrant_contact'] : null;
		$this->container['admin_contact'] = isset($data['admin_contact']) ? $data['admin_contact'] : null;
		$this->container['tech_contact'] = isset($data['tech_contact']) ? $data['tech_contact'] : null;
		$this->container['billing_contact'] = isset($data['billing_contact']) ? $data['billing_contact'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['registrant_contact'] === null) {
			$invalid_properties[] = "'registrant_contact' can't be null";
		}
		if ($this->container['admin_contact'] === null) {
			$invalid_properties[] = "'admin_contact' can't be null";
		}
		if ($this->container['tech_contact'] === null) {
			$invalid_properties[] = "'tech_contact' can't be null";
		}
		if ($this->container['billing_contact'] === null) {
			$invalid_properties[] = "'billing_contact' can't be null";
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

		if ($this->container['registrant_contact'] === null) {
			return false;
		}
		if ($this->container['admin_contact'] === null) {
			return false;
		}
		if ($this->container['tech_contact'] === null) {
			return false;
		}
		if ($this->container['billing_contact'] === null) {
			return false;
		}

		return true;
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
	 * Gets preview
	 * @return bool
	 */
	public function getPreview()
	{
		return $this->container['preview'];
	}

	/**
	 * Sets preview
	 * @param bool $preview
	 * @return $this
	 */
	public function setPreview($preview)
	{
		$this->container['preview'] = $preview;

		return $this;
	}

	/**
	 * Gets registrant_contact
	 * @return \Pananames\Model\Contact
	 */
	public function getRegistrantContact()
	{
		return $this->container['registrant_contact'];
	}

	/**
	 * Sets registrant_contact
	 * @param \Pananames\Model\Contact $registrant_contact
	 * @return $this
	 */
	public function setRegistrantContact($registrant_contact)
	{
		$this->container['registrant_contact'] = $registrant_contact;

		return $this;
	}

	/**
	 * Gets admin_contact
	 * @return \Pananames\Model\Contact
	 */
	public function getAdminContact()
	{
		return $this->container['admin_contact'];
	}

	/**
	 * Sets admin_contact
	 * @param \Pananames\Model\Contact $admin_contact
	 * @return $this
	 */
	public function setAdminContact($admin_contact)
	{
		$this->container['admin_contact'] = $admin_contact;

		return $this;
	}

	/**
	 * Gets tech_contact
	 * @return \Pananames\Model\Contact
	 */
	public function getTechContact()
	{
		return $this->container['tech_contact'];
	}

	/**
	 * Sets tech_contact
	 * @param \Pananames\Model\Contact $tech_contact
	 * @return $this
	 */
	public function setTechContact($tech_contact)
	{
		$this->container['tech_contact'] = $tech_contact;

		return $this;
	}

	/**
	 * Gets billing_contact
	 * @return \Pananames\Model\Contact
	 */
	public function getBillingContact()
	{
		return $this->container['billing_contact'];
	}

	/**
	 * Sets billing_contact
	 * @param \Pananames\Model\Contact $billing_contact
	 * @return $this
	 */
	public function setBillingContact($billing_contact)
	{
		$this->container['billing_contact'] = $billing_contact;

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


