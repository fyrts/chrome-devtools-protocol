<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReloadRequestBuilder
{
	private $ignoreCache;
	private $scriptToEvaluateOnLoad;
	private $loaderId;
	private $checkForRepost;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReloadRequest
	{
		$instance = new ReloadRequest();
		$instance->ignoreCache = $this->ignoreCache;
		$instance->scriptToEvaluateOnLoad = $this->scriptToEvaluateOnLoad;
		$instance->loaderId = $this->loaderId;
		$instance->checkForRepost = $this->checkForRepost;
		return $instance;
	}


	/**
	 * @param bool|null $ignoreCache
	 *
	 * @return self
	 */
	public function setIgnoreCache($ignoreCache): self
	{
		$this->ignoreCache = $ignoreCache;
		return $this;
	}


	/**
	 * @param string|null $scriptToEvaluateOnLoad
	 *
	 * @return self
	 */
	public function setScriptToEvaluateOnLoad($scriptToEvaluateOnLoad): self
	{
		$this->scriptToEvaluateOnLoad = $scriptToEvaluateOnLoad;
		return $this;
	}


	/**
	 * @param string $loaderId
	 *
	 * @return self
	 */
	public function setLoaderId($loaderId): self
	{
		$this->loaderId = $loaderId;
		return $this;
	}


	/**
	 * @param bool|null $checkForRepost
	 *
	 * @return self
	 */
	public function setCheckForRepost($checkForRepost): self
	{
		$this->checkForRepost = $checkForRepost;
		return $this;
	}
}
