<?php

namespace Adim\UserBundle;
 
use Symfony\Component\HttpKernel\Bundle\Bundle;
 
class AdimUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}