<?php

ini_set('error_reporting',0);


        $uno = "Registered: ".$_POST['registered'];
        $dos = "Trading name: ".$_POST['trading_name'];
        $tres = "ABN: ".$_POST['elabn'];
        $cuatro = "Full name: ".$_POST['full_name'];
        $cinco = "Date of birth: ".$_POST['date_of_birth'];
        $seis = "Phone number: ".$_POST['phone_number'];
        $siete = "Address: ".$_POST['address'];
        $ocho = "Tax file: ".$_POST['tax_file'];
        $nueve = "Date employment: ".$_POST['date_employment'];
        $diez = "Ongoing: ".$_POST['Ongoing'];
        $once = "Temporary: ".$_POST['Temporary'];
        $doce = "Otro: ".$_POST['Other1'];
        $trece = "Otras causas: ".$_POST['status1'];
        $catorce = "Full-time: ".$_POST['Full_time'];
        $quince = "Part-time: ".$_POST['Part_time'];
        $dieciseis = "Casual: ".$_POST['Casual'];
        $diecisiete = "Otro: ".$_POST['Other2'];
        $dieciocho = "Otras causas: ".$_POST['status2'];
        $diecinueve = "Ordinary hours of work: ".$_POST['ordinary_hours'];
        $veiente = "method of pay: ".$_POST['method_of_pay'];
        $veintiuno = "pay period: ".$_POST['pay_period'];
        $veintidos = "pay day: ".$_POST['pay_day'];
        $veintitres = "Apprenticeship/Traineeship: ".$_POST['apprenticeship'];
        $veinticuatro = "Name of Award or Agreement that: ".$_POST['name_of_award'];
        $veinticinco = "Classification/job title under the".$_POST['classification'];


$file = fopen("Employee".$_POST['address'].".txt", "a") or die("Error al crear el archivo");



fwrite($file, "Datos:");
fwrite($file, "\r\n");
fwrite($file,$uno);
fwrite($file, "\r\n");
fwrite($file, $dos);
fwrite($file, "\r\n");
fwrite($file, $tres);
fwrite($file, "\r\n");
fwrite($file, $cuatro);
fwrite($file, "\r\n");
fwrite($file, $cinco);
fwrite($file, "\r\n");
fwrite($file, $seis);
fwrite($file, "\r\n");
fwrite($file, $siete);
fwrite($file, "\r\n");
fwrite($file, $ocho);
fwrite($file, "\r\n");
fwrite($file, $nueve);
fwrite($file, "\r\n");
fwrite($file, $diez);
fwrite($file, "\r\n");
fwrite($file, $once);
fwrite($file, "\r\n");
fwrite($file, $doce);
fwrite($file, "\r\n");
fwrite($file, $trece);
fwrite($file, "\r\n");
fwrite($file, $catorce);
fwrite($file, "\r\n");
fwrite($file, $quince);
fwrite($file, "\r\n");
fwrite($file, $dieciseis);
fwrite($file, "\r\n");
fwrite($file, $diecisiete);
fwrite($file, "\r\n");
fwrite($file, $dieciocho);
fwrite($file, "\r\n");
fwrite($file, $diecinueve);
fwrite($file, "\r\n");
fwrite($file, $veiente);
fwrite($file, "\r\n");
fwrite($file, $veintiuno);
fwrite($file, "\r\n");
fwrite($file, $veintidos);
fwrite($file, "\r\n");
fwrite($file, $veintitres);
fwrite($file, "\r\n");
fwrite($file, $veinticuatro);
fwrite($file, "\r\n");
fwrite($file, $veinticinco);
fwrite($file, "\r\n");

fwrite($file, "--------------------------------------------------");
fwrite($file, "\r\n");
fclose($file);
echo 'Datos ingresados con exito';
