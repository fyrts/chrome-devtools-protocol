<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.getScopeChain command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetScopeChainRequest implements \JsonSerializable
{
	/**
	 * Call frame identifier to get the scope chain for.
	 *
	 * @var string
	 */
	public $callFrameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrameId)) {
			$instance->callFrameId = (string)$data->callFrameId;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callFrameId !== null) {
			$data->callFrameId = $this->callFrameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetScopeChainRequestBuilder
	 */
	public static function builder(): GetScopeChainRequestBuilder
	{
		return new GetScopeChainRequestBuilder();
	}
}
