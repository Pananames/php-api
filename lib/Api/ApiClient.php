<?php
/**
 * ApiClient
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Pananames\Api\ObjectSerializer;

abstract class ApiClient
{
	const URL = 'http://api-staging.pananames.com/merchant/v2';
	const HEADER_ACCEPT = 'application/json';
	const HEADER_CONTENT_TYPE = 'application/json';

	public function sendRequest($method, $url, $data, $settings, $returnType = null)
	{
		$baseUrl = empty($settings['url']) ? self::URL : $settings['url'];

		$query['headers'] = [
			'Signature' => $settings['signature'],
			'Accept' => self::HEADER_ACCEPT,
			'Content-type' => self::HEADER_CONTENT_TYPE
		];

		$query['body'] = empty($data) ? '' : json_encode(ObjectSerializer::sanitizeForSerialization($data));

		$client = new Client();

		try {
			$response = $client->request($method, $baseUrl . $url, $query);

			$body = $response->getBody()->getContents();
			$content = empty($body) ? [] : json_decode($body);
			$httpCode = $response->getStatusCode();

		} catch (RequestException $e) {
			$returnType = '\Pananames\Model\ErrorResponse';
			$content = $e->getResponse()->getBody();
			$httpCode = $e->getCode();
		}

		$responseObj = ObjectSerializer::deserialize($content, $returnType);
		$responseObj->setHttpCode($httpCode);

		if ($responseObj->hasErrors()) {
			$responseObj->setErrors($content->getContents());
		}

		return $responseObj;
	}
}
