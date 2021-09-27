<?php

use Bitrix\Main\Loader,
	Bitrix\Main\Localization\Loc,
	Bitrix\Sale\PaySystem;

Loc::loadMessages(__FILE__);

$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$protocol = $request->isHttps() ? 'https://' : 'http://';

$isAvailable = PaySystem\Manager::HANDLER_AVAILABLE_TRUE;

$portalZone = Loader::includeModule('intranet') ? CIntranetUtils::getPortalZone() : '';
$licensePrefix = Loader::includeModule('bitrix24') ? \CBitrix24::getLicensePrefix() : '';

if (Loader::includeModule("bitrix24")) {
	if ($licensePrefix !== 'by') {
		$isAvailable = PaySystem\Manager::HANDLER_AVAILABLE_FALSE;
	}
} elseif (Loader::includeModule('intranet') && $portalZone !== 'ru') {
	$isAvailable = PaySystem\Manager::HANDLER_AVAILABLE_FALSE;
}

$description = Loc::getMessage('SALE_EXPRESSPAY_ERIP_DESCRIPTION');

$data = [
	'NAME' => Loc::getMessage('SALE_EXPRESSPAY_ERIP_TITLE'),
	'SORT' => 100,
	'IS_AVAILABLE' => $isAvailable,
	'CODES' => [
		"ERIP_IS_TEST_API" => [
			"SORT" => 10,
			"NAME" => Loc::getMessage("ERIP_IS_TEST_API_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_IS_TEST_API_DESCR"),
			"INPUT" => [
				'TYPE' => 'Y/N'
			],
			'DEFAULT' => [
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			],
		],
		"ERIP_TOKEN"	=> [
			"SORT" => 20,
			"NAME"	=> Loc::getMessage("ERIP_TOKEN_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_TOKEN_DESCR"),
			"VALUE"	=> "",
			"TYPE"	=> ""
		],
		"ERIP_SERVICE_ID"	=> [
			"SORT" => 30,
			"NAME"	=> Loc::getMessage("ERIP_SERVICE_ID_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_SERVICE_ID_DESCR"),
			"VALUE"	=> "",
			"TYPE"	=> ""
		],
		"ERIP_IS_SHOW_QR_CODE" => [
			"SORT" => 40,
			"NAME" => Loc::getMessage("ERIP_IS_SHOW_QR_CODE_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_IS_SHOW_QR_CODE_DESCR"),
			"INPUT" => [
				'TYPE' => 'Y/N'
			],
			'DEFAULT' => [
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			],
		],
		"ERIP_SECRET_WORD"	=> [
			"SORT" => 50,
			"NAME"	=> Loc::getMessage("ERIP_SECRET_WORD_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_SECRET_WORD_DESCR"),
			"DEFAULT" => [
				"PROVIDER_VALUE" => "",
				"PROVIDER_KEY" => "VALUE"
			],
		],
		"ERIP_NOTIFICATION_URL"	=> [
			"SORT" => 55,
			"NAME"	=> Loc::getMessage("ERIP_NOTIFICATION_URL_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_NOTIFICATION_URL_DESCR"),
			"DEFAULT" => [
				"PROVIDER_VALUE" => $protocol.$request->getHttpHost().'/bitrix/tools/sale_ps_result.php',
				"PROVIDER_KEY" => "VALUE"
			],
		],
		"ERIP_IS_USE_SIGNATURE_FROM_NOTIFICATION" => [
			"SORT" => 60,
			"NAME" => Loc::getMessage("ERIP_IS_USE_SIGNATURE_FROM_NOTIFICATION_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_IS_USE_SIGNATURE_FROM_NOTIFICATION_DESCR"),
			"INPUT" => [
				'TYPE' => 'Y/N'
			],
			'DEFAULT' => [
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			],
		],
		"ERIP_SECRET_WORD_FROM_NOTIFICATION"	=> [
			"SORT" => 65,
			"NAME"	=> Loc::getMessage("ERIP_SECRET_WORD_FROM_NOTIFICATION_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_SECRET_WORD_FROM_NOTIFICATION_DESCR"),
			"DEFAULT" => [
				"PROVIDER_VALUE" => "",
				"PROVIDER_KEY" => "VALUE"
			],
		],
		"ERIP_ERIP_PATH"	=> [
			"SORT" => 80,
			"NAME"	=> Loc::getMessage("ERIP_ERIP_PATH_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_ERIP_PATH_DESCR"),
			"DEFAULT"	=> [
				"PROVIDER_VALUE" => Loc::getMessage("ERIP_ERIP_PATH_VALUE"),
				"PROVIDER_KEY" => "VALUE"
			],
		],
		"ERIP_IS_NAME_EDITABLE" => [
			"SORT" => 100,
			"NAME" => Loc::getMessage("ERIP_IS_NAME_EDITABLE_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_IS_NAME_EDITABLE_DESCR"),
			"INPUT" => [
				'TYPE' => 'Y/N'
			],
			'DEFAULT' => [
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			],
		],
		"ERIP_IS_ADDRESS_EDITABLE" => [
			"SORT" => 105,
			"NAME" => Loc::getMessage("ERIP_IS_ADDRESS_EDITABLE_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_IS_ADDRESS_EDITABLE_DESCR"),
			"INPUT" => [
				'TYPE' => 'Y/N'
			],
			'DEFAULT' => [
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			],
		],
		"ERIP_IS_AMOUNT_EDITABLE" => [
			"SORT" => 110,
			"NAME" => Loc::getMessage("ERIP_IS_AMOUNT_EDITABLE_NAME"),
			"DESCRIPTION"	=> Loc::getMessage("ERIP_IS_AMOUNT_EDITABLE_DESCR"),
			"INPUT" => [
				'TYPE' => 'Y/N'
			],
			'DEFAULT' => [
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			],
		],
	]
];
