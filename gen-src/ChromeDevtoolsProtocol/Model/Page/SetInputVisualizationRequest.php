<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setInputVisualization command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInputVisualizationRequest implements \JsonSerializable
{
	/**
	 * Whether to enable click visualization.
	 *
	 * @var bool|null
	 */
	public $clicks;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->clicks)) {
			$instance->clicks = (bool)$data->clicks;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->clicks !== null) {
			$data->clicks = $this->clicks;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetInputVisualizationRequestBuilder
	 */
	public static function builder(): SetInputVisualizationRequestBuilder
	{
		return new SetInputVisualizationRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
