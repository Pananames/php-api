<?php
/**
 * OtherApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class OtherApi extends ApiClient
{
	private $settings;

	public function __construct($signature, $url = null)
	{
		if (empty($signature)) {
			throw new \InvalidArgumentException('Signature was not provided or was invalid.');
		}

		$this->settings['url'] = $url;
		$this->settings['signature'] = $signature;
	}

  /**
   * Function getEmails
   *
   * Get account related emails.
   *
   * @param int $current_page Current page number (default: 1). (optional, default to 1)
   * @param int $per_page Count of items per page (default: 30, maximum: 100). (optional, default to 30)
   * @param string $email_like Filter for email. (optional)
   * @param string $status Domain status. (optional)
   * @param string $email_status Email status. (optional)
   * @return \Pananames\Model\EmailsListResponse
   */
	public function getEmails($current_page = '1', $per_page = '30', $email_like = null, $status = null, $email_status = null)
	{
		$url = '/emails';
		if (!empty($current_page)) {
			$data['current_page'] = ObjectSerializer::toQueryValue($current_page);
		}
		if (!empty($per_page)) {
			$data['per_page'] = ObjectSerializer::toQueryValue($per_page);
		}
		if (!empty($email_like)) {
			$data['email_like'] = ObjectSerializer::toQueryValue($email_like);
		}
		if (!empty($status)) {
			$data['status'] = ObjectSerializer::toQueryValue($status);
		}
		if (!empty($email_status)) {
			$data['email_status'] = ObjectSerializer::toQueryValue($email_status);
		}

		$returnType = '\Pananames\Model\EmailsListResponse';

		return $this->sendRequest('GET', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function getTlds
   *
   * Get full list of available TLDs.
   *
   * @return \Pananames\Model\TldsListResponse
   */
	public function getTlds()
	{
		$url = '/tlds';

		$returnType = '\Pananames\Model\TldsListResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

}
