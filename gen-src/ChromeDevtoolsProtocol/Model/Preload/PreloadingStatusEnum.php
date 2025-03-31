<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Preloading status values, see also PreloadingTriggeringOutcome. This status is shared by prefetchStatusUpdated and prerenderStatusUpdated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreloadingStatusEnum
{
	const PENDING = 'Pending';
	const RUNNING = 'Running';
	const READY = 'Ready';
	const SUCCESS = 'Success';
	const FAILURE = 'Failure';
	const NOT_SUPPORTED = 'NotSupported';
}
