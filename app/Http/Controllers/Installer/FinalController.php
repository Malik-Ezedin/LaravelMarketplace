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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\DatabaseManager; use App\Http\Controllers\Installer\Helpers\EnvironmentManager; use App\Http\Controllers\Installer\Helpers\FinalInstallManager; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; use Illuminate\Routing\Controller; class FinalController extends Controller { public function final(FinalInstallManager $finalInstall, EnvironmentManager $environment) { $finalMessages = $finalInstall->runFinal(); $finalEnvFile = $environment->getEnvContent(); return view("\x69\x6e\163\164\x61\154\154\145\x72\x2e\x66\151\156\x69\163\x68\x65\x64", compact("\146\x69\156\141\x6c\115\145\x73\163\x61\147\145\163", "\x66\x69\156\141\154\105\156\166\x46\151\x6c\145")); } public function seedDemo(DatabaseManager $databaseManager) { $response = $databaseManager->seedDemoData(); return redirect()->route("\x49\x6e\163\164\141\154\154\145\x72\56\146\151\x6e\151\163\x68"); } public function finish(InstalledFileManager $fileManager) { $finalStatusMessage = $fileManager->update(); return redirect()->to(config("\x69\156\x73\x74\x61\154\154\145\x72\x2e\x72\145\x64\151\x72\x65\143\x74\125\162\x6c"))->with("\155\145\163\163\x61\x67\x65", $finalStatusMessage); } }
