<?php

	require_once 'mailchimp/inc/MCAPI.class.php';
	// MailChimp API Key
	// MailChimp API Key ARTICLE at http://kb.mailchimp.com/accounts/management/about-api-keys#Finding-or-generating-your-API-key
	$api = new MCAPI('c813962ae32121e6810d42dc29db2270-us9');
	$merge_vars = array();

	// MailChimp List ID
	// MailChimp List ID ARTICLE at http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id
	$retval = $api->listSubscribe( 'edb4026298', $_POST["subscribeemail"], $merge_vars, 'html', false, true );

?>
