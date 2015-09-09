<?php

namespace spec\DustinLeblanc\Pivotal;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PivotalSpec extends ObjectBehavior
{
    function let($api_key)
    {
        $this->beConstructedWith($api_key);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('DustinLeblanc\Pivotal\Pivotal');
    }

    function it_returns_an_instance_of_story()
    {
        $this->getStory('123456')->shouldReturnAnInstanceOf('DustinLeblanc\Pivotal\Story');
    }

}
