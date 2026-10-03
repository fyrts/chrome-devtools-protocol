<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ForcePositionTryOptionRequestBuilder
{
	private $nodeId;
	private $index;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ForcePositionTryOptionRequest
	{
		$instance = new ForcePositionTryOptionRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		$instance->index = $this->index;
		return $instance;
	}


	/**
	 * @param int $nodeId
	 *
	 * @return self
	 */
	public function setNodeId($nodeId): self
	{
		$this->nodeId = $nodeId;
		return $this;
	}


	/**
	 * @param int|null $index
	 *
	 * @return self
	 */
	public function setIndex($index): self
	{
		$this->index = $index;
		return $this;
	}
}
