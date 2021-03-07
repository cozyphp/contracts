<?php

namespace Cozy\Contracts;

use JsonException;
use JsonSerializable;

interface Jsonable extends JsonSerializable
{
    /**
     * Convert the current instance to its JSON representation.
     *
     * @param  int  $flags Bitmask consisting of json constants.
     * @return string
     * @throws JsonException
     */
    public function toJson(int $flags = 0): string;
}