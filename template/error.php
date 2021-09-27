<?php
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$error_message = $params['message'];
?>
<?= Loc::getMessage('SALE_HPS_EXPRESSPAY_ERIP_ERROR_DESCRIPTION') ?><b><?= $error_message ?></b>