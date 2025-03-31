<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Values of named type Storage.AttributionReportingAggregatableResult.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableResultEnum
{
	const SUCCESS = 'success';
	const INTERNAL_ERROR = 'internalError';
	const NO_CAPACITY_FOR_ATTRIBUTION_DESTINATION = 'noCapacityForAttributionDestination';
	const NO_MATCHING_SOURCES = 'noMatchingSources';
	const EXCESSIVE_ATTRIBUTIONS = 'excessiveAttributions';
	const EXCESSIVE_REPORTING_ORIGINS = 'excessiveReportingOrigins';
	const NO_HISTOGRAMS = 'noHistograms';
	const INSUFFICIENT_BUDGET = 'insufficientBudget';
	const INSUFFICIENT_NAMED_BUDGET = 'insufficientNamedBudget';
	const NO_MATCHING_SOURCE_FILTER_DATA = 'noMatchingSourceFilterData';
	const NOT_REGISTERED = 'notRegistered';
	const PROHIBITED_BY_BROWSER_POLICY = 'prohibitedByBrowserPolicy';
	const DEDUPLICATED = 'deduplicated';
	const REPORT_WINDOW_PASSED = 'reportWindowPassed';
	const EXCESSIVE_REPORTS = 'excessiveReports';
}
