<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$psTitle = Loc::getMessage("SALE_EXPRESSPAY_ERIP_TITLE");
$psDescription = Loc::getMessage("SALE_EXPRESSPAY_ERIP_DESCRIPTION");

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

$arPSCorrespondence = array(
		"ERIP_IS_TEST_API" => array(
			"SORT" => 10,
			"NAME" => Loc::getMessage("ERIP_IS_TEST_API_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_IS_TEST_API_DESCR"),
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"ERIP_TOKEN"	=> array(
			"SORT" => 20,
			"NAME"	=> Loc::getMessage("ERIP_TOKEN_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_TOKEN_DESCR"),
			"VALUE"	=> "",
			"TYPE"	=> ""
		),
		"ERIP_SERVICE_ID"	=> array(
			"SORT" => 30,
			"NAME"	=> Loc::getMessage("ERIP_SERVICE_ID_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_SERVICE_ID_DESCR"),
			"VALUE"	=> "",
			"TYPE"	=> ""
		),
		"ERIP_IS_SHOW_QR_CODE" => array(
			"SORT" => 40,
			"NAME" => Loc::getMessage("ERIP_IS_SHOW_QR_CODE_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_IS_SHOW_QR_CODE_DESCR"),
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"ERIP_SECRET_WORD"	=> array(
			"SORT" => 50,
			"NAME"	=> Loc::getMessage("ERIP_SECRET_WORD_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_SECRET_WORD_DESCR"),
			"DEFAULT" => array(
				"PROVIDER_VALUE" => "",
				"PROVIDER_KEY" => "VALUE"
			)
		),
		"ERIP_NOTIFICATION_URL"	=> array(
			"SORT" => 55,
			"NAME"	=> Loc::getMessage("ERIP_NOTIFICATION_URL_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_NOTIFICATION_URL_DESCR"),
			"DEFAULT" => array(
				"PROVIDER_VALUE" => $url. "/bitrix/tools/expresspay_notify/expresspay_notify.php",
				"PROVIDER_KEY" => "VALUE"
			)
		),
		"IS_USE_SIGNATURE_FROM_NOTIFICATION" => array(
			"SORT" => 60,
			"NAME" => Loc::getMessage("IS_USE_SIGNATURE_FROM_NOTIFICATION_NAME"),
			"DESCR"	=> Loc::getMessage("IS_USE_SIGNATURE_FROM_NOTIFICATION_DESCR"),
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"SECRET_WORD_FROM_NOTIFICATION"	=> array(
			"SORT" => 65,
			"NAME"	=> Loc::getMessage("SECRET_WORD_FROM_NOTIFICATION_NAME"),
			"DESCR"	=> Loc::getMessage("SECRET_WORD_FROM_NOTIFICATION_DESCR"),
			"DEFAULT" => array(
				"PROVIDER_VALUE" => "",
				"PROVIDER_KEY" => "VALUE"
			)
		),
		"ERIP_ERIP_PATH"	=> array(
			"SORT" => 80,
			"NAME"	=> Loc::getMessage("ERIP_ERIP_PATH_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_ERIP_PATH_DESCR"),
			"DEFAULT"	=> array(
				"PROVIDER_VALUE" => Loc::getMessage("ERIP_ERIP_PATH_VALUE"),
				"PROVIDER_KEY" => "VALUE"
				),
		),
		"ERIP_IS_NAME_EDITABLE" => array(
			"SORT" => 100,
			"NAME" => Loc::getMessage("ERIP_IS_NAME_EDITABLE_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_IS_NAME_EDITABLE_DESCR"),
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"ERIP_IS_ADDRESS_EDITABLE" => array(
			"SORT" => 105,
			"NAME" => Loc::getMessage("ERIP_IS_ADDRESS_EDITABLE_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_IS_ADDRESS_EDITABLE_DESCR"),
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"ERIP_IS_AMOUNT_EDITABLE" => array(
			"SORT" => 110,
			"NAME" => Loc::getMessage("ERIP_IS_AMOUNT_EDITABLE_NAME"),
			"DESCR"	=> Loc::getMessage("ERIP_IS_AMOUNT_EDITABLE_DESCR"),
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
	);