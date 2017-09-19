<?php
/**
 * NameServersApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class NameServersApi extends ApiClient
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
   * Function createChildDns
   *
   * Create new child name server.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\ChildNameServer $child_name_servers  (required)
   * @return \Pananames\Model\ChildNameServerResponse
   */
	public function createChildDns($domain, $child_name_servers)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling createChildDns');
		}
		if (empty($child_name_servers)) {
			throw new \InvalidArgumentException('Missing the required parameter $child_name_servers when calling createChildDns');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.createChildDns, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/child_name_servers');

		$returnType = '\Pananames\Model\ChildNameServerResponse';

		return $this->sendRequest('POST', $url, $child_name_servers, $this->settings, $returnType);
	}

  /**
   * Function createDnsRecord
   *
   * Create new name server record.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\NameServerRecord $dns_records  (required)
   * @return \Pananames\Model\NameServerRecordResponse
   */
	public function createDnsRecord($domain, $dns_records)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling createDnsRecord');
		}
		if (empty($dns_records)) {
			throw new \InvalidArgumentException('Missing the required parameter $dns_records when calling createDnsRecord');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.createDnsRecord, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/name_server_records');

		$returnType = '\Pananames\Model\NameServerRecordResponse';

		return $this->sendRequest('POST', $url, $dns_records, $this->settings, $returnType);
	}

  /**
   * Function deleteChildDns
   *
   * Delete child name server.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\ChildNameServerDeleteRequest $child_dns  (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function deleteChildDns($domain, $child_dns)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling deleteChildDns');
		}
		if (empty($child_dns)) {
			throw new \InvalidArgumentException('Missing the required parameter $child_dns when calling deleteChildDns');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.deleteChildDns, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/child_name_servers');

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('DELETE', $url, $child_dns, $this->settings, $returnType);
	}

  /**
   * Function deleteDnsRecord
   *
   * Delete name server record.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\NameServerRecordDeleteRequest $dns_records  (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function deleteDnsRecord($domain, $dns_records)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling deleteDnsRecord');
		}
		if (empty($dns_records)) {
			throw new \InvalidArgumentException('Missing the required parameter $dns_records when calling deleteDnsRecord');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.deleteDnsRecord, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/name_server_records');

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('DELETE', $url, $dns_records, $this->settings, $returnType);
	}

  /**
   * Function getChildDns
   *
   * Get child name servers.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\ChildNameServersListResponse
   */
	public function getChildDns($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getChildDns');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.getChildDns, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/child_name_servers');

		$returnType = '\Pananames\Model\ChildNameServersListResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function getDnsRecords
   *
   * Get name server records.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\NameServerRecordsListResponse
   */
	public function getDnsRecords($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getDnsRecords');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.getDnsRecords, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/name_server_records');

		$returnType = '\Pananames\Model\NameServerRecordsListResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function getDnsServers
   *
   * Get name servers.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\NameServersResponse
   */
	public function getDnsServers($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling getDnsServers');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.getDnsServers, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/name_servers');

		$returnType = '\Pananames\Model\NameServersResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

  /**
   * Function setDnsServers
   *
   * Set name servers.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\NameServersRequest $name_servers  (required)
   * @return \Pananames\Model\NameServersResponse
   */
	public function setDnsServers($domain, $name_servers)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling setDnsServers');
		}
		if (empty($name_servers)) {
			throw new \InvalidArgumentException('Missing the required parameter $name_servers when calling setDnsServers');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.setDnsServers, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/name_servers');

		$returnType = '\Pananames\Model\NameServersResponse';

		return $this->sendRequest('PUT', $url, $name_servers, $this->settings, $returnType);
	}

  /**
   * Function updateChildDns
   *
   * Update existing child name server.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\ChildNameServer $child_dns  (required)
   * @return \Pananames\Model\ChildNameServerResponse
   */
	public function updateChildDns($domain, $child_dns)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling updateChildDns');
		}
		if (empty($child_dns)) {
			throw new \InvalidArgumentException('Missing the required parameter $child_dns when calling updateChildDns');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.updateChildDns, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/child_name_servers');

		$returnType = '\Pananames\Model\ChildNameServerResponse';

		return $this->sendRequest('PUT', $url, $child_dns, $this->settings, $returnType);
	}

  /**
   * Function updateDnsRecord
   *
   * Update existing name server record.
   *
   * @param string $domain The name of the domain. (required)
   * @param \Pananames\Model\NameServerRecord $dns_record  (required)
   * @return \Pananames\Model\NameServerRecordResponse
   */
	public function updateDnsRecord($domain, $dns_record)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling updateDnsRecord');
		}
		if (empty($dns_record)) {
			throw new \InvalidArgumentException('Missing the required parameter $dns_record when calling updateDnsRecord');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling NameServersApi.updateDnsRecord, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/name_server_records');

		$returnType = '\Pananames\Model\NameServerRecordResponse';

		return $this->sendRequest('PUT', $url, $dns_record, $this->settings, $returnType);
	}

}
