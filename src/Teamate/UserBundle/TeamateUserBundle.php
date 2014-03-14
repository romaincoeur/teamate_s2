<?php

namespace Teamate\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TeamateUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}
