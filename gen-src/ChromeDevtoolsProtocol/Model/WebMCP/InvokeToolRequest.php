<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Request for WebMCP.invokeTool command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InvokeToolRequest implements \JsonSerializable
{
	/**
	 * Frame in which to invoke the tool.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Identifier of the tool to invoke, as reported in `Tool.toolId`. Invokes exactly that tool, and fails if it is no longer registered, even if a different tool has since been registered under the same name.
	 *
	 * @var string
	 */
	public $toolId;

	/**
	 * Name of the tool to invoke. Deprecated: invokes whichever tool is registered under this name when the command is handled, which may not be the tool the client observed if the page has since replaced it. Use `toolId` instead.
	 *
	 * @var string|null
	 */
	public $toolName;

	/**
	 * Input parameters for the tool, matching the tool's inputSchema.
	 *
	 * @var object
	 */
	public $input;


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
		if (isset($data->toolId)) {
			$instance->toolId = (string)$data->toolId;
		}
		if (isset($data->toolName)) {
			$instance->toolName = (string)$data->toolName;
		}
		if (isset($data->input)) {
			$instance->input = $data->input;
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
		if ($this->toolId !== null) {
			$data->toolId = $this->toolId;
		}
		if ($this->toolName !== null) {
			$data->toolName = $this->toolName;
		}
		if ($this->input !== null) {
			$data->input = $this->input;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return InvokeToolRequestBuilder
	 */
	public static function builder(): InvokeToolRequestBuilder
	{
		return new InvokeToolRequestBuilder();
	}
}
