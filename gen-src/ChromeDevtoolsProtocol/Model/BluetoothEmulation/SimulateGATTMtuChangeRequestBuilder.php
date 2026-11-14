<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateGATTMtuChangeRequestBuilder
{
	private $address;
	private $mtu;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SimulateGATTMtuChangeRequest
	{
		$instance = new SimulateGATTMtuChangeRequest();
		if ($this->address === null) {
			throw new BuilderException('Property [address] is required.');
		}
		$instance->address = $this->address;
		if ($this->mtu === null) {
			throw new BuilderException('Property [mtu] is required.');
		}
		$instance->mtu = $this->mtu;
		return $instance;
	}


	/**
	 * @param string $address
	 *
	 * @return self
	 */
	public function setAddress($address): self
	{
		$this->address = $address;
		return $this;
	}


	/**
	 * @param int $mtu
	 *
	 * @return self
	 */
	public function setMtu($mtu): self
	{
		$this->mtu = $mtu;
		return $this;
	}
}
