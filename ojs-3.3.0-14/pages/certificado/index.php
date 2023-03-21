<?php 

/**
 * @defgroup pages_certificado Issue Pages
 */

/**
 * @file pages/certificado/index.php
 *
 * Copyright (c) 2022-2023 Chiquito Ernesto
 * Copyright (c) 2022-2023 Jacome Bryan
 * Copyright (c) 2022-2023 Lino Kevin
 *
 */
import('classes.handler.Handler');

session_start();
$templateMgr = TemplateManager::getManager($request);

switch ($op) {
	
	default:
		 $userName = $_SESSION['username'];
		 
		if (isset($_SESSION["username"])){
			 define('HANDLER_CLASS', 'CertificadoHandler');
		     import('pages.certificado.CertificadoHandler');	
		}else{
			
			$templateMgr->display('frontend/pages/userLogin.tpl');
		}
	break;
}
?>

