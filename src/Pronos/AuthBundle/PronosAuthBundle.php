<?php

namespace Pronos\AuthBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PronosAuthBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
