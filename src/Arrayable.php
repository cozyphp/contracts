<?php

namespace Cozy\Contracts;

interface Arrayable
{
    /**
     * Convert the current instance to its array representation.
     *
     * @return array
     */
    public function toArray(): array;
}