<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Enum of interest group access types.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterestGroupAccessTypeEnum
{
	public const JOIN = 'join';
	public const LEAVE = 'leave';
	public const UPDATE = 'update';
	public const LOADED = 'loaded';
	public const BID = 'bid';
	public const WIN = 'win';
	public const ADDITIONAL_BID = 'additionalBid';
	public const ADDITIONAL_BID_WIN = 'additionalBidWin';
	public const TOP_LEVEL_BID = 'topLevelBid';
	public const TOP_LEVEL_ADDITIONAL_BID = 'topLevelAdditionalBid';
	public const CLEAR = 'clear';
}
