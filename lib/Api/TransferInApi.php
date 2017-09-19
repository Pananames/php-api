<?php
/**
 * TransferInApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class TransferInApi extends ApiClient
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
   * Function cancel
   *
   * Cancel transfers in.
   *
   * @param \Pananames\Model\TransferInCancelRequest $domain  (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function cancel($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling cancel');
		}
		$url = '/transfers_in';

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('DELETE', $url, $domain, $this->settings, $returnType);
	}

  /**
   * Function getTransferList
   *
   * Get active transfers in.
   *
   * @param int $current_page Current page number (default: 1). (optional, default to 1)
   * @param int $per_page Count of items per page (default: 30, maximum: 100). (optional, default to 30)
   * @param string $domain_like  (optional)
   * @param string $status Transfer status. (optional)
   * @return \Pananames\Model\TransfersInListResponse
   */
	public function getTransferList($current_page = '1', $per_page = '30', $domain_like = null, $status = null)
	{
		$url = '/transfers_in';
		if (!empty($current_page)) {
			$data['current_page'] = ObjectSerializer::toQueryValue($current_page);
		}
		if (!empty($per_page)) {
			$data['per_page'] = ObjectSerializer::toQueryValue($per_page);
		}
		if (!empty($domain_like)) {
			$data['domain_like'] = ObjectSerializer::toQueryValue($domain_like);
		}
		if (!empty($status)) {
			$data['status'] = ObjectSerializer::toQueryValue($status);
		}

		$returnType = '\Pananames\Model\TransfersInListResponse';

		return $this->sendRequest('GET', $url, $data, $this->settings, $returnType);
	}

  /**
   * Function initTransferIn
   *
   * Init transfers in.
   *
   * @param \Pananames\Model\TransferInRequest $data  (required)
   * @return \Pananames\Model\TransferInResponse
   */
	public function initTransferIn($data)
	{
		if (empty($data)) {
			throw new \InvalidArgumentException('Missing the required parameter $data when calling initTransferIn');
		}
		$url = '/transfers_in';

		$returnType = '\Pananames\Model\TransferInResponse';

		return $this->sendRequest('POST', $url, $data, $this->settings, $returnType);
	}

}
