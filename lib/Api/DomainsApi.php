<?php
/**
 * DomainsApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class DomainsApi extends ApiClient
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
   * Function bulkCheck
   *
   * Bulk check the domains availability.
   *
   * @param string[] $domains Array of domains. (optional)
   * @return \Pananames\Model\BulkCheckResponse
   */
	public function bulkCheck($domains = null)
	{
		if (!empty($domains) && count($domains) > 500) {
			throw new \InvalidArgumentException('Invalid value for "$domains" when calling DomainsApi.bulkCheck, number of items must be less than or equal to 500.');
		}
		if (!empty($domains) && count($domains) < 1) {
			throw new \InvalidArgumentException('Invalid value for "$domains" when calling DomainsApi.bulkCheck, number of items must be greater than or equal to 1.');
		}
		$url = '/domains/bulk_check';
		if (!empty($domains)) {
			$data['domains'] = ObjectSerializer::toQueryValue($domains);
		}

		$returnType = '\Pananames\Model\BulkCheckResponse';

		return $this->sendRequest('GET', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function check
   *
   * Check the domain availability.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\CheckResponse
   */
	public function check($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling check');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.check, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/check');

		$returnType = '\Pananames\Model\CheckResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function delete
   *
   * Delete domain.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function delete($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling delete');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.delete, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}');

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('DELETE', $url, [], $this->settings, $returnType);
	}

  /**
   * Function disableAutoRenew
   *
   * Disable auto renew.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\AutoRenewResponse
   */
	public function disableAutoRenew($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling disableAutoRenew');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.disableAutoRenew, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/auto_renew');

		$returnType = '\Pananames\Model\AutoRenewResponse';

		return $this->sendRequest('DELETE', $url, [], $this->settings, $returnType);
	}

  /**
   * Function enableAutoRenew
   *
   * Enable auto renew.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\AutoRenewResponse
   */
	public function enableAutoRenew($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling enableAutoRenew');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.enableAutoRenew, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/auto_renew');

		$returnType = '\Pananames\Model\AutoRenewResponse';

		return $this->sendRequest('PUT', $url, [], $this->settings, $returnType);
	}

  /**
   * Function getClaim
   *
   * Get claim information.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\ClaimResponse
   */
	public function getClaim($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getClaim');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.getClaim, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/claim');

		$returnType = '\Pananames\Model\ClaimResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function getInfo
   *
   * Get information about the domain.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\DomainInfoResponse
   */
	public function getInfo($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getInfo');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.getInfo, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}');

		$returnType = '\Pananames\Model\DomainInfoResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function getList
   *
   * Get paged list of your domains.
   *
   * @param int $current_page Current page number (default: 1). (optional, default to 1)
   * @param int $per_page Count of items per page (default: 30, maximum: 100). (optional, default to 30)
   * @param string $lock_status Domain lock status. (optional)
   * @param string $status Domain status. (optional)
   * @param string $domain_like Filter for domain name. (optional)
   * @return \Pananames\Model\DomainsListResponse
   */
	public function getList($current_page = '1', $per_page = '30', $lock_status = null, $status = null, $domain_like = null)
	{
		$url = '/domains';
		if (!empty($current_page)) {
			$data['current_page'] = ObjectSerializer::toQueryValue($current_page);
		}
		if (!empty($per_page)) {
			$data['per_page'] = ObjectSerializer::toQueryValue($per_page);
		}
		if (!empty($lock_status)) {
			$data['lock_status'] = ObjectSerializer::toQueryValue($lock_status);
		}
		if (!empty($status)) {
			$data['status'] = ObjectSerializer::toQueryValue($status);
		}
		if (!empty($domain_like)) {
			$data['domain_like'] = ObjectSerializer::toQueryValue($domain_like);
		}

		$returnType = '\Pananames\Model\DomainsListResponse';

		return $this->sendRequest('GET', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function getStatusCodes
   *
   * Get status codes.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\StatusCodesListResponse
   */
	public function getStatusCodes($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getStatusCodes');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.getStatusCodes, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/status_codes');

		$returnType = '\Pananames\Model\StatusCodesListResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function redeem
   *
   * Restore domain.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\RenewResponse
   */
	public function redeem($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling redeem');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.redeem, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/redeem');

		$returnType = '\Pananames\Model\RenewResponse';

		return $this->sendRequest('PUT', $url, [], $this->settings, $returnType);
	}

  /**
   * Function register
   *
   * Register a domain name.
   *
   * @param \Pananames\Model\RegistrationRequest $data  (required)
   * @return \Pananames\Model\DomainInfoResponse
   */
	public function register($data)
	{
		if (empty($data)) {
			throw new \InvalidArgumentException('Missing the required parameter $data when calling register');
		}
		$url = '/domains';

		$returnType = '\Pananames\Model\DomainInfoResponse';

		return $this->sendRequest('POST', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function renew
   *
   * Renew tne domain.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\RenewRequest $data  (required)
   * @return \Pananames\Model\RenewResponse
   */
	public function renew($domain, $data)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling renew');
		}
		if (empty($data)) {
			throw new \InvalidArgumentException('Missing the required parameter $data when calling renew');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.renew, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/renew');

		$returnType = '\Pananames\Model\RenewResponse';

		return $this->sendRequest('PUT', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function resendVerificationEmail
   *
   * Resend email.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function resendVerificationEmail($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling resendVerificationEmail');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling DomainsApi.resendVerificationEmail, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/resend');

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('PUT', $url, [], $this->settings, $returnType);
	}

}
