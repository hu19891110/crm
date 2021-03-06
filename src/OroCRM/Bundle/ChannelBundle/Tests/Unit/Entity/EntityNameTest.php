<?php

namespace OroCRM\Bundle\ChannelBundle\Tests\Unit\Entity;

class EntityNameTest extends AbstractEntityTestCase
{
    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $name         = $this->getEntityFQCN();
        $this->entity = unserialize(sprintf('O:%d:"%s":0:{}', strlen($name), $name));
    }

    /**
     * {@inheritDoc}
     */
    public function getDataProvider()
    {
        $channel = $this->getMock('OroCRM\Bundle\ChannelBundle\Entity\Channel');
        $name   = 'testName';

        return [
            'name'   => ['name', $name, $name],
            'channel' => ['channel', $channel, $channel],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityFQCN()
    {
        return 'OroCRM\Bundle\ChannelBundle\Entity\EntityName';
    }
}
