<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Response to BluetoothEmulation.addService command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddServiceResponse implements \JsonSerializable
{
	/**
	 * An identifier that uniquely represents this service.
	 *
	 * @var string
	 */
	public $serviceId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->serviceId)) {
			$instance->serviceId = (string)$data->serviceId;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->serviceId !== null) {
			$data->serviceId = $this->serviceId;
		}
		return $data;
	}
}
