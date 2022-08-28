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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\DatabaseManager; use Exception; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\DB; class DatabaseController extends Controller { private $databaseManager; public function __construct(DatabaseManager $databaseManager) { $this->databaseManager = $databaseManager; } public function database() { if ($this->checkDatabaseConnection()) { goto xTuU6; } return redirect()->back()->withErrors(["\144\141\x74\x61\x62\141\163\145\x5f\143\x6f\x6e\156\x65\143\164\151\x6f\156" => trans("\x69\x6e\163\x74\x61\154\154\145\162\x5f\x6d\x65\x73\163\x61\147\145\163\56\x65\x6e\x76\x69\x72\x6f\x6e\x6d\x65\156\164\56\x77\x69\172\141\162\x64\56\146\157\x72\x6d\x2e\144\142\x5f\143\x6f\x6e\x6e\x65\x63\164\151\157\x6e\137\146\x61\151\x6c\x65\144")]); xTuU6: ini_set("\155\141\x78\x5f\x65\170\145\x63\165\164\151\157\156\x5f\x74\151\155\x65", 600); $response = $this->databaseManager->migrateAndSeed(); return redirect()->route("\x49\x6e\x73\x74\x61\154\154\145\x72\56\x66\151\x6e\x61\154")->with(["\155\x65\163\163\141\147\145" => $response]); } private function checkDatabaseConnection() { try { DB::connection()->getPdo(); return true; } catch (Exception $e) { return false; } } }
