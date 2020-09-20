<?php

class Cert extends Base
{


    //Получаю список всех языков
    public static function getLangList()
    {
        $languages = array();
        $languages = Base::select("SELECT id, title FROM languages");
        return $languages;
    }
    
    
   
    
    //Вставляю доклад в БД
    // public static function sendToDB($array) {
    //     $fioName=($array['fio2']) ? $array['fio1']."-".$array['fio2'] : $array['fio1'];
    //     $fioName=Base::translit($fioName);
    // 	$fPDF=self::saveFile($_FILES['reportFilePDF'], 1, '.pdf', $fioName, $array['sectionSel']);
    //     $fDOC=self::saveFile($_FILES['reportFileDOC'], 1, '.doc', $fioName, $array['sectionSel']);
        
    //     $db = Db::getInstance()->getConnection(); 
        

    //     $sql = 'INSERT INTO reports (id_user, title_report, del, reportFilePDF, reportFileDOC, id_sections, id_formParticipation, id_contentReport, fio1, universityName1, abbreviatureUniver1, statusAuthor1, facultyName1, courseAuthor1, emailAuthor1, telAuthor1, haveSecondAuthor, fio2, universityName2, abbreviatureUniver2, statusAuthor2, facultyName2, courseAuthor2, emailAuthor2, telAuthor2, fioSupervisor1, scientificDegree1, academicRanks1, positionSupervisor1, universityNameSupervisor1, departmentSupervisor1, telSupervisor1, haveSecondSup, fioSupervisor2, scientificDegree2, academicRanks2, positionSupervisor2, universityNameSupervisor2, departmentSupervisor2, telSupervisor2, dtR) '
    //             . 'VALUES (:id_user, :title_report, "0", :reportFilePDF, :reportFileDOC, :id_sections, :id_formParticipation, :id_contentReport, :fio1, :universityName1, :abbreviatureUniver1, :statusAuthor1, :facultyName1, :courseAuthor1, :emailAuthor1, :telAuthor1, :haveSecondAuthor, :fio2, :universityName2, :abbreviatureUniver2, :statusAuthor2, :facultyName2, :courseAuthor2, :emailAuthor2, :telAuthor2, :fioSupervisor1, :scientificDegree1, :academicRanks1, :positionSupervisor1, :universityNameSupervisor1, :departmentSupervisor1, :telSupervisor1, :haveSecondSup, :fioSupervisor2, :scientificDegree2, :academicRanks2, :positionSupervisor2, :universityNameSupervisor2, :departmentSupervisor2, :telSupervisor2, CURRENT_TIMESTAMP())';
        
    //     $result = $db->prepare($sql);
    //     $result->bindParam(':id_user', $_SESSION['user'], PDO::PARAM_INT);
    //     $result->bindParam(':title_report', $array['titleOfPaper'], PDO::PARAM_STR);
        
    //     $result->bindParam(':reportFilePDF', $fPDF, PDO::PARAM_STR);
    //     $result->bindParam(':reportFileDOC', $fDOC, PDO::PARAM_STR);
    //     $result->bindParam(':id_sections', $array['sectionSel'], PDO::PARAM_INT);
    //     $result->bindParam(':id_formParticipation', $array['formParticipationSel'], PDO::PARAM_INT);
    //     $result->bindParam(':id_contentReport', $array['contentsReportSel'], PDO::PARAM_INT);
    //     $result->bindParam(':fio1', $array['fio1'], PDO::PARAM_STR);
        
    //     $univerName1=($array['universityName1']=="0") ? $array['nameOtherUniversity1'] : $array['universityName1'];
    //     $facName1=($array['facultyName1']=="0") ? $array['nameOtherFaculty1'] : $array['facultyName1'];
    //     $univerName2=($array['universityName2']=="0") ? $array['nameOtherUniversity2'] : $array['universityName2'];
    //     if (isset($array['facultyName2'])){
    //         $facName2=($array['facultyName2']=="0") ? $array['nameOtherFaculty2'] : $array['facultyName2'];
    //     }else{
    //         $facName2=NULL;
    //     }
        
    //     //author first
    //     $result->bindParam(':universityName1', $univerName1, PDO::PARAM_STR);
    //     $result->bindParam(':abbreviatureUniver1', $array['abbreviatureUniver1'], PDO::PARAM_STR);
    //     $result->bindParam(':statusAuthor1', $array['statusAuthor1'], PDO::PARAM_INT);
    //     $result->bindParam(':facultyName1', $facName1, PDO::PARAM_STR);
    //     $result->bindParam(':courseAuthor1', $array['courseAuthor1'], PDO::PARAM_INT);
    //     $result->bindParam(':emailAuthor1', $array['emailAuthor1'], PDO::PARAM_STR);
    //     $result->bindParam(':telAuthor1', $array['telAuthor1'], PDO::PARAM_STR);
    //     $result->bindParam(':haveSecondAuthor', $array['haveSecondAuthor'], PDO::PARAM_INT);

