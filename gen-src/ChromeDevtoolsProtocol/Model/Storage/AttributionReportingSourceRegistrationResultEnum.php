<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Values of named type Storage.AttributionReportingSourceRegistrationResult.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingSourceRegistrationResultEnum
{
	const SUCCESS = 'success';
	const INTERNAL_ERROR = 'internalError';
	const INSUFFICIENT_SOURCE_CAPACITY = 'insufficientSourceCapacity';
	const INSUFFICIENT_UNIQUE_DESTINATION_CAPACITY = 'insufficientUniqueDestinationCapacity';
	const EXCESSIVE_REPORTING_ORIGINS = 'excessiveReportingOrigins';
	const PROHIBITED_BY_BROWSER_POLICY = 'prohibitedByBrowserPolicy';
	const SUCCESS_NOISED = 'successNoised';
	const DESTINATION_REPORTING_LIMIT_REACHED = 'destinationReportingLimitReached';
	const DESTINATION_GLOBAL_LIMIT_REACHED = 'destinationGlobalLimitReached';
	const DESTINATION_BOTH_LIMITS_REACHED = 'destinationBothLimitsReached';
	const REPORTING_ORIGINS_PER_SITE_LIMIT_REACHED = 'reportingOriginsPerSiteLimitReached';
	const EXCEEDS_MAX_CHANNEL_CAPACITY = 'exceedsMaxChannelCapacity';
	const EXCEEDS_MAX_SCOPES_CHANNEL_CAPACITY = 'exceedsMaxScopesChannelCapacity';
	const EXCEEDS_MAX_TRIGGER_STATE_CARDINALITY = 'exceedsMaxTriggerStateCardinality';
	const EXCEEDS_MAX_EVENT_STATES_LIMIT = 'exceedsMaxEventStatesLimit';
	const DESTINATION_PER_DAY_REPORTING_LIMIT_REACHED = 'destinationPerDayReportingLimitReached';
}
