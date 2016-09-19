<?php

/*
 * This file is part of the Word wrap helper
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WordWrapHelper;

class WordFormatter {    

    /**
     * @param string $content     
     * @param int    $width [Optional]
     * @param string $break [Optional]
     * @param bool   $cut [Optional]
     * 
     * @return string
     */
    public function wrap($content, $width = 75, $break = "\n", $cut = false) {

        if(!empty($content))
        {
            return wordwrap($content, $width, $break, $cut);
        }
        
        return $content;
    }
    
}