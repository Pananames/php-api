<?php
/**
 * StatusCodesListResponse
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * StatusCodesListResponse Class Doc Comment
 *
 * @category    Class
 */
class StatusCodesListResponse 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'StatusCodesListResponse';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'data' => 'string[]'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'data' => null
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
		'data' => 'data'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'data' => 'setData'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'data' => 'getData'
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
	const DATA_ADD_PERIOD = 'addPeriod';
	const DATA_AUTO_RENEW_PERIOD = 'autoRenewPeriod';
	const DATA_INACTIVE = 'inactive';
	const DATA_OK = 'ok';
	const DATA_PENDING_CREATE = 'pendingCreate';
	const DATA_PENDING_DELETE = 'pendingDelete';
	const DATA_PENDING_RENEW = 'pendingRenew';
	const DATA_PENDING_RESTORE = 'pendingRestore';
	const DATA_PENDING_TRANSFER = 'pendingTransfer';
	const DATA_PENDING_UPDATE = 'pendingUpdate';
	const DATA_REDEMPTION_PERIOD = 'redemptionPeriod';
	const DATA_RENEW_PERIOD = 'renewPeriod';
	const DATA_SERVER_DELETE_PROHIBITED = 'serverDeleteProhibited';
	const DATA_SERVER_HOLD = 'serverHold';
	const DATA_SERVER_RENEW_PROHIBITED = 'serverRenewProhibited';
	const DATA_SERVER_TRANSFER_PROHIBITED = 'serverTransferProhibited';
	const DATA_SERVER_UPDATE_PROHIBITED = 'serverUpdateProhibited';
	const DATA_TRANSFER_PERIOD = 'transferPeriod';
	const DATA_CLIENT_DELETE_PROHIBITED = 'clientDeleteProhibited';
	const DATA_CLIENT_HOLD = 'clientHold';
	const DATA_CLIENT_RENEW_PROHIBITED = 'clientRenewProhibited';
	const DATA_CLIENT_TRANSFER_PROHIBITED = 'clientTransferProhibited';
	const DATA_CLIENT_UPDATE_PROHIBITED = 'clientUpdateProhibited';
	
	

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public function getDataAllowableValues()
	{
		return [
			self::DATA_ADD_PERIOD,
			self::DATA_AUTO_RENEW_PERIOD,
			self::DATA_INACTIVE,
			self::DATA_OK,
			self::DATA_PENDING_CREATE,
			self::DATA_PENDING_DELETE,
			self::DATA_PENDING_RENEW,
			self::DATA_PENDING_RESTORE,
			self::DATA_PENDING_TRANSFER,
			self::DATA_PENDING_UPDATE,
			self::DATA_REDEMPTION_PERIOD,
			self::DATA_RENEW_PERIOD,
			self::DATA_SERVER_DELETE_PROHIBITED,
			self::DATA_SERVER_HOLD,
			self::DATA_SERVER_RENEW_PROHIBITED,
			self::DATA_SERVER_TRANSFER_PROHIBITED,
			self::DATA_SERVER_UPDATE_PROHIBITED,
			self::DATA_TRANSFER_PERIOD,
			self::DATA_CLIENT_DELETE_PROHIBITED,
			self::DATA_CLIENT_HOLD,
			self::DATA_CLIENT_RENEW_PROHIBITED,
			self::DATA_CLIENT_TRANSFER_PROHIBITED,
			self::DATA_CLIENT_UPDATE_PROHIBITED,
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
		$this->container['data'] = isset($data['data']) ? $data['data'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['data'] === null) {
			$invalid_properties[] = "'data' can't be null";
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

		if ($this->container['data'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets data
	 * @return string[]
	 */
	public function getData()
	{
		return $this->container['data'];
	}

	/**
	 * Sets data
	 * @param string[] $data
	 * @return $this
	 */
	public function setData($data)
	{
		$allowed_values = $this->getDataAllowableValues();
		if (array_diff($data, $allowed_values)) {
			throw new \InvalidArgumentException(
				sprintf(
					"Invalid value for 'data', must be one of '%s'",
					implode("', '", $allowed_values)
				)
			);
		}
		$this->container['data'] = $data;

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


