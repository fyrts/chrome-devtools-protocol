<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Values of named type Storage.AttributionReportingEventLevelResult.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingEventLevelResultEnum
{
	const SUCCESS = 'success';
	const SUCCESS_DROPPED_LOWER_PRIORITY = 'successDroppedLowerPriority';
	const INTERNAL_ERROR = 'internalError';
	const NO_CAPACITY_FOR_ATTRIBUTION_DESTINATION = 'noCapacityForAttributionDestination';
	const NO_MATCHING_SOURCES = 'noMatchingSources';
	const DEDUPLICATED = 'deduplicated';
	const EXCESSIVE_ATTRIBUTIONS = 'excessiveAttributions';
	const PRIORITY_TOO_LOW = 'priorityTooLow';
	const NEVER_ATTRIBUTED_SOURCE = 'neverAttributedSource';
	const EXCESSIVE_REPORTING_ORIGINS = 'excessiveReportingOrigins';
	const NO_MATCHING_SOURCE_FILTER_DATA = 'noMatchingSourceFilterData';
	const PROHIBITED_BY_BROWSER_POLICY = 'prohibitedByBrowserPolicy';
	const NO_MATCHING_CONFIGURATIONS = 'noMatchingConfigurations';
	const EXCESSIVE_REPORTS = 'excessiveReports';
	const FALSELY_ATTRIBUTED_SOURCE = 'falselyAttributedSource';
	const REPORT_WINDOW_PASSED = 'reportWindowPassed';
	const NOT_REGISTERED = 'notRegistered';
	const REPORT_WINDOW_NOT_STARTED = 'reportWindowNotStarted';
	const NO_MATCHING_TRIGGER_DATA = 'noMatchingTriggerData';
}
