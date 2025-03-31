<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Values of named type Audits.AttributionReportingIssueType.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingIssueTypeEnum
{
	const PERMISSION_POLICY_DISABLED = 'PermissionPolicyDisabled';
	const UNTRUSTWORTHY_REPORTING_ORIGIN = 'UntrustworthyReportingOrigin';
	const INSECURE_CONTEXT = 'InsecureContext';
	const INVALID_HEADER = 'InvalidHeader';
	const INVALID_REGISTER_TRIGGER_HEADER = 'InvalidRegisterTriggerHeader';
	const SOURCE_AND_TRIGGER_HEADERS = 'SourceAndTriggerHeaders';
	const SOURCE_IGNORED = 'SourceIgnored';
	const TRIGGER_IGNORED = 'TriggerIgnored';
	const OS_SOURCE_IGNORED = 'OsSourceIgnored';
	const OS_TRIGGER_IGNORED = 'OsTriggerIgnored';
	const INVALID_REGISTER_OS_SOURCE_HEADER = 'InvalidRegisterOsSourceHeader';
	const INVALID_REGISTER_OS_TRIGGER_HEADER = 'InvalidRegisterOsTriggerHeader';
	const WEB_AND_OS_HEADERS = 'WebAndOsHeaders';
	const NO_WEB_OR_OS_SUPPORT = 'NoWebOrOsSupport';
	const NAVIGATION_REGISTRATION_WITHOUT_TRANSIENT_USER_ACTIVATION = 'NavigationRegistrationWithoutTransientUserActivation';
	const INVALID_INFO_HEADER = 'InvalidInfoHeader';
	const NO_REGISTER_SOURCE_HEADER = 'NoRegisterSourceHeader';
	const NO_REGISTER_TRIGGER_HEADER = 'NoRegisterTriggerHeader';
	const NO_REGISTER_OS_SOURCE_HEADER = 'NoRegisterOsSourceHeader';
	const NO_REGISTER_OS_TRIGGER_HEADER = 'NoRegisterOsTriggerHeader';
	const NAVIGATION_REGISTRATION_UNIQUE_SCOPE_ALREADY_SET = 'NavigationRegistrationUniqueScopeAlreadySet';
}
