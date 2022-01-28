<?php
namespace CarloNicora\Minimalism\Interfaces\Security\Interfaces;

interface SecurityInterface
{
    /**
     * @return int|null
     */
    public function getUserId(
    ): ?int;

    /**
     * @return bool|null
     */
    public function isUser(
    ): ?bool;
}