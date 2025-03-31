<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Values of named type Audits.SRIMessageSignatureError.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SRIMessageSignatureErrorEnum
{
	const MISSING_SIGNATURE_HEADER = 'MissingSignatureHeader';
	const MISSING_SIGNATURE_INPUT_HEADER = 'MissingSignatureInputHeader';
	const INVALID_SIGNATURE_HEADER = 'InvalidSignatureHeader';
	const INVALID_SIGNATURE_INPUT_HEADER = 'InvalidSignatureInputHeader';
	const SIGNATURE_HEADER_VALUE_IS_NOT_BYTE_SEQUENCE = 'SignatureHeaderValueIsNotByteSequence';
	const SIGNATURE_HEADER_VALUE_IS_PARAMETERIZED = 'SignatureHeaderValueIsParameterized';
	const SIGNATURE_HEADER_VALUE_IS_INCORRECT_LENGTH = 'SignatureHeaderValueIsIncorrectLength';
	const SIGNATURE_INPUT_HEADER_MISSING_LABEL = 'SignatureInputHeaderMissingLabel';
	const SIGNATURE_INPUT_HEADER_VALUE_NOT_INNER_LIST = 'SignatureInputHeaderValueNotInnerList';
	const SIGNATURE_INPUT_HEADER_VALUE_MISSING_COMPONENTS = 'SignatureInputHeaderValueMissingComponents';
	const SIGNATURE_INPUT_HEADER_INVALID_COMPONENT_TYPE = 'SignatureInputHeaderInvalidComponentType';
	const SIGNATURE_INPUT_HEADER_INVALID_COMPONENT_NAME = 'SignatureInputHeaderInvalidComponentName';
	const SIGNATURE_INPUT_HEADER_INVALID_HEADER_COMPONENT_PARAMETER = 'SignatureInputHeaderInvalidHeaderComponentParameter';
	const SIGNATURE_INPUT_HEADER_INVALID_DERIVED_COMPONENT_PARAMETER = 'SignatureInputHeaderInvalidDerivedComponentParameter';
	const SIGNATURE_INPUT_HEADER_KEY_ID_LENGTH = 'SignatureInputHeaderKeyIdLength';
	const SIGNATURE_INPUT_HEADER_INVALID_PARAMETER = 'SignatureInputHeaderInvalidParameter';
	const SIGNATURE_INPUT_HEADER_MISSING_REQUIRED_PARAMETERS = 'SignatureInputHeaderMissingRequiredParameters';
	const VALIDATION_FAILED_SIGNATURE_EXPIRED = 'ValidationFailedSignatureExpired';
	const VALIDATION_FAILED_INVALID_LENGTH = 'ValidationFailedInvalidLength';
	const VALIDATION_FAILED_SIGNATURE_MISMATCH = 'ValidationFailedSignatureMismatch';
	const VALIDATION_FAILED_INTEGRITY_MISMATCH = 'ValidationFailedIntegrityMismatch';
}
