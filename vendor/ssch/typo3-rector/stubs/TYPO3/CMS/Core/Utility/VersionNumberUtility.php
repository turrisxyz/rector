<?php

namespace RectorPrefix20210706\TYPO3\CMS\Core\Utility;

if (\class_exists('TYPO3\\CMS\\Core\\Utility\\VersionNumberUtility')) {
    return;
}
class VersionNumberUtility
{
    /**
     * @return int
     */
    public static function convertVersionNumberToInteger($verNumberStr)
    {
        return 1;
    }
}
