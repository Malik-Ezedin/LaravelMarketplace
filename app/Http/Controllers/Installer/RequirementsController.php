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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\RequirementsChecker; use Illuminate\Routing\Controller; class RequirementsController extends Controller { protected $requirements; public function __construct(RequirementsChecker $checker) { $this->requirements = $checker; } public function requirements() { $phpSupportInfo = $this->requirements->checkPHPversion(config("\151\156\163\164\141\154\154\x65\x72\56\x63\x6f\162\145\56\x6d\151\156\120\150\x70\126\145\162\x73\151\157\156"), config("\x69\x6e\163\164\141\154\154\145\162\56\x63\x6f\162\145\56\155\141\170\120\150\160\x56\145\x72\163\x69\157\x6e")); $requirements = $this->requirements->check(config("\x69\x6e\163\x74\141\154\154\x65\x72\56\x72\x65\x71\165\x69\162\x65\155\x65\156\x74\x73")); return view("\151\156\163\x74\141\154\154\x65\162\x2e\162\145\x71\x75\x69\162\x65\155\145\156\x74\x73", compact("\162\x65\x71\165\x69\162\x65\155\x65\x6e\164\x73", "\160\150\160\123\x75\160\x70\x6f\x72\x74\111\x6e\x66\157")); } }
