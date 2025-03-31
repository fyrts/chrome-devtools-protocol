<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * A unique identifier for the type of issue. Each type may use one of the optional fields in InspectorIssueDetails to convey more specific information about the kind of issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectorIssueCodeEnum
{
	const COOKIE_ISSUE = 'CookieIssue';
	const MIXED_CONTENT_ISSUE = 'MixedContentIssue';
	const BLOCKED_BY_RESPONSE_ISSUE = 'BlockedByResponseIssue';
	const HEAVY_AD_ISSUE = 'HeavyAdIssue';
	const CONTENT_SECURITY_POLICY_ISSUE = 'ContentSecurityPolicyIssue';
	const SHARED_ARRAY_BUFFER_ISSUE = 'SharedArrayBufferIssue';
	const LOW_TEXT_CONTRAST_ISSUE = 'LowTextContrastIssue';
	const CORS_ISSUE = 'CorsIssue';
	const ATTRIBUTION_REPORTING_ISSUE = 'AttributionReportingIssue';
	const QUIRKS_MODE_ISSUE = 'QuirksModeIssue';
	const PARTITIONING_BLOB_U_R_L_ISSUE = 'PartitioningBlobURLIssue';
	const NAVIGATOR_USER_AGENT_ISSUE = 'NavigatorUserAgentIssue';
	const GENERIC_ISSUE = 'GenericIssue';
	const DEPRECATION_ISSUE = 'DeprecationIssue';
	const CLIENT_HINT_ISSUE = 'ClientHintIssue';
	const FEDERATED_AUTH_REQUEST_ISSUE = 'FederatedAuthRequestIssue';
	const BOUNCE_TRACKING_ISSUE = 'BounceTrackingIssue';
	const COOKIE_DEPRECATION_METADATA_ISSUE = 'CookieDeprecationMetadataIssue';
	const STYLESHEET_LOADING_ISSUE = 'StylesheetLoadingIssue';
	const FEDERATED_AUTH_USER_INFO_REQUEST_ISSUE = 'FederatedAuthUserInfoRequestIssue';
	const PROPERTY_RULE_ISSUE = 'PropertyRuleIssue';
	const SHARED_DICTIONARY_ISSUE = 'SharedDictionaryIssue';
	const SELECT_ELEMENT_ACCESSIBILITY_ISSUE = 'SelectElementAccessibilityIssue';
	const SRI_MESSAGE_SIGNATURE_ISSUE = 'SRIMessageSignatureIssue';
}
