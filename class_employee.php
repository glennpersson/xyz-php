<?php
/**
 * Created by PhpStorm.
 * User: glp
 * Date: 2015-03-27
 * Time: 16:28
 */

include_once('class_settings.php');

class Employee {

    public function GetAsJson($employeeId) {
        include_once('class_settings.php');

        try {
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, Settings::$baseurl. "employees/". $employeeId);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 1);

            $jsonResponse = curl_exec($ch);
            return json_decode($jsonResponse);
        }
        catch (Exception $e) {
            echo "error";
        }
    }
}