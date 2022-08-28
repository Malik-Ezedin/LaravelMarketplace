<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-08-12 09:43:46              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Http\Request; class EnvironmentManager { private $envPath; private $envExamplePath; public function __construct() { $this->envPath = base_path("\x2e\145\x6e\166"); $this->envExamplePath = base_path("\x2e\x65\156\x76\56\x65\x78\x61\x6d\160\154\145"); } public function getEnvContent() { if (file_exists($this->envPath)) { goto tOk8_; } if (file_exists($this->envExamplePath)) { goto mIEUJ; } touch($this->envPath); goto rq1Pp; mIEUJ: copy($this->envExamplePath, $this->envPath); rq1Pp: tOk8_: return file_get_contents($this->envPath); } public function getEnvPath() { return $this->envPath; } public function getEnvExamplePath() { return $this->envExamplePath; } public function saveFileClassic(Request $input) { $message = trans("\x69\156\x73\164\141\154\x6c\145\162\137\x6d\x65\x73\163\x61\x67\145\163\x2e\145\x6e\166\x69\x72\x6f\156\155\x65\156\164\56\163\165\x63\x63\145\x73\x73"); try { file_put_contents($this->envPath, $input->get("\145\156\x76\103\157\156\x66\151\147")); } catch (Exception $e) { $message = trans("\x69\156\163\164\x61\x6c\154\145\x72\137\x6d\x65\x73\x73\141\147\145\163\56\145\156\166\151\162\157\156\155\x65\156\x74\x2e\x65\x72\162\157\162\163"); } return $message; } }
