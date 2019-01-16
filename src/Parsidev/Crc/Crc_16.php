<?php
namespace Parsidev\Crc;

use Parsidev\Crc\crc8\CRC16_A;
use Parsidev\Crc\crc8\CRC16_ARC;
use Parsidev\Crc\crc8\CRC16_AUG_CCITT;
use Parsidev\Crc\crc8\CRC16_BUYPASS;
use Parsidev\Crc\crc8\CRC16_CCIT_FALSE;
use Parsidev\Crc\crc8\CRC16_CDMA2000;
use Parsidev\Crc\crc8\CRC16_DDS_110;
use Parsidev\Crc\crc8\CRC16_DECT_R;
use Parsidev\Crc\crc8\CRC16_DECT_X;
use Parsidev\Crc\crc8\CRC16_DNP;
use Parsidev\Crc\crc8\CRC16_EN_13757;
use Parsidev\Crc\crc8\CRC16_GENIBUS;
use Parsidev\Crc\crc8\CRC16_KERMIT;
use Parsidev\Crc\crc8\CRC16_MAXIM;
use Parsidev\Crc\crc8\CRC16_MCRF4XX;
use Parsidev\Crc\crc8\CRC16_MODBUS;
use Parsidev\Crc\crc8\CRC16_RIELLO;
use Parsidev\Crc\crc8\CRC16_T10_DIF;
use Parsidev\Crc\crc8\CRC16_TELEDISK;
use Parsidev\Crc\crc8\CRC16_TMS37157;
use Parsidev\Crc\crc8\CRC16_USB;
use Parsidev\Crc\crc8\CRC16_X_25;
use Parsidev\Crc\crc8\CRC16_XMODEM;

class Crc_16
{
    private static function generateCrc($crcParams, $data){
        if ($crcParams->RefIn) {
            $crc = $crcParams->InvertedInit;
        } else {
            $crc = $crcParams->Init;
        }
        if ($crcParams->RefOut) {
            foreach ($data as $d) {
                $crc = $crcParams->Array[($d ^ $crc) & 0xFF] ^ ($crc >> 8 & 0xFF);
            }
        } else {
            foreach ($data as $d) {
                $crc = $crcParams->Array[(($crc >> 8) ^ $d) & 0xFF] ^ ($crc << 8);
            }
        }

        $crc = $crc ^ $crcParams->XorOut;

        return dechex($crc & 0xFFFF);
    }

    public static function computeArc($input){
        return self::generateCrc(CRC16_ARC::get(), $input);
    }
    public static function computeAugCcit($input){
        return self::generateCrc(CRC16_AUG_CCITT::get(), $input);
    }
    public static function computeBuyPass($input){
        return self::generateCrc(CRC16_BUYPASS::get(), $input);
    }
    public static function computeCcitFalse($input){
        return self::generateCrc(CRC16_CCIT_FALSE::get(), $input);
    }
    public static function computeCdma2000($input){
        return self::generateCrc(CRC16_CDMA2000::get(), $input);
    }
    public static function computeDds110($input){
        return self::generateCrc(CRC16_DDS_110::get(), $input);
    }
    public static function computeDectR($input){
        return self::generateCrc(CRC16_DECT_R::get(), $input);
    }
    public static function computeDectX($input){
        return self::generateCrc(CRC16_DECT_X::get(), $input);
    }
    public static function computeDnp($input){
        return self::generateCrc(CRC16_DNP::get(), $input);
    }
    public static function computeEn13757($input){
        return self::generateCrc(CRC16_EN_13757::get(), $input);
    }
    public static function computeGeniBus($input){
        return self::generateCrc(CRC16_GENIBUS::get(), $input);
    }
    public static function computeKermit($input){
        return self::generateCrc(CRC16_KERMIT::get(), $input);
    }
    public static function computeMaxim($input){
        return self::generateCrc(CRC16_MAXIM::get(), $input);
    }
    public static function computeMcrf4xx($input){
        return self::generateCrc(CRC16_MCRF4XX::get(), $input);
    }
    public static function computeModBus($input){
        return self::generateCrc(CRC16_MODBUS::get(), $input);
    }
    public static function computeRiello($input){
        return self::generateCrc(CRC16_RIELLO::get(), $input);
    }
    public static function computeT10Dif($input){
        return self::generateCrc(CRC16_T10_DIF::get(), $input);
    }
    public static function computeTeledisk($input){
        return self::generateCrc(CRC16_TELEDISK::get(), $input);
    }
    public static function computeTms37157($input){
        return self::generateCrc(CRC16_TMS37157::get(), $input);
    }
    public static function computeUsb($input){
        return self::generateCrc(CRC16_USB::get(), $input);
    }
    public static function computeX25($input){
        return self::generateCrc(CRC16_X_25::get(), $input);
    }
    public static function computeXmodem($input){
        return self::generateCrc(CRC16_XMODEM::get(), $input);
    }

    public static function computeA($input){
        return self::generateCrc(CRC16_A::get(), $input);
    }
}
