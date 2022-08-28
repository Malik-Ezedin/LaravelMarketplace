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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\EnvironmentManager; use Illuminate\Http\Request; use Illuminate\Routing\Controller; use Illuminate\Routing\Redirector; use Validator; class EnvironmentController extends Controller { protected $EnvironmentManager; public function __construct(EnvironmentManager $environmentManager) { $this->EnvironmentManager = $environmentManager; } public function environmentMenu() { return view("\151\x6e\x73\164\x61\x6c\x6c\145\162\56\145\x6e\x76\x69\x72\157\156\155\x65\x6e\x74"); } public function environmentWizard() { } public function environmentClassic() { $envConfig = $this->EnvironmentManager->getEnvContent(); return view("\151\156\163\164\141\154\154\145\162\56\145\x6e\x76\x69\162\x6f\156\155\145\156\164\55\x63\154\141\163\163\151\143", compact("\145\x6e\166\x43\x6f\x6e\146\x69\x67")); } public function saveClassic(Request $input, Redirector $redirect) { $message = $this->EnvironmentManager->saveFileClassic($input); return $redirect->route("\x49\156\163\x74\141\154\154\x65\x72\56\x65\x6e\166\x69\x72\x6f\156\155\x65\156\x74\103\x6c\x61\163\163\x69\x63")->with(["\155\x65\163\163\141\x67\x65" => $message]); } }
