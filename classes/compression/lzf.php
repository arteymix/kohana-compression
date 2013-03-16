<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package Compression
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Compression_LZF extends Compression {

    public function compress($input) {
        return lzf_compress($input);
    }

    public function uncompress($input) {
        return lzf_decompress($input);
    }

}

?>
