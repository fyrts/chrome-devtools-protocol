<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Bundles the parameters for shared storage access events whose presence/absence can vary according to SharedStorageAccessType.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStorageAccessParams implements \JsonSerializable
{
	/**
	 * Spec of the module script URL. Present only for SharedStorageAccessMethods: addModule and createWorklet.
	 *
	 * @var string|null
	 */
	public $scriptSourceUrl;

	/**
	 * String denoting "context-origin", "script-origin", or a custom origin to be used as the worklet's data origin. Present only for SharedStorageAccessMethod: createWorklet.
	 *
	 * @var string|null
	 */
	public $dataOrigin;

	/**
	 * Name of the registered operation to be run. Present only for SharedStorageAccessMethods: run and selectURL.
	 *
	 * @var string|null
	 */
	public $operationName;

	/**
	 * ID of the operation call. Present only for SharedStorageAccessMethods: run and selectURL.
	 *
	 * @var string|null
	 */
	public $operationId;

	/**
	 * Whether or not to keep the worket alive for future run or selectURL calls. Present only for SharedStorageAccessMethods: run and selectURL.
	 *
	 * @var bool|null
	 */
	public $keepAlive;

	/**
	 * Configures the private aggregation options. Present only for SharedStorageAccessMethods: run and selectURL.
	 *
	 * @var SharedStoragePrivateAggregationConfig|null
	 */
	public $privateAggregationConfig;

	/**
	 * The operation's serialized data in bytes (converted to a string). Present only for SharedStorageAccessMethods: run and selectURL. TODO(crbug.com/401011862): Consider updating this parameter to binary.
	 *
	 * @var string|null
	 */
	public $serializedData;

	/**
	 * Array of candidate URLs' specs, along with any associated metadata. Present only for SharedStorageAccessMethod: selectURL.
	 *
	 * @var SharedStorageUrlWithMetadata[]|null
	 */
	public $urlsWithMetadata;

	/**
	 * Spec of the URN:UUID generated for a selectURL call. Present only for SharedStorageAccessMethod: selectURL.
	 *
	 * @var string|null
	 */
	public $urnUuid;

	/**
	 * Key for a specific entry in an origin's shared storage. Present only for SharedStorageAccessMethods: set, append, delete, and get.
	 *
	 * @var string|null
	 */
	public $key;

	/**
	 * Value for a specific entry in an origin's shared storage. Present only for SharedStorageAccessMethods: set and append.
	 *
	 * @var string|null
	 */
	public $value;

	/**
	 * Whether or not to set an entry for a key if that key is already present. Present only for SharedStorageAccessMethod: set.
	 *
	 * @var bool|null
	 */
	public $ignoreIfPresent;

	/**
	 * A number denoting the (0-based) order of the worklet's creation relative to all other shared storage worklets created by documents using the current storage partition. Present only for SharedStorageAccessMethods: addModule, createWorklet.
	 *
	 * @var int|null
	 */
	public $workletOrdinal;

	/**
	 * Hex representation of the DevTools token used as the TargetID for the associated shared storage worklet. Present only for SharedStorageAccessMethods: addModule, createWorklet, run, selectURL, and any other SharedStorageAccessMethod when the SharedStorageAccessScope is sharedStorageWorklet.
	 *
	 * @var string
	 */
	public $workletTargetId;

	/**
	 * Name of the lock to be acquired, if present. Optionally present only for SharedStorageAccessMethods: batchUpdate, set, append, delete, and clear.
	 *
	 * @var string|null
	 */
	public $withLock;

	/**
	 * If the method has been called as part of a batchUpdate, then this number identifies the batch to which it belongs. Optionally present only for SharedStorageAccessMethods: batchUpdate (required), set, append, delete, and clear.
	 *
	 * @var string|null
	 */
	public $batchUpdateId;

	/**
	 * Number of modifier methods sent in batch. Present only for SharedStorageAccessMethod: batchUpdate.
	 *
	 * @var int|null
	 */
	public $batchSize;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptSourceUrl)) {
			$instance->scriptSourceUrl = (string)$data->scriptSourceUrl;
		}
		if (isset($data->dataOrigin)) {
			$instance->dataOrigin = (string)$data->dataOrigin;
		}
		if (isset($data->operationName)) {
			$instance->operationName = (string)$data->operationName;
		}
		if (isset($data->operationId)) {
			$instance->operationId = (string)$data->operationId;
		}
		if (isset($data->keepAlive)) {
			$instance->keepAlive = (bool)$data->keepAlive;
		}
		if (isset($data->privateAggregationConfig)) {
			$instance->privateAggregationConfig = SharedStoragePrivateAggregationConfig::fromJson($data->privateAggregationConfig);
		}
		if (isset($data->serializedData)) {
			$instance->serializedData = (string)$data->serializedData;
		}
		if (isset($data->urlsWithMetadata)) {
			$instance->urlsWithMetadata = [];
			foreach ($data->urlsWithMetadata as $item) {
				$instance->urlsWithMetadata[] = SharedStorageUrlWithMetadata::fromJson($item);
			}
		}
		if (isset($data->urnUuid)) {
			$instance->urnUuid = (string)$data->urnUuid;
		}
		if (isset($data->key)) {
			$instance->key = (string)$data->key;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->ignoreIfPresent)) {
			$instance->ignoreIfPresent = (bool)$data->ignoreIfPresent;
		}
		if (isset($data->workletOrdinal)) {
			$instance->workletOrdinal = (int)$data->workletOrdinal;
		}
		if (isset($data->workletTargetId)) {
			$instance->workletTargetId = (string)$data->workletTargetId;
		}
		if (isset($data->withLock)) {
			$instance->withLock = (string)$data->withLock;
		}
		if (isset($data->batchUpdateId)) {
			$instance->batchUpdateId = (string)$data->batchUpdateId;
		}
		if (isset($data->batchSize)) {
			$instance->batchSize = (int)$data->batchSize;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptSourceUrl !== null) {
			$data->scriptSourceUrl = $this->scriptSourceUrl;
		}
		if ($this->dataOrigin !== null) {
			$data->dataOrigin = $this->dataOrigin;
		}
		if ($this->operationName !== null) {
			$data->operationName = $this->operationName;
		}
		if ($this->operationId !== null) {
			$data->operationId = $this->operationId;
		}
		if ($this->keepAlive !== null) {
			$data->keepAlive = $this->keepAlive;
		}
		if ($this->privateAggregationConfig !== null) {
			$data->privateAggregationConfig = $this->privateAggregationConfig->jsonSerialize();
		}
		if ($this->serializedData !== null) {
			$data->serializedData = $this->serializedData;
		}
		if ($this->urlsWithMetadata !== null) {
			$data->urlsWithMetadata = [];
			foreach ($this->urlsWithMetadata as $item) {
				$data->urlsWithMetadata[] = $item->jsonSerialize();
			}
		}
		if ($this->urnUuid !== null) {
			$data->urnUuid = $this->urnUuid;
		}
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->ignoreIfPresent !== null) {
			$data->ignoreIfPresent = $this->ignoreIfPresent;
		}
		if ($this->workletOrdinal !== null) {
			$data->workletOrdinal = $this->workletOrdinal;
		}
		if ($this->workletTargetId !== null) {
			$data->workletTargetId = $this->workletTargetId;
		}
		if ($this->withLock !== null) {
			$data->withLock = $this->withLock;
		}
		if ($this->batchUpdateId !== null) {
			$data->batchUpdateId = $this->batchUpdateId;
		}
		if ($this->batchSize !== null) {
			$data->batchSize = $this->batchSize;
		}
		return $data;
	}
}
