<?php

namespace RectorPrefix20210706\TYPO3\CMS\Extbase\DomainObject;

if (\class_exists('TYPO3\\CMS\\Extbase\\DomainObject\\AbstractDomainObject')) {
    return;
}
class AbstractDomainObject
{
    public function __wakeup()
    {
    }
}
