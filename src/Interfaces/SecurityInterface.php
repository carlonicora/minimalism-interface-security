<?php
namespace CarloNicora\Minimalism\Interfaces\Security\Interfaces;

use CarloNicora\Minimalism\Interfaces\ServiceInterface;

interface SecurityInterface extends ServiceInterface
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