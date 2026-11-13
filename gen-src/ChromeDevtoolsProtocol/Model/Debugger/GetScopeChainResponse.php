<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.getScopeChain command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetScopeChainResponse implements \JsonSerializable
{
	/**
	 * Scope chain for the call frame.
	 *
	 * @var Scope[]
	 */
	public $scopeChain;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scopeChain)) {
			$instance->scopeChain = [];
			foreach ($data->scopeChain as $item) {
				$instance->scopeChain[] = Scope::fromJson($item);
			}
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scopeChain !== null) {
			$data->scopeChain = [];
			foreach ($this->scopeChain as $item) {
				$data->scopeChain[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
