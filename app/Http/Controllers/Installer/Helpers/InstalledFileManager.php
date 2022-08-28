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
 namespace App\Http\Controllers\Installer\Helpers; class InstalledFileManager { public function create() { $installedLogFile = storage_path("\151\156\x73\x74\x61\x6c\x6c\145\x64"); $dateStamp = date("\131\57\155\x2f\x64\40\x68\72\x69\x3a\163\x61"); if (!file_exists($installedLogFile)) { goto O6jKY; } $message = trans("\151\156\x73\164\x61\x6c\154\145\162\137\155\x65\163\163\x61\x67\x65\x73\x2e\x75\x70\144\x61\164\x65\162\56\x6c\x6f\x67\x2e\163\x75\143\143\145\x73\x73\137\155\x65\x73\x73\141\x67\x65") . $dateStamp; file_put_contents($installedLogFile, $message . PHP_EOL, FILE_APPEND | LOCK_EX); goto A_UJn; O6jKY: $message = trans("\x69\x6e\163\164\141\x6c\x6c\145\162\x5f\x6d\x65\163\x73\141\147\x65\x73\56\x69\x6e\163\x74\x61\x6c\x6c\x65\x64\x2e\163\165\143\143\145\163\x73\137\x6c\157\x67\137\x6d\x65\x73\x73\x61\x67\145") . $dateStamp . "\12"; file_put_contents($installedLogFile, $message); A_UJn: return $message; } public function update() { return $this->create(); } }
