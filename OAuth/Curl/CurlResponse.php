<?php

namespace Uneak\OAuthClientBundle\OAuth\Curl;

class CurlResponse {

	protected $curlInfo;
	protected $body;
	protected $header;


	public function __construct(array $curlInfo, array $header, $body) {
		$this->curlInfo = $curlInfo;
		$this->header = $header;
		$this->body = $body;
	}

	/**
	 * @return mixed
	 */
	public function getCurlInfo($opt) {
		return $this->curlInfo[$opt];
	}

	public function getHttpCode() {
		return $this->getCurlInfo("http_code");
	}

	public function getContentType() {
		return $this->getCurlInfo("content_type");
	}


	public function getHeader() {
		return $this->header;
	}

	public function getBody() {
		return $this->body;
	}
}
