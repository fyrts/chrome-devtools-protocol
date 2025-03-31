<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Types of reasons why a cookie may not be sent with a request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieBlockedReasonEnum
{
	const SECURE_ONLY = 'SecureOnly';
	const NOT_ON_PATH = 'NotOnPath';
	const DOMAIN_MISMATCH = 'DomainMismatch';
	const SAME_SITE_STRICT = 'SameSiteStrict';
	const SAME_SITE_LAX = 'SameSiteLax';
	const SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'SameSiteUnspecifiedTreatedAsLax';
	const SAME_SITE_NONE_INSECURE = 'SameSiteNoneInsecure';
	const USER_PREFERENCES = 'UserPreferences';
	const THIRD_PARTY_PHASEOUT = 'ThirdPartyPhaseout';
	const THIRD_PARTY_BLOCKED_IN_FIRST_PARTY_SET = 'ThirdPartyBlockedInFirstPartySet';
	const UNKNOWN_ERROR = 'UnknownError';
	const SCHEMEFUL_SAME_SITE_STRICT = 'SchemefulSameSiteStrict';
	const SCHEMEFUL_SAME_SITE_LAX = 'SchemefulSameSiteLax';
	const SCHEMEFUL_SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'SchemefulSameSiteUnspecifiedTreatedAsLax';
	const SAME_PARTY_FROM_CROSS_PARTY_CONTEXT = 'SamePartyFromCrossPartyContext';
	const NAME_VALUE_PAIR_EXCEEDS_MAX_SIZE = 'NameValuePairExceedsMaxSize';
	const PORT_MISMATCH = 'PortMismatch';
	const SCHEME_MISMATCH = 'SchemeMismatch';
	const ANONYMOUS_CONTEXT = 'AnonymousContext';
}
