<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Types of reasons why a cookie should have been blocked by 3PCD but is exempted for the request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieExemptionReasonEnum
{
	const NONE = 'None';
	const USER_SETTING = 'UserSetting';
	const TPCD_METADATA = 'TPCDMetadata';
	const TPCD_DEPRECATION_TRIAL = 'TPCDDeprecationTrial';
	const TOP_LEVEL_T_P_C_D_DEPRECATION_TRIAL = 'TopLevelTPCDDeprecationTrial';
	const TPCD_HEURISTICS = 'TPCDHeuristics';
	const ENTERPRISE_POLICY = 'EnterprisePolicy';
	const STORAGE_ACCESS = 'StorageAccess';
	const TOP_LEVEL_STORAGE_ACCESS = 'TopLevelStorageAccess';
	const SCHEME = 'Scheme';
	const SAME_SITE_NONE_COOKIES_IN_SANDBOX = 'SameSiteNoneCookiesInSandbox';
}
