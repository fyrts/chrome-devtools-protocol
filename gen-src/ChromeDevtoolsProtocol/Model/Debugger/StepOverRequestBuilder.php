<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StepOverRequestBuilder
{
	private $skipList;
	private $enterRanges;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StepOverRequest
	{
		$instance = new StepOverRequest();
		$instance->skipList = $this->skipList;
		$instance->enterRanges = $this->enterRanges;
		return $instance;
	}


	/**
	 * @param LocationRange[]|null $skipList
	 *
	 * @return self
	 */
	public function setSkipList($skipList): self
	{
		$this->skipList = $skipList;
		return $this;
	}


	/**
	 * @param LocationRange[]|null $enterRanges
	 *
	 * @return self
	 */
	public function setEnterRanges($enterRanges): self
	{
		$this->enterRanges = $enterRanges;
		return $this;
	}
}
