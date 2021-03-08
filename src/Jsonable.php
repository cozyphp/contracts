<?php

/**
 * Cozy.Contracts
 *
 * (c) Nestor Picado <info@nestorpicado.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cozy\Contracts;

use JsonException;
use JsonSerializable;

interface Jsonable extends JsonSerializable
{
    /**
     * Convert the current instance to its JSON representation.
     *
     * @param  int           $flags Bitmask consisting of json constants.
     * @throws JsonException
     */
    public function toJson(int $flags = 0): string;
}
