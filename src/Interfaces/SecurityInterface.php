<?php
namespace CarloNicora\Minimalism\Interfaces\Security\Interfaces;

interface SecurityInterface
{
    /**
     * @param string|null $verb
     * @param string|null $uri
     * @param array|null $body
     * @return bool
     */
    public function isSignatureValid(
        ?string $verb=null,
        ?string $uri=null,
        ?array $body=null,
    ) : bool;
}