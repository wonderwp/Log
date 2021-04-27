<?php

namespace WonderWp\Component\Logging;

class VoidLogger extends AbstractLogger implements LoggerInterface
{
    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = [])
    {
        return $this->withTime('[' . strtoupper($level) . ']') . ' ' . $message . PHP_EOL;
    }
}
