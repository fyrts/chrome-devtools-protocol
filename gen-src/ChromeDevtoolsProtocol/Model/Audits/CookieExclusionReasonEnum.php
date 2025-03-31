<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Values of named type Audits.CookieExclusionReason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieExclusionReasonEnum
{
	const EXCLUDE_SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'ExcludeSameSiteUnspecifiedTreatedAsLax';
	const EXCLUDE_SAME_SITE_NONE_INSECURE = 'ExcludeSameSiteNoneInsecure';
	const EXCLUDE_SAME_SITE_LAX = 'ExcludeSameSiteLax';
	const EXCLUDE_SAME_SITE_STRICT = 'ExcludeSameSiteStrict';
	const EXCLUDE_INVALID_SAME_PARTY = 'ExcludeInvalidSameParty';
	const EXCLUDE_SAME_PARTY_CROSS_PARTY_CONTEXT = 'ExcludeSamePartyCrossPartyContext';
	const EXCLUDE_DOMAIN_NON_A_S_C_I_I = 'ExcludeDomainNonASCII';
	const EXCLUDE_THIRD_PARTY_COOKIE_BLOCKED_IN_FIRST_PARTY_SET = 'ExcludeThirdPartyCookieBlockedInFirstPartySet';
	const EXCLUDE_THIRD_PARTY_PHASEOUT = 'ExcludeThirdPartyPhaseout';
	const EXCLUDE_PORT_MISMATCH = 'ExcludePortMismatch';
	const EXCLUDE_SCHEME_MISMATCH = 'ExcludeSchemeMismatch';
}
