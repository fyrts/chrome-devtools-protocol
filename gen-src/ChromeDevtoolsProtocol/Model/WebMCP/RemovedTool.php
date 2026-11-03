<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Definition of a tool that was removed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemovedTool implements \JsonSerializable
{
	/**
	 * Identifier of the removed tool.
	 *
	 * @var string
	 */
	public $toolId;

	/**
	 * Tool name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Frame identifier associated with the tool registration.
	 *
	 * @var string
	 */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->toolId)) {
			$instance->toolId = (string)$data->toolId;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->toolId !== null) {
			$data->toolId = $this->toolId;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
