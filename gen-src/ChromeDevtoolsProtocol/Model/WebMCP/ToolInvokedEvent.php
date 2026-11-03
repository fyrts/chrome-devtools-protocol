<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Event fired when a tool invocation starts.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ToolInvokedEvent implements \JsonSerializable
{
	/**
	 * Frame id
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Invocation identifier.
	 *
	 * @var string
	 */
	public $invocationId;

	/**
	 * The input parameters used for the invocation.
	 *
	 * @var string
	 */
	public $input;

	/**
	 * Name of the tool to invoke. Missing if the tool was invoked by its identifier, but could not be found (e.g., it was already unregistered), so its name could not be recovered.
	 *
	 * @var string|null
	 */
	public $toolName;

	/**
	 * Identifier of the tool to invoke. Missing if the tool was invoked by name, but could not be found, so its identifier could not be recovered.
	 *
	 * @var string
	 */
	public $toolId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->invocationId)) {
			$instance->invocationId = (string)$data->invocationId;
		}
		if (isset($data->input)) {
			$instance->input = (string)$data->input;
		}
		if (isset($data->toolName)) {
			$instance->toolName = (string)$data->toolName;
		}
		if (isset($data->toolId)) {
			$instance->toolId = (string)$data->toolId;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->invocationId !== null) {
			$data->invocationId = $this->invocationId;
		}
		if ($this->input !== null) {
			$data->input = $this->input;
		}
		if ($this->toolName !== null) {
			$data->toolName = $this->toolName;
		}
		if ($this->toolId !== null) {
			$data->toolId = $this->toolId;
		}
		return $data;
	}
}
