<?php
/**
 * RedirectApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class RedirectApi extends ApiClient
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
   * Function disable
   *
   * Disable redirect.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function disable($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling disable');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling RedirectApi.disable, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/redirect');

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('DELETE', $url, [], $this->settings, $returnType);
	}

  /**
   * Function enable
   *
   * Enable redirect.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\DomainRedirectRequest $data  (required)
   * @return \Pananames\Model\DomainRedirectResponse
   */
	public function enable($domain, $data)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling enable');
		}
		if (empty($data)) {
			throw new \InvalidArgumentException('Missing the required parameter $data when calling enable');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling RedirectApi.enable, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/redirect');

		$returnType = '\Pananames\Model\DomainRedirectResponse';

		return $this->sendRequest('PUT', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function getRedirect
   *
   * Get current redirect URL.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\DomainRedirectResponse
   */
	public function getRedirect($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getRedirect');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling RedirectApi.getRedirect, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/redirect');

		$returnType = '\Pananames\Model\DomainRedirectResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

}
