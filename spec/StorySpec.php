<?php

namespace spec\DustinLeblanc\Pivotal;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DustinLeblanc\Pivotal\Story');
    }
}
