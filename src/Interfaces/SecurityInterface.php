<?php
namespace CarloNicora\Minimalism\Interfaces\Security\Interfaces;

interface SecurityInterface
{
    /**
     * @param string $verb
     * @param string $uri
     * @param array|null $body
     * @return bool
     */
    public function isSignatureValid(
        string $verb,
        string $uri,
        array $body=null,
    ) : bool;
}