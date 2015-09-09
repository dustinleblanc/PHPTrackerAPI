<?php

namespace spec\DustinLeblanc\Pivotal;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProjectSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DustinLeblanc\Pivotal\Project');
    }
}
