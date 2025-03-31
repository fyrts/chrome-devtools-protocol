<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * TODO(https://crbug.com/1384419): revisit the list of PrefetchStatus and filter out the ones that aren't necessary to the developers.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrefetchStatusEnum
{
	const PREFETCH_ALLOWED = 'PrefetchAllowed';
	const PREFETCH_FAILED_INELIGIBLE_REDIRECT = 'PrefetchFailedIneligibleRedirect';
	const PREFETCH_FAILED_INVALID_REDIRECT = 'PrefetchFailedInvalidRedirect';
	const PREFETCH_FAILED_M_I_M_E_NOT_SUPPORTED = 'PrefetchFailedMIMENotSupported';
	const PREFETCH_FAILED_NET_ERROR = 'PrefetchFailedNetError';
	const PREFETCH_FAILED_NON2_X_X = 'PrefetchFailedNon2XX';
	const PREFETCH_EVICTED_AFTER_BROWSING_DATA_REMOVED = 'PrefetchEvictedAfterBrowsingDataRemoved';
	const PREFETCH_EVICTED_AFTER_CANDIDATE_REMOVED = 'PrefetchEvictedAfterCandidateRemoved';
	const PREFETCH_EVICTED_FOR_NEWER_PREFETCH = 'PrefetchEvictedForNewerPrefetch';
	const PREFETCH_HELDBACK = 'PrefetchHeldback';
	const PREFETCH_INELIGIBLE_RETRY_AFTER = 'PrefetchIneligibleRetryAfter';
	const PREFETCH_IS_PRIVACY_DECOY = 'PrefetchIsPrivacyDecoy';
	const PREFETCH_IS_STALE = 'PrefetchIsStale';
	const PREFETCH_NOT_ELIGIBLE_BROWSER_CONTEXT_OFF_THE_RECORD = 'PrefetchNotEligibleBrowserContextOffTheRecord';
	const PREFETCH_NOT_ELIGIBLE_DATA_SAVER_ENABLED = 'PrefetchNotEligibleDataSaverEnabled';
	const PREFETCH_NOT_ELIGIBLE_EXISTING_PROXY = 'PrefetchNotEligibleExistingProxy';
	const PREFETCH_NOT_ELIGIBLE_HOST_IS_NON_UNIQUE = 'PrefetchNotEligibleHostIsNonUnique';
	const PREFETCH_NOT_ELIGIBLE_NON_DEFAULT_STORAGE_PARTITION = 'PrefetchNotEligibleNonDefaultStoragePartition';
	const PREFETCH_NOT_ELIGIBLE_SAME_SITE_CROSS_ORIGIN_PREFETCH_REQUIRED_PROXY = 'PrefetchNotEligibleSameSiteCrossOriginPrefetchRequiredProxy';
	const PREFETCH_NOT_ELIGIBLE_SCHEME_IS_NOT_HTTPS = 'PrefetchNotEligibleSchemeIsNotHttps';
	const PREFETCH_NOT_ELIGIBLE_USER_HAS_COOKIES = 'PrefetchNotEligibleUserHasCookies';
	const PREFETCH_NOT_ELIGIBLE_USER_HAS_SERVICE_WORKER = 'PrefetchNotEligibleUserHasServiceWorker';
	const PREFETCH_NOT_ELIGIBLE_USER_HAS_SERVICE_WORKER_NO_FETCH_HANDLER = 'PrefetchNotEligibleUserHasServiceWorkerNoFetchHandler';
	const PREFETCH_NOT_ELIGIBLE_REDIRECT_FROM_SERVICE_WORKER = 'PrefetchNotEligibleRedirectFromServiceWorker';
	const PREFETCH_NOT_ELIGIBLE_REDIRECT_TO_SERVICE_WORKER = 'PrefetchNotEligibleRedirectToServiceWorker';
	const PREFETCH_NOT_ELIGIBLE_BATTERY_SAVER_ENABLED = 'PrefetchNotEligibleBatterySaverEnabled';
	const PREFETCH_NOT_ELIGIBLE_PRELOADING_DISABLED = 'PrefetchNotEligiblePreloadingDisabled';
	const PREFETCH_NOT_FINISHED_IN_TIME = 'PrefetchNotFinishedInTime';
	const PREFETCH_NOT_STARTED = 'PrefetchNotStarted';
	const PREFETCH_NOT_USED_COOKIES_CHANGED = 'PrefetchNotUsedCookiesChanged';
	const PREFETCH_PROXY_NOT_AVAILABLE = 'PrefetchProxyNotAvailable';
	const PREFETCH_RESPONSE_USED = 'PrefetchResponseUsed';
	const PREFETCH_SUCCESSFUL_BUT_NOT_USED = 'PrefetchSuccessfulButNotUsed';
	const PREFETCH_NOT_USED_PROBE_FAILED = 'PrefetchNotUsedProbeFailed';
}
