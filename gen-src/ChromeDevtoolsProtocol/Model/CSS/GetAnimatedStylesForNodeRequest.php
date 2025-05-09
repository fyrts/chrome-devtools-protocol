<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.getAnimatedStylesForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAnimatedStylesForNodeRequest implements \JsonSerializable
{
	/** @var int */
	public $nodeId;


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
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAnimatedStylesForNodeRequestBuilder
	 */
	public static function builder(): GetAnimatedStylesForNodeRequestBuilder
	{
		return new GetAnimatedStylesForNodeRequestBuilder();
	}
}
