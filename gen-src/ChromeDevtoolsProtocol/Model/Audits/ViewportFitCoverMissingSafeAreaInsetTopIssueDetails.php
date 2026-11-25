<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for issues about a page that declares viewport-fit=cover, receives a non-zero top safe-area inset (e.g. a device cutout or system status bar), but does not consume env(safe-area-inset-top) anywhere in its CSS while having DOM content likely to be occluded by that inset.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ViewportFitCoverMissingSafeAreaInsetTopIssueDetails implements \JsonSerializable
{
	/**
	 * The frame that triggered the issue.
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
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
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
		return $data;
	}
}
