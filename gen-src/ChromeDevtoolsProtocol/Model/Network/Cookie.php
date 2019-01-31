<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Cookie object
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Cookie implements \JsonSerializable
{
	/**
	 * Cookie name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Cookie value.
	 *
	 * @var string
	 */
	public $value;

	/**
	 * Cookie domain.
	 *
	 * @var string
	 */
	public $domain;

	/**
	 * Cookie path.
	 *
	 * @var string
	 */
	public $path;

	/**
	 * Cookie expiration date as the number of seconds since the UNIX epoch.
	 *
	 * @var int|float
	 */
	public $expires;

	/**
	 * Cookie size.
	 *
	 * @var int
	 */
	public $size;

	/**
	 * True if cookie is http-only.
	 *
	 * @var bool
	 */
	public $httpOnly;

	/**
	 * True if cookie is secure.
	 *
	 * @var bool
	 */
	public $secure;

	/**
	 * True in case of session cookie.
	 *
	 * @var bool
	 */
	public $session;

	/**
	 * Cookie SameSite type.
	 *
	 * @var string
	 */
	public $sameSite;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->domain)) {
			$instance->domain = (string)$data->domain;
		}
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		if (isset($data->expires)) {
			$instance->expires = $data->expires;
		}
		if (isset($data->size)) {
			$instance->size = (int)$data->size;
		}
		if (isset($data->httpOnly)) {
			$instance->httpOnly = (bool)$data->httpOnly;
		}
		if (isset($data->secure)) {
			$instance->secure = (bool)$data->secure;
		}
		if (isset($data->session)) {
			$instance->session = (bool)$data->session;
		}
		if (isset($data->sameSite)) {
			$instance->sameSite = (string)$data->sameSite;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->domain !== null) {
			$data->domain = $this->domain;
		}
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		if ($this->expires !== null) {
			$data->expires = $this->expires;
		}
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		if ($this->httpOnly !== null) {
			$data->httpOnly = $this->httpOnly;
		}
		if ($this->secure !== null) {
			$data->secure = $this->secure;
		}
		if ($this->session !== null) {
			$data->session = $this->session;
		}
		if ($this->sameSite !== null) {
			$data->sameSite = $this->sameSite;
		}
		return $data;
	}
}
