<?php

namespace Cozy\Contracts;

interface Stringable
{
    /**
     * Convert the current instance to its string representation.
     *
     * @return string
     */
    public function __toString(): string;
}