<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * The reason why Chrome uses a specific transport protocol for HTTP semantics.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AlternateProtocolUsageEnum
{
	const ALTERNATIVE_JOB_WON_WITHOUT_RACE = 'alternativeJobWonWithoutRace';
	const ALTERNATIVE_JOB_WON_RACE = 'alternativeJobWonRace';
	const MAIN_JOB_WON_RACE = 'mainJobWonRace';
	const MAPPING_MISSING = 'mappingMissing';
	const BROKEN = 'broken';
	const DNS_ALPN_H3_JOB_WON_WITHOUT_RACE = 'dnsAlpnH3JobWonWithoutRace';
	const DNS_ALPN_H3_JOB_WON_RACE = 'dnsAlpnH3JobWonRace';
	const UNSPECIFIED_REASON = 'unspecifiedReason';
}
