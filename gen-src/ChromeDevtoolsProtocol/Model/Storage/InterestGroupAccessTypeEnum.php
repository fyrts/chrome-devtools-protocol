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
	const JOIN = 'join';
	const LEAVE = 'leave';
	const UPDATE = 'update';
	const LOADED = 'loaded';
	const BID = 'bid';
	const WIN = 'win';
	const ADDITIONAL_BID = 'additionalBid';
	const ADDITIONAL_BID_WIN = 'additionalBidWin';
	const TOP_LEVEL_BID = 'topLevelBid';
	const TOP_LEVEL_ADDITIONAL_BID = 'topLevelAdditionalBid';
	const CLEAR = 'clear';
}
