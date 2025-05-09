<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when additional information about a responseReceived event is available from the network stack. Not every responseReceived event will have an additional responseReceivedExtraInfo for it, and responseReceivedExtraInfo may be fired before or after responseReceived.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResponseReceivedExtraInfoEvent implements \JsonSerializable
{
	/**
	 * Request identifier. Used to match this information to another responseReceived event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * A list of cookies which were not stored from the response along with the corresponding reasons for blocking. The cookies here may not be valid due to syntax errors, which are represented by the invalid cookie line string instead of a proper cookie.
	 *
	 * @var BlockedSetCookieWithReason[]
	 */
	public $blockedCookies;

	/**
	 * Raw response headers as they were received over the wire. Duplicate headers in the response are represented as a single key with their values concatentated using `\n` as the separator. See also `headersText` that contains verbatim text for HTTP/1.*.
	 *
	 * @var Headers
	 */
	public $headers;

	/**
	 * The IP address space of the resource. The address space can only be determined once the transport established the connection, so we can't send it in `requestWillBeSentExtraInfo`.
	 *
	 * @var string
	 */
	public $resourceIPAddressSpace;

	/**
	 * The status code of the response. This is useful in cases the request failed and no responseReceived event is triggered, which is the case for, e.g., CORS errors. This is also the correct status code for cached requests, where the status in responseReceived is a 200 and this will be 304.
	 *
	 * @var int
	 */
	public $statusCode;

	/**
	 * Raw response header text as it was received over the wire. The raw text may not always be available, such as in the case of HTTP/2 or QUIC.
	 *
	 * @var string|null
	 */
	public $headersText;

	/**
	 * The cookie partition key that will be used to store partitioned cookies set in this response. Only sent when partitioned cookies are enabled.
	 *
	 * @var CookiePartitionKey|null
	 */
	public $cookiePartitionKey;

	/**
	 * True if partitioned cookies are enabled, but the partition key is not serializable to string.
	 *
	 * @var bool|null
	 */
	public $cookiePartitionKeyOpaque;

	/**
	 * A list of cookies which should have been blocked by 3PCD but are exempted and stored from the response with the corresponding reason.
	 *
	 * @var ExemptedSetCookieWithReason[]|null
	 */
	public $exemptedCookies;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->blockedCookies)) {
			$instance->blockedCookies = [];
			foreach ($data->blockedCookies as $item) {
				$instance->blockedCookies[] = BlockedSetCookieWithReason::fromJson($item);
			}
		}
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		if (isset($data->resourceIPAddressSpace)) {
			$instance->resourceIPAddressSpace = (string)$data->resourceIPAddressSpace;
		}
		if (isset($data->statusCode)) {
			$instance->statusCode = (int)$data->statusCode;
		}
		if (isset($data->headersText)) {
			$instance->headersText = (string)$data->headersText;
		}
		if (isset($data->cookiePartitionKey)) {
			$instance->cookiePartitionKey = CookiePartitionKey::fromJson($data->cookiePartitionKey);
		}
		if (isset($data->cookiePartitionKeyOpaque)) {
			$instance->cookiePartitionKeyOpaque = (bool)$data->cookiePartitionKeyOpaque;
		}
		if (isset($data->exemptedCookies)) {
			$instance->exemptedCookies = [];
			foreach ($data->exemptedCookies as $item) {
				$instance->exemptedCookies[] = ExemptedSetCookieWithReason::fromJson($item);
			}
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->blockedCookies !== null) {
			$data->blockedCookies = [];
			foreach ($this->blockedCookies as $item) {
				$data->blockedCookies[] = $item->jsonSerialize();
			}
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		if ($this->resourceIPAddressSpace !== null) {
			$data->resourceIPAddressSpace = $this->resourceIPAddressSpace;
		}
		if ($this->statusCode !== null) {
			$data->statusCode = $this->statusCode;
		}
		if ($this->headersText !== null) {
			$data->headersText = $this->headersText;
		}
		if ($this->cookiePartitionKey !== null) {
			$data->cookiePartitionKey = $this->cookiePartitionKey->jsonSerialize();
		}
		if ($this->cookiePartitionKeyOpaque !== null) {
			$data->cookiePartitionKeyOpaque = $this->cookiePartitionKeyOpaque;
		}
		if ($this->exemptedCookies !== null) {
			$data->exemptedCookies = [];
			foreach ($this->exemptedCookies as $item) {
				$data->exemptedCookies[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
