<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getSpellCheckCustomDictionary command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSpellCheckCustomDictionaryResponse implements \JsonSerializable
{
	/** @var string[] */
	public $words;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->words)) {
			$instance->words = [];
			foreach ($data->words as $item) {
				$instance->words[] = (string)$item;
			}
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->words !== null) {
			$data->words = [];
			foreach ($this->words as $item) {
				$data->words[] = $item;
			}
		}
		return $data;
	}
}
