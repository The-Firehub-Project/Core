<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Initializers
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Initializers\Exceptions;

use FireHub\Core\Components\Error\Exception;

/**
 * ### Cache PHP extension not loaded exception
 * @since 1.0.0
 *
 * @method $this withExtension (string $extension) ### Extension
 */
class CacheExtensionNotLoadedException extends Exception {

    /**
     * ### Extension
     * @since 1.0.0
     *
     * @var null|non-empty-string
     */
    public ?string $extension = null {
        set {
            $this->extension = $value;
            $this->appendMessage("Needed extension: {$this->extension}.");
        }
    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function __construct () {

        parent::__construct();

        $this->message = 'Necessary PHP extension is not loaded.';

    }

}