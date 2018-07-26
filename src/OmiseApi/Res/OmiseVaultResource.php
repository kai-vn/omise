<?php

namespace OmiseApi\Res;

use OmiseApi\Res\OmiseApiResource;

class OmiseVaultResource extends OmiseApiResource
{
    /**
     * Returns the public key.
     *
     * @return string
     */
    protected function getResourceKey()
    {
        return $this->_publickey;
    }
}
