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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Support\Facades\Artisan; use Symfony\Component\Console\Output\BufferedOutput; class FinalInstallManager { public function runFinal() { $outputLog = new BufferedOutput(); $this->generateKey($outputLog); $this->publishVendorAssets($outputLog); return $outputLog->fetch(); } private static function generateKey($outputLog) { try { if (!config("\x69\156\163\164\x61\154\154\145\162\56\x66\x69\156\x61\154\x2e\153\x65\171")) { goto J2UXM; } Artisan::call("\x6b\145\x79\x3a\x67\145\x6e\145\x72\x61\x74\145", ["\55\x2d\x66\x6f\162\x63\145" => true], $outputLog); J2UXM: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function publishVendorAssets($outputLog) { try { if (!config("\x69\156\163\x74\x61\154\x6c\x65\x72\56\146\151\156\141\x6c\x2e\160\x75\x62\x6c\x69\163\x68")) { goto R34_R; } Artisan::call("\166\x65\156\144\x6f\x72\x3a\x70\165\x62\154\x69\x73\x68", ["\x2d\55\x61\154\x6c" => true], $outputLog); R34_R: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function response($message, $outputLog) { return ["\x73\x74\141\x74\x75\163" => "\x65\x72\162\x6f\162", "\155\145\163\x73\x61\x67\x65" => $message, "\x64\142\117\165\x74\x70\165\x74\x4c\157\147" => $outputLog->fetch()]; } }
