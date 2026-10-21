<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.DirectUDPSocketLeftMulticastGroupEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectUDPSocketLeftMulticastGroupEvent implements \JsonSerializable
{
	/** @var string */
	public $identifier;

	/**
	 * Multicast group address.
	 *
	 * @var string
	 */
	public $IPAddress;

	/**
	 * Source address of a source-specific multicast (SSM) membership. Absent for any-source multicast (ASM) memberships.
	 *
	 * @var string|null
	 */
	public $sourceAddress;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->identifier)) {
			$instance->identifier = (string)$data->identifier;
		}
		if (isset($data->IPAddress)) {
			$instance->IPAddress = (string)$data->IPAddress;
		}
		if (isset($data->sourceAddress)) {
			$instance->sourceAddress = (string)$data->sourceAddress;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		if ($this->IPAddress !== null) {
			$data->IPAddress = $this->IPAddress;
		}
		if ($this->sourceAddress !== null) {
			$data->sourceAddress = $this->sourceAddress;
		}
		return $data;
	}
}
