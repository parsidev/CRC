<?php

namespace Parsidev\Crc;
use Parsidev\Crc\crc8\CRC8;
use Parsidev\Crc\crc8\CRC8_CDMA2000;
use Parsidev\Crc\crc8\CRC8_DARC;
use Parsidev\Crc\crc8\CRC8_DVB_S2;
use Parsidev\Crc\crc8\CRC8_EBU;
use Parsidev\Crc\crc8\CRC8_I_CODE;
use Parsidev\Crc\crc8\CRC8_ITU;
use Parsidev\Crc\crc8\CRC8_MAXIM;
use Parsidev\Crc\crc8\CRC8_ROHC;
use Parsidev\Crc\crc8\CRC8_WCDMA;

class Crc_8
{
    private static function generateCRC($crcParams, $data){
        $crc = $crcParams->Init;
        foreach ($data as $d) {
            $crc = $crcParams->Array[$d ^ $crc];
        }

        $crc = $crc ^ $crcParams->XorOut;
        return dechex($crc & 0xFF);
    }

    public static function compute($input){
        return self::generateCRC(CRC8::get(), $input);
    }

    public static function computeCdma2000($input){
        return self::generateCRC(CRC8_CDMA2000::get(), $input);
    }

    public static function computeDarc($input){
        return self::generateCRC(CRC8_DARC::get(),$input);
    }

    public static function computeDvbS2($input){
        return self::generateCRC(CRC8_DVB_S2::get(),$input);
    }

    public static function computeEbu($input){
        return self::generateCRC(CRC8_EBU::get(), $input);
    }

    public static function computeICode($input){
        return self::generateCRC(CRC8_I_CODE::get(), $input);
    }

    public static function computeItu($input){
        return self::generateCRC(CRC8_ITU::get(), $input);
    }

    public static function computeMaxim($input){
        return self::generateCRC(CRC8_MAXIM::get(), $input);
    }

    public static function computeRohc($input){
        return self::generateCRC(CRC8_ROHC::get(), $input);
    }

    public static function computeWcdma($input){
        return self::generateCRC(CRC8_WCDMA::get(), $input);
    }

}
