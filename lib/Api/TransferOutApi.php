<?php
/**
 * TransferOutApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class TransferOutApi extends ApiClient
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
   * Function cancelTransferOut
   *
   * Cancel transfer out.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function cancelTransferOut($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling cancelTransferOut');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling TransferOutApi.cancelTransferOut, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/transfer_out');

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('DELETE', $url, [], $this->settings, $returnType);
	}

  /**
   * Function initTransferOut
   *
   * Init transfer out.
   *
   * @param string $domain The name of the domain. (required)
   * @return \Pananames\Model\EmptyResponse
   */
	public function initTransferOut($domain)
	{
		if (empty($domain)) {
			throw new \InvalidArgumentException('Missing the required parameter $domain when calling initTransferOut');
		}
		if (strlen($domain) < 3) {
			throw new \InvalidArgumentException('Invalid length for "$domain" when calling TransferOutApi.initTransferOut, must be bigger than or equal to 3.');
		}
		$url = str_replace('{'.'domain'.'}', ObjectSerializer::toPathValue($domain), '/domains/{domain}/transfer_out');

		$returnType = '\Pananames\Model\EmptyResponse';

		return $this->sendRequest('PUT', $url, [], $this->settings, $returnType);
	}

}