    //     //author second
    //     $result->bindParam(':fio2', $array['fio2'], PDO::PARAM_STR);
    //     $result->bindParam(':universityName2', $univerName2, PDO::PARAM_STR);
    //     $result->bindParam(':abbreviatureUniver2', $array['abbreviatureUniver2'], PDO::PARAM_STR);
    //     $result->bindParam(':statusAuthor2', $array['statusAuthor2'], PDO::PARAM_INT);
    //     $result->bindParam(':facultyName2', $facName2, PDO::PARAM_STR);
    //     $result->bindParam(':courseAuthor2', $array['courseAuthor2'], PDO::PARAM_INT);
    //     $result->bindParam(':emailAuthor2', $array['emailAuthor2'], PDO::PARAM_STR);
    //     $result->bindParam(':telAuthor2', $array['telAuthor2'], PDO::PARAM_STR);

    //     //supervisor first
    //     $result->bindParam(':fioSupervisor1', $array['fioSupervisor1'], PDO::PARAM_STR);
    //     $result->bindParam(':scientificDegree1', $array['scientificDegree1'], PDO::PARAM_INT);
    //     $result->bindParam(':academicRanks1', $array['academicRanks1'], PDO::PARAM_INT);
    //     $result->bindParam(':positionSupervisor1', $array['positionSupervisor1'], PDO::PARAM_INT);

    //     $univerNameSup1=($array['universityNameSupervisor1']=="0") ? $array['nameOtherUniversitySupervisor1'] : $array['universityNameSupervisor1'];
    //     $univerNameSup2=($array['universityNameSupervisor2']=="0") ? $array['nameOtherUniversitySupervisor2'] : $array['universityNameSupervisor2'];

    //     $result->bindParam(':universityNameSupervisor1', $univerNameSup1, PDO::PARAM_STR);
    //     $result->bindParam(':departmentSupervisor1', $array['departmentSupervisor1'], PDO::PARAM_STR);
    //     $result->bindParam(':telSupervisor1', $array['telSupervisor1'], PDO::PARAM_STR);
    //     $result->bindParam(':haveSecondSup', $array['haveSecondSup'], PDO::PARAM_INT);

    //     //supervisor second
    //     $result->bindParam(':fioSupervisor2', $array['fioSupervisor2'], PDO::PARAM_STR);
    //     $result->bindParam(':scientificDegree2', $array['scientificDegree2'], PDO::PARAM_INT);
    //     $result->bindParam(':academicRanks2', $array['academicRanks2'], PDO::PARAM_INT);
    //     $result->bindParam(':positionSupervisor2', $array['positionSupervisor2'], PDO::PARAM_INT);
    //     $result->bindParam(':universityNameSupervisor2', $univerNameSup2, PDO::PARAM_STR);
    //     $result->bindParam(':departmentSupervisor2', $array['departmentSupervisor2'], PDO::PARAM_STR);
    //     $result->bindParam(':telSupervisor2', $array['telSupervisor2'], PDO::PARAM_STR);
    //     return $result->execute();
    // }

    // public static function sendMailAboutRegistration($email1, $email2)
    // {
    //     $msg="<div><div><div><h2>Уважаемый участник!<br>Поздравляем! Вы прошли регистрацию!</h2></div><div><h4>LXXIII АПСМиФ 2019 </h4><h4>Оргкомитет</h4></div><div><h3>КОНТАКТЫ:</h3><strong>Председатель СНО БГМУ</strong><br>Давидян Артур Валерьевич<br>
    //                 Телефон: +375-29-980-53-08<br><br><strong>Заместитель председателя СНО БГМУ </strong><br>
    //                 по информационно-издательской и организационной работе<br> Подголина Алена Александровна<br>Телефон: +375-29-586-46-54<br><br><strong>Заместитель председателя СНО БГМУ </strong><br>
    //                 по внутривузовским и межуниверситетским коммуникациям<br>Пристром Игорь Юрьевич<br>Телефон: +375-44-553-44-91<br><br>
    //                 <em>http://sno.bsmu.by<br>E-mail: sno@bsmu.by<br>220116, г. Минск, Республика Беларусь, пр-т. Дзержинского, 83,<br>
    //                 учреждение образования «Белорусский государственный медицинский университет»,<br>Совет Студенческого научного общества</em></div></div>
    //                 <div><div><h2>Dear participant!<br>Congratulations! You have been registered!</h2></div><div><h4>LXXIII APMM&Ph 2019 </h4><h4>Organizing Committee</h4></div><div><h3>CONTACTS:</h3><strong>Chairman of Student Scientific Society of BSMU</strong><br>Davidyan Artur Valerievich<br>Phone: +375-29-980- 53-08<br><br><strong>Vice-Chairman</strong><br>of SSS of BSMU<br>Podgolina Alena Aleksandrovna<br>Phone: +375-29-586-46-54<br><br><strong>Vice-Chairman </strong><br>of the SSS for intra-University and inter-University communications<br>Pristrom Igor Yuryevich<br>Pristrom Igor Yuryevich<br>Phone: +375-44-553-44-91<br><br><em>http://sno.bsmu.by<br>E-mail: sno@bsmu.by<br>220116, Minsk, Republic of Belarus, Dzerzhinsky Av. 83,<br>Belarusian State Medical University,<br>Council of Student Scientific Society</em></div></div></div>";
    //     $emails=array();
    //     if((isset($email2)) && (!empty($email2))){
    //         array_push($emails, $email1, $email2);
    //     }else{
    //         array_push($emails, $email1);
    //     }
    //     foreach ($emails as $email) {
    //         Base::sendMail($email, $msg);
    //     }
    //     return true;
    // }


}