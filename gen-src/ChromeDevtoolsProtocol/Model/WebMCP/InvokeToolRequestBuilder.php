<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InvokeToolRequestBuilder
{
	private $frameId;
	private $toolId;
	private $toolName;
	private $input;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): InvokeToolRequest
	{
		$instance = new InvokeToolRequest();
		if ($this->frameId === null) {
			throw new BuilderException('Property [frameId] is required.');
		}
		$instance->frameId = $this->frameId;
		$instance->toolId = $this->toolId;
		$instance->toolName = $this->toolName;
		if ($this->input === null) {
			throw new BuilderException('Property [input] is required.');
		}
		$instance->input = $this->input;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}


	/**
	 * @param string $toolId
	 *
	 * @return self
	 */
	public function setToolId($toolId): self
	{
		$this->toolId = $toolId;
		return $this;
	}


	/**
	 * @param string|null $toolName
	 *
	 * @return self
	 */
	public function setToolName($toolName): self
	{
		$this->toolName = $toolName;
		return $this;
	}


	/**
	 * @param object $input
	 *
	 * @return self
	 */
	public function setInput($input): self
	{
		$this->input = $input;
		return $this;
	}
}
