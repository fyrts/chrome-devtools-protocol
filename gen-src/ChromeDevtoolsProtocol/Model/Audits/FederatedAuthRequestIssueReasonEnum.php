<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Represents the failure reason when a federated authentication reason fails. Should be updated alongside RequestIdTokenStatus in third_party/blink/public/mojom/devtools/inspector_issue.mojom to include all cases except for success.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FederatedAuthRequestIssueReasonEnum
{
	const SHOULD_EMBARGO = 'ShouldEmbargo';
	const TOO_MANY_REQUESTS = 'TooManyRequests';
	const WELL_KNOWN_HTTP_NOT_FOUND = 'WellKnownHttpNotFound';
	const WELL_KNOWN_NO_RESPONSE = 'WellKnownNoResponse';
	const WELL_KNOWN_INVALID_RESPONSE = 'WellKnownInvalidResponse';
	const WELL_KNOWN_LIST_EMPTY = 'WellKnownListEmpty';
	const WELL_KNOWN_INVALID_CONTENT_TYPE = 'WellKnownInvalidContentType';
	const CONFIG_NOT_IN_WELL_KNOWN = 'ConfigNotInWellKnown';
	const WELL_KNOWN_TOO_BIG = 'WellKnownTooBig';
	const CONFIG_HTTP_NOT_FOUND = 'ConfigHttpNotFound';
	const CONFIG_NO_RESPONSE = 'ConfigNoResponse';
	const CONFIG_INVALID_RESPONSE = 'ConfigInvalidResponse';
	const CONFIG_INVALID_CONTENT_TYPE = 'ConfigInvalidContentType';
	const CLIENT_METADATA_HTTP_NOT_FOUND = 'ClientMetadataHttpNotFound';
	const CLIENT_METADATA_NO_RESPONSE = 'ClientMetadataNoResponse';
	const CLIENT_METADATA_INVALID_RESPONSE = 'ClientMetadataInvalidResponse';
	const CLIENT_METADATA_INVALID_CONTENT_TYPE = 'ClientMetadataInvalidContentType';
	const IDP_NOT_POTENTIALLY_TRUSTWORTHY = 'IdpNotPotentiallyTrustworthy';
	const DISABLED_IN_SETTINGS = 'DisabledInSettings';
	const DISABLED_IN_FLAGS = 'DisabledInFlags';
	const ERROR_FETCHING_SIGNIN = 'ErrorFetchingSignin';
	const INVALID_SIGNIN_RESPONSE = 'InvalidSigninResponse';
	const ACCOUNTS_HTTP_NOT_FOUND = 'AccountsHttpNotFound';
	const ACCOUNTS_NO_RESPONSE = 'AccountsNoResponse';
	const ACCOUNTS_INVALID_RESPONSE = 'AccountsInvalidResponse';
	const ACCOUNTS_LIST_EMPTY = 'AccountsListEmpty';
	const ACCOUNTS_INVALID_CONTENT_TYPE = 'AccountsInvalidContentType';
	const ID_TOKEN_HTTP_NOT_FOUND = 'IdTokenHttpNotFound';
	const ID_TOKEN_NO_RESPONSE = 'IdTokenNoResponse';
	const ID_TOKEN_INVALID_RESPONSE = 'IdTokenInvalidResponse';
	const ID_TOKEN_IDP_ERROR_RESPONSE = 'IdTokenIdpErrorResponse';
	const ID_TOKEN_CROSS_SITE_IDP_ERROR_RESPONSE = 'IdTokenCrossSiteIdpErrorResponse';
	const ID_TOKEN_INVALID_REQUEST = 'IdTokenInvalidRequest';
	const ID_TOKEN_INVALID_CONTENT_TYPE = 'IdTokenInvalidContentType';
	const ERROR_ID_TOKEN = 'ErrorIdToken';
	const CANCELED = 'Canceled';
	const RP_PAGE_NOT_VISIBLE = 'RpPageNotVisible';
	const SILENT_MEDIATION_FAILURE = 'SilentMediationFailure';
	const THIRD_PARTY_COOKIES_BLOCKED = 'ThirdPartyCookiesBlocked';
	const NOT_SIGNED_IN_WITH_IDP = 'NotSignedInWithIdp';
	const MISSING_TRANSIENT_USER_ACTIVATION = 'MissingTransientUserActivation';
	const REPLACED_BY_ACTIVE_MODE = 'ReplacedByActiveMode';
	const INVALID_FIELDS_SPECIFIED = 'InvalidFieldsSpecified';
	const RELYING_PARTY_ORIGIN_IS_OPAQUE = 'RelyingPartyOriginIsOpaque';
	const TYPE_NOT_MATCHING = 'TypeNotMatching';
	const UI_DISMISSED_NO_EMBARGO = 'UiDismissedNoEmbargo';
	const CORS_ERROR = 'CorsError';
}
