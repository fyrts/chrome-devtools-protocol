<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.simulateGATTMtuChange command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateGATTMtuChangeRequest implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var int */
	public $mtu;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->address)) {
			$instance->address = (string)$data->address;
		}
		if (isset($data->mtu)) {
			$instance->mtu = (int)$data->mtu;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->address !== null) {
			$data->address = $this->address;
		}
		if ($this->mtu !== null) {
			$data->mtu = $this->mtu;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SimulateGATTMtuChangeRequestBuilder
	 */
	public static function builder(): SimulateGATTMtuChangeRequestBuilder
	{
		return new SimulateGATTMtuChangeRequestBuilder();
	}
}
