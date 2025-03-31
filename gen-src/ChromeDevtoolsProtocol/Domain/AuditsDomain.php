<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Audits\CheckContrastRequest;
use ChromeDevtoolsProtocol\Model\Audits\CheckFormsIssuesResponse;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseRequest;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseResponse;
use ChromeDevtoolsProtocol\Model\Audits\IssueAddedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class AuditsDomain implements AuditsDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function checkContrast(ContextInterface $ctx, ?CheckContrastRequest $request = null): void
	{
		if (is_null($request)) $request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Audits.checkContrast', $request);
	}


	public function checkFormsIssues(ContextInterface $ctx): CheckFormsIssuesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Audits.checkFormsIssues', $request);
		return CheckFormsIssuesResponse::fromJson($response);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Audits.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Audits.enable', $request);
	}


	public function getEncodedResponse(
		ContextInterface $ctx,
		GetEncodedResponseRequest $request
	): GetEncodedResponseResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Audits.getEncodedResponse', $request);
		return GetEncodedResponseResponse::fromJson($response);
	}


	public function addIssueAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Audits.issueAdded', function ($event) use ($listener) {
			return $listener(IssueAddedEvent::fromJson($event));
		});
	}


	public function awaitIssueAdded(ContextInterface $ctx): IssueAddedEvent
	{
		return IssueAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Audits.issueAdded'));
	}
}
