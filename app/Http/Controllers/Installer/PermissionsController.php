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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\PermissionsChecker; use App\Http\Requests; use Illuminate\Routing\Controller; class PermissionsController extends Controller { protected $permissions; public function __construct(PermissionsChecker $checker) { $this->permissions = $checker; } public function permissions() { $permissions = $this->permissions->check(config("\151\x6e\x73\164\x61\x6c\x6c\145\x72\56\160\145\162\155\x69\x73\163\x69\x6f\x6e\163")); return view("\151\156\x73\x74\x61\154\x6c\145\162\56\160\145\x72\155\x69\163\x73\151\x6f\156\163", compact("\x70\145\x72\155\151\163\163\x69\x6f\156\x73")); } }
