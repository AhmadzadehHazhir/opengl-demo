<?php

/**
 * This file is part of Battleground package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\Bic\Progress;

/**
 * Interface LoadingInterface
 */
interface LoadingInterface
{
    /**
     * @return string|null
     */
    public function next(): ?string;

    /**
     * @return bool
     */
    public function isCompleted(): bool;

    /**
     * @return mixed
     */
    public function result();
}
