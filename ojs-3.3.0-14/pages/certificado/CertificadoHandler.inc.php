<?php



 import('classes.handler.Handler');

class CertificadoHandler extends Handler {
   
  
	function index($args, $request) {
		$this->validate(null, $request);
		$revistaTitle = $_GET["getTitle"];
		//echo $revistaTitle;
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('revistaTitle',  $revistaTitle);
		$templateMgr->display('../ModuloCertificado/index.tpl');

	}
	
    
}