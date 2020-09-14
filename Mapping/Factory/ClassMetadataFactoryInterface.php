<?php

namespace GetInfoTeam\SerializerExtraBundle\Mapping\Factory;

use GetInfoTeam\SerializerExtraBundle\Mapping\ClassMetadataInterface;

interface ClassMetadataFactoryInterface
{
    /**
     * @param string|object $value
     * @return ClassMetadataInterface
     */
    public function getMetadataFor($value): ClassMetadataInterface;
}