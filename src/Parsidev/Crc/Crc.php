<?php

namespace Parsidev\Crc;

class Crc{

    private $crc8;
    private $crc16;
    private $crc32;

    public function __construct()
    {
        $this->crc8 = new Crc_8();
        $this->crc16 = new Crc_16();
        $this->crc32 = new Crc_32();
    }


    public function crc8($input){
        return $this->crc8::compute($input);
    }

    public function crc8Cdma2000($input){
        return $this->crc8::computeCdma2000($input);
    }

    public function crc8Darc($input){
        return $this->crc8::computeDarc($input);
    }

    public function crc8DvbS2($input){
        return $this->crc8::computeDvbS2($input);
    }

    public function crc8Ebu($input){
        return $this->crc8::computeEbu($input);
    }

    public function crc8ICode($input){
        return $this->crc8::computeICode($input);
    }

    public function crc8Itu($input){
        return $this->crc8::computeItu($input);
    }

    public function crc8Maxim($input){
        return $this->crc8::computeMaxim($input);
    }

    public function crc8Rohc($input){
        return $this->crc8::computeRohc($input);
    }

    public function crc8Wcdma($input){
        return $this->crc8::computeWcdma($input);
    }

    public function crc16Arc($input){
        return $this->crc16::computeArc($input);
    }

    public function crc16AugCcit($input){
        return $this->crc16::computeAugCcit($input);
    }

    public function crc16BuyPass($input){
        return $this->crc16::computeBuyPass($input);
    }

    public function crc16CcitFalse($input){
        return $this->crc16::computeCcitFalse($input);
    }

    public function crc16Cdma2000($input){
        return $this->crc16::computeCdma2000($input);
    }

    public function crc16Dds110($input){
        return $this->crc16::computeDds110($input);
    }

    public function crc16DecR($input){
        return $this->crc16::computeDectR($input);
    }

    public function crc16Dectx($input){
        return $this->crc16::computeDectX($input);
    }

    public function crc16Dnp($input){
        return $this->crc16::computeDnp($input);
    }

    public function crc16En13757($input){
        return $this->crc16::computeEn13757($input);
    }

    public function crc16GeniBus($input){
        return $this->crc16::computeGeniBus($input);
    }

    public function crc16Kermit($input){
        return $this->crc16::computeKermit($input);
    }

    public function crc16Maxim($input){
        return $this->crc16::computeMaxim($input);
    }

    public function crc16Mcrf4xx($input){
        return $this->crc16::computeMcrf4xx($input);
    }

    public function crc16ModBus($input){
        return $this->crc16::computeModBus($input);
    }

    public function crc16Riello($input){
        return $this->crc16::computeRiello($input);
    }

    public function crc16T10Dif($input){
        return $this->crc16::computeT10Dif($input);
    }

    public function crc16Teledist($input){
        return $this->crc16::computeTeledisk($input);
    }

    public function crc16Tms37157($input){
        return $this->crc16::computeTms37157($input);
    }

    public function crc16Usb($input){
        return $this->crc16::computeUsb($input);
    }

    public function crc16X25($input){
        return $this->crc16::computeX25($input);
    }

    public function crc16XModem($input){
        return $this->crc16::computeXmodem($input);
    }

    public function crc16A($input){
        return $this->crc16::computeA($input);
    }

    public function crc32($input){
        return $this->crc32::compute($input);
    }

    public function crc32Bzip2($input){
        return $this->crc32::computeBzip2($input);
    }

    public function crc32Jamcrc($input){
        return $this->crc32::computeJamcrc($input);
    }

    public function crc32Mpeg2($input){
        return $this->crc32::computeMpeg2($input);
    }

    public function crc32Posix($input){
        return $this->crc32::computePosix($input);
    }

    public function crc32Xfer($input){
        return $this->crc32::computeXfer($input);
    }

    public function crc32C($input){
        return $this->crc32::computeC($input);
    }

    public function crc32D($input){
        return $this->crc32::computeD($input);
    }

    public function crc32Q($input){
        return $this->crc32::computeQ($input);
    }


}
