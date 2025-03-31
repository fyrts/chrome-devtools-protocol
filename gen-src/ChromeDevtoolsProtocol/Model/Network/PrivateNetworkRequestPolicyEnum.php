<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Values of named type Network.PrivateNetworkRequestPolicy.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrivateNetworkRequestPolicyEnum
{
	const ALLOW = 'Allow';
	const BLOCK_FROM_INSECURE_TO_MORE_PRIVATE = 'BlockFromInsecureToMorePrivate';
	const WARN_FROM_INSECURE_TO_MORE_PRIVATE = 'WarnFromInsecureToMorePrivate';
	const PREFLIGHT_BLOCK = 'PreflightBlock';
	const PREFLIGHT_WARN = 'PreflightWarn';
	const PERMISSION_BLOCK = 'PermissionBlock';
	const PERMISSION_WARN = 'PermissionWarn';
}
