<?php

class Compression_Zlib extends Compression {

    public function compress($input) {
        return gzcompress($input);
    }

    public function uncompress($input) {
        return gzuncompress($input);
    }

    public function deflate($input) {
        
    }

    public function inflate($input) {
        
    }

}

?>
