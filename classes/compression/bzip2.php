<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package Compression
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Compression_Bzip2 extends Compression {

    public function compress($input) {
        return bzcompress($input);
    }

    public function uncompress($input) {
        return bzdecompress($input);
    }

}

?>
