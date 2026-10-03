<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.forcePositionTryOption command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ForcePositionTryOptionRequest implements \JsonSerializable
{
	/**
	 * The element id for which to force the position-try option.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * The 1-based index of the position-try fallback option, 0 for base position (no fallback), or omitted to clear the forced state.
	 *
	 * @var int|null
	 */
	public $index;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->index)) {
			$instance->index = (int)$data->index;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->index !== null) {
			$data->index = $this->index;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ForcePositionTryOptionRequestBuilder
	 */
	public static function builder(): ForcePositionTryOptionRequestBuilder
	{
		return new ForcePositionTryOptionRequestBuilder();
	}
}
