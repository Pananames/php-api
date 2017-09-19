<?php
/**
 * AccountApi
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

class AccountApi extends ApiClient
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
   * Function getBalance
   *
   * Get current balance.
   *
   * @return \Pananames\Model\BalanceResponse
   */
	public function getBalance()
	{
		$url = '/account/balance';

		$returnType = '\Pananames\Model\BalanceResponse';

		return $this->sendRequest('GET', $url, [], $this->settings, $returnType);
	}

}
