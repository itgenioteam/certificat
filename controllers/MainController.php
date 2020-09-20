<?php

class MainController
{

	public function actionIndex(){
        echo 'Здесь будет форма, но позже :)';
        
        $languages = array();
        $typesOfCert = array();
        $subjects = array();
      
        $languages = Cert::getLangList();
        // $typesOfCert = Cert::getFormParticipationList();
        // $subjects = Cert::getContentsReportList();

       
        require_once(ROOT . '/views/main/index.php');
		return true;
    }

}
?>