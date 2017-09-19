<?php
/**
 * WHOISApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class WHOISApi extends ApiClient
{
	private $settings;

	public function __construct($signature, $url)
	{
		if (empty($signature)) {
			throw new \InvalidArgumentException('Signature was not provided or was invalid.');
		}

		if (empty($url)) {
			throw new \InvalidArgumentException('Url was not provided or was invalid.');
		}

		$this->settings['url'] = $url;
		$this->settings['signature'] = $signature;
	}

  /**
   * Function disableWhoisPrivacy
   *
   * Disable WHOIS privacy.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\WhoisPrivacyResponse
   */
	public function disableWhoisPrivacy($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling disableWhoisPrivacy');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling WHOISApi.disableWhoisPrivacy, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/whois_privacy');

		$returnType = '\Pananames\Model\WhoisPrivacyResponse';

		return $this->sendRequest('DELETE', $url, [], $this->settings, $returnType);
	}

  /**
   * Function enableWhoisPrivacy
   *
   * Enable WHOIS privacy.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\WhoisPrivacyResponse
   */
	public function enableWhoisPrivacy($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling enableWhoisPrivacy');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling WHOISApi.enableWhoisPrivacy, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/whois_privacy');

		$returnType = '\Pananames\Model\WhoisPrivacyResponse';

		return $this->sendRequest('PUT', $url, [], $this->settings, $returnType);
	}

  /**
   * Function getWhois
   *
   * Get WHOIS information.
   *
   * @param string $domain The name of the domain. (required)
   * @param bool $preview If WHOIS privacy protection enabled, to see public data, set value to true. (optional, default to false)
   * @return \Pananames\Model\WhoisResponse
   */
	public function getWhois($domain, $preview = 'false')
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getWhois');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling WHOISApi.getWhois, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/whois');
		if (!empty($preview)) {
			$data['preview'] = ObjectSerializer::toQueryValue($preview);
		}

		$returnType = '\Pananames\Model\WhoisResponse';

		return $this->sendRequest('GET', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function getWhoisPrivacy
   *
   * Get WHOIS privacy status.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\WhoisPrivacyResponse
   */
	public function getWhoisPrivacy($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getWhoisPrivacy');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling WHOISApi.getWhoisPrivacy, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/whois_privacy');

		$returnType = '\Pananames\Model\WhoisPrivacyResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function setWhois
   *
   * Set WHOIS information.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\WhoisInfoUpdateRequest $info  (required)
   * @return \Pananames\Model\WhoisResponse
   */
	public function setWhois($domain, $info)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling setWhois');
		}
		if (empty($info)) {
			throw new \InvalidArgumentException('Missing the required parameter $info when calling setWhois');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling WHOISApi.setWhois, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/whois');

		$returnType = '\Pananames\Model\WhoisResponse';

		return $this->sendRequest('PUT', $url, $info, $this->settings, $returnType);
	}

}
