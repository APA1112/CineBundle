<?php

use AppBundle\DependencyInjection\UnconventionalExtensionClass;

class AppBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new UnconventionalExtensionClass();
    }
}