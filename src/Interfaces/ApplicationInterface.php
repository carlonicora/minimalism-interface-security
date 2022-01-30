<?php
namespace CarloNicora\Minimalism\Interfaces\Security\Interfaces;

interface ApplicationInterface
{
    /**
     * @return int
     */
    public function getId(
    ): int;

    /**
     * @return string
     */
    public function getName(
    ): string;
}