<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInputVisualizationRequestBuilder
{
	private $clicks;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetInputVisualizationRequest
	{
		$instance = new SetInputVisualizationRequest();
		$instance->clicks = $this->clicks;
		return $instance;
	}


	/**
	 * @param bool|null $clicks
	 *
	 * @return self
	 */
	public function setClicks($clicks): self
	{
		$this->clicks = $clicks;
		return $this;
	}
}
