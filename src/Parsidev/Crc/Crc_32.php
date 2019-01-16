<?php

namespace Parsidev\Crc;


use Parsidev\Crc\crc8\CRC32;
use Parsidev\Crc\crc8\CRC32_BZIP2;
use Parsidev\Crc\crc8\CRC32_C;
use Parsidev\Crc\crc8\CRC32_D;
use Parsidev\Crc\crc8\CRC32_JAMCRC;
use Parsidev\Crc\crc8\CRC32_MPEG_2;
use Parsidev\Crc\crc8\CRC32_POSIX;
use Parsidev\Crc\crc8\CRC32_Q;
use Parsidev\Crc\crc8\CRC32_XFER;

class Crc_32
{
    private static function generateCrc($crcParams, $data){
        $crc = $crcParams->Init;

        if ($crcParams->RefOut) {
            foreach ($data as $d) {
                $crc = $crcParams->Array[($d ^ $crc) & 0xFF] ^ ($crc >> 8 & 0xFFFFFF);
            }
        } else {
            foreach ($data as $d) {
                $crc = $crcParams->Array[(($crc >> 24) ^ $d) & 0xFF] ^ ($crc << 8);
            }
        }

        $crc = $crc ^ $crcParams->XorOut;

        return dechex($crc);
    }

    public static function compute($input){
        return self::generateCrc(CRC32::get(), $input);
    }

    public static function computeBzip2($input){
        return self::generateCrc(CRC32_BZIP2::get(), $input);
    }

    public static function computeJamcrc($input){
        return self::generateCrc(CRC32_JAMCRC::get(), $input);
    }

    public static function computeMpeg2($input){
        return self::generateCrc(CRC32_MPEG_2::get(), $input);
    }

    public static function computePosix($input){
        return self::generateCrc(CRC32_POSIX::get(), $input);
    }

    public static function computeXfer($input){
        return self::generateCrc(CRC32_XFER::get(), $input);
    }

    public static function computeC($input){
        return self::generateCrc(CRC32_C::get(), $input);
    }

    public static function computeD($input){
        return self::generateCrc(CRC32_D::get(), $input);
    }

    public static function computeQ($input){
        return self::generateCrc(CRC32_Q::get(), $input);
    }
}
