<?php

namespace Jarves\Twig;

use Jarves\Jarves;
use Jarves\Model\Node;

class GlobalsExtension extends \Twig_Extension
{
    /**
     * @var Jarves
     */
    protected $jarves;

    function __construct(Jarves $jarves)
    {
        $this->jarves = $jarves;
    }

    /**
     * @return \Jarves\Jarves
     */
    public function getJarves()
    {
        return $this->jarves;
    }

    public function getName()
    {
        return 'globals';
    }

    public function getGlobals()
    {
        return array(
            'jarves' => $this->jarves
        );
    }

}