<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Performance\EnableRequest;
use ChromeDevtoolsProtocol\Model\Performance\GetMetricsResponse;
use ChromeDevtoolsProtocol\Model\Performance\MetricsEvent;
use ChromeDevtoolsProtocol\Model\Performance\SetTimeDomainRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class PerformanceDomain implements PerformanceDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Performance.disable', $request);
	}


	public function enable(ContextInterface $ctx, ?EnableRequest $request = null): void
	{
		if (is_null($request)) $request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Performance.enable', $request);
	}


	public function getMetrics(ContextInterface $ctx): GetMetricsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Performance.getMetrics', $request);
		return GetMetricsResponse::fromJson($response);
	}


	public function setTimeDomain(ContextInterface $ctx, SetTimeDomainRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Performance.setTimeDomain', $request);
	}


	public function addMetricsListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Performance.metrics', function ($event) use ($listener) {
			return $listener(MetricsEvent::fromJson($event));
		});
	}


	public function awaitMetrics(ContextInterface $ctx): MetricsEvent
	{
		return MetricsEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Performance.metrics'));
	}
}
