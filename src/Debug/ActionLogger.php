<?php

// -*- coding: utf-8 -*-

declare(strict_types=1);

namespace Inpsyde\WpStash\Debug;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class ActionLogger implements LoggerInterface
{
    use LoggerTrait;

    public const ACTION = 'wp-stash';

    private $additionalInfo;

    public function __construct(array $additionalInfo = [])
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * phpcs:disable Inpsyde.CodeQuality.ArgumentTypeDeclaration.NoArgumentType
     * @param mixed $level
     * @param string $message
     * @param array $context
     */
    public function log($level, $message, array $context = [])
    {
        do_action(self::ACTION . strtolower($level), $message, $context + $this->additionalInfo);
    }
}
