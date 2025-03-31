<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * List of FinalStatus reasons for Prerender2.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrerenderFinalStatusEnum
{
	const ACTIVATED = 'Activated';
	const DESTROYED = 'Destroyed';
	const LOW_END_DEVICE = 'LowEndDevice';
	const INVALID_SCHEME_REDIRECT = 'InvalidSchemeRedirect';
	const INVALID_SCHEME_NAVIGATION = 'InvalidSchemeNavigation';
	const NAVIGATION_REQUEST_BLOCKED_BY_CSP = 'NavigationRequestBlockedByCsp';
	const MAIN_FRAME_NAVIGATION = 'MainFrameNavigation';
	const MOJO_BINDER_POLICY = 'MojoBinderPolicy';
	const RENDERER_PROCESS_CRASHED = 'RendererProcessCrashed';
	const RENDERER_PROCESS_KILLED = 'RendererProcessKilled';
	const DOWNLOAD = 'Download';
	const TRIGGER_DESTROYED = 'TriggerDestroyed';
	const NAVIGATION_NOT_COMMITTED = 'NavigationNotCommitted';
	const NAVIGATION_BAD_HTTP_STATUS = 'NavigationBadHttpStatus';
	const CLIENT_CERT_REQUESTED = 'ClientCertRequested';
	const NAVIGATION_REQUEST_NETWORK_ERROR = 'NavigationRequestNetworkError';
	const CANCEL_ALL_HOSTS_FOR_TESTING = 'CancelAllHostsForTesting';
	const DID_FAIL_LOAD = 'DidFailLoad';
	const STOP = 'Stop';
	const SSL_CERTIFICATE_ERROR = 'SslCertificateError';
	const LOGIN_AUTH_REQUESTED = 'LoginAuthRequested';
	const UA_CHANGE_REQUIRES_RELOAD = 'UaChangeRequiresReload';
	const BLOCKED_BY_CLIENT = 'BlockedByClient';
	const AUDIO_OUTPUT_DEVICE_REQUESTED = 'AudioOutputDeviceRequested';
	const MIXED_CONTENT = 'MixedContent';
	const TRIGGER_BACKGROUNDED = 'TriggerBackgrounded';
	const MEMORY_LIMIT_EXCEEDED = 'MemoryLimitExceeded';
	const DATA_SAVER_ENABLED = 'DataSaverEnabled';
	const TRIGGER_URL_HAS_EFFECTIVE_URL = 'TriggerUrlHasEffectiveUrl';
	const ACTIVATED_BEFORE_STARTED = 'ActivatedBeforeStarted';
	const INACTIVE_PAGE_RESTRICTION = 'InactivePageRestriction';
	const START_FAILED = 'StartFailed';
	const TIMEOUT_BACKGROUNDED = 'TimeoutBackgrounded';
	const CROSS_SITE_REDIRECT_IN_INITIAL_NAVIGATION = 'CrossSiteRedirectInInitialNavigation';
	const CROSS_SITE_NAVIGATION_IN_INITIAL_NAVIGATION = 'CrossSiteNavigationInInitialNavigation';
	const SAME_SITE_CROSS_ORIGIN_REDIRECT_NOT_OPT_IN_IN_INITIAL_NAVIGATION = 'SameSiteCrossOriginRedirectNotOptInInInitialNavigation';
	const SAME_SITE_CROSS_ORIGIN_NAVIGATION_NOT_OPT_IN_IN_INITIAL_NAVIGATION = 'SameSiteCrossOriginNavigationNotOptInInInitialNavigation';
	const ACTIVATION_NAVIGATION_PARAMETER_MISMATCH = 'ActivationNavigationParameterMismatch';
	const ACTIVATED_IN_BACKGROUND = 'ActivatedInBackground';
	const EMBEDDER_HOST_DISALLOWED = 'EmbedderHostDisallowed';
	const ACTIVATION_NAVIGATION_DESTROYED_BEFORE_SUCCESS = 'ActivationNavigationDestroyedBeforeSuccess';
	const TAB_CLOSED_BY_USER_GESTURE = 'TabClosedByUserGesture';
	const TAB_CLOSED_WITHOUT_USER_GESTURE = 'TabClosedWithoutUserGesture';
	const PRIMARY_MAIN_FRAME_RENDERER_PROCESS_CRASHED = 'PrimaryMainFrameRendererProcessCrashed';
	const PRIMARY_MAIN_FRAME_RENDERER_PROCESS_KILLED = 'PrimaryMainFrameRendererProcessKilled';
	const ACTIVATION_FRAME_POLICY_NOT_COMPATIBLE = 'ActivationFramePolicyNotCompatible';
	const PRELOADING_DISABLED = 'PreloadingDisabled';
	const BATTERY_SAVER_ENABLED = 'BatterySaverEnabled';
	const ACTIVATED_DURING_MAIN_FRAME_NAVIGATION = 'ActivatedDuringMainFrameNavigation';
	const PRELOADING_UNSUPPORTED_BY_WEB_CONTENTS = 'PreloadingUnsupportedByWebContents';
	const CROSS_SITE_REDIRECT_IN_MAIN_FRAME_NAVIGATION = 'CrossSiteRedirectInMainFrameNavigation';
	const CROSS_SITE_NAVIGATION_IN_MAIN_FRAME_NAVIGATION = 'CrossSiteNavigationInMainFrameNavigation';
	const SAME_SITE_CROSS_ORIGIN_REDIRECT_NOT_OPT_IN_IN_MAIN_FRAME_NAVIGATION = 'SameSiteCrossOriginRedirectNotOptInInMainFrameNavigation';
	const SAME_SITE_CROSS_ORIGIN_NAVIGATION_NOT_OPT_IN_IN_MAIN_FRAME_NAVIGATION = 'SameSiteCrossOriginNavigationNotOptInInMainFrameNavigation';
	const MEMORY_PRESSURE_ON_TRIGGER = 'MemoryPressureOnTrigger';
	const MEMORY_PRESSURE_AFTER_TRIGGERED = 'MemoryPressureAfterTriggered';
	const PRERENDERING_DISABLED_BY_DEV_TOOLS = 'PrerenderingDisabledByDevTools';
	const SPECULATION_RULE_REMOVED = 'SpeculationRuleRemoved';
	const ACTIVATED_WITH_AUXILIARY_BROWSING_CONTEXTS = 'ActivatedWithAuxiliaryBrowsingContexts';
	const MAX_NUM_OF_RUNNING_EAGER_PRERENDERS_EXCEEDED = 'MaxNumOfRunningEagerPrerendersExceeded';
	const MAX_NUM_OF_RUNNING_NON_EAGER_PRERENDERS_EXCEEDED = 'MaxNumOfRunningNonEagerPrerendersExceeded';
	const MAX_NUM_OF_RUNNING_EMBEDDER_PRERENDERS_EXCEEDED = 'MaxNumOfRunningEmbedderPrerendersExceeded';
	const PRERENDERING_URL_HAS_EFFECTIVE_URL = 'PrerenderingUrlHasEffectiveUrl';
	const REDIRECTED_PRERENDERING_URL_HAS_EFFECTIVE_URL = 'RedirectedPrerenderingUrlHasEffectiveUrl';
	const ACTIVATION_URL_HAS_EFFECTIVE_URL = 'ActivationUrlHasEffectiveUrl';
	const JAVA_SCRIPT_INTERFACE_ADDED = 'JavaScriptInterfaceAdded';
	const JAVA_SCRIPT_INTERFACE_REMOVED = 'JavaScriptInterfaceRemoved';
	const ALL_PRERENDERING_CANCELED = 'AllPrerenderingCanceled';
	const WINDOW_CLOSED = 'WindowClosed';
	const SLOW_NETWORK = 'SlowNetwork';
	const OTHER_PRERENDERED_PAGE_ACTIVATED = 'OtherPrerenderedPageActivated';
	const V8_OPTIMIZER_DISABLED = 'V8OptimizerDisabled';
	const PRERENDER_FAILED_DURING_PREFETCH = 'PrerenderFailedDuringPrefetch';
	const BROWSING_DATA_REMOVED = 'BrowsingDataRemoved';
}
