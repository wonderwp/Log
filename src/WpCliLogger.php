<?php

namespace WonderWp\Component\Logging;

class WpCliLogger extends AbstractLogger implements LoggerInterface
{
    public function error($message, array $context = [])
    {
        $exit = $context['exit'] ?? true;
        \WP_CLI::error($this->withTime($message), $exit);
    }

    public function warning($message, array $context = [])
    {
        \WP_CLI::warning($this->withTime($message));
    }

    public function success($message, array $context = [])
    {
        \WP_CLI::success($this->withTime($message));
    }

    public function debug($message, array $context = [])
    {
        \WP_CLI::debug($this->withTime($message));
    }

    public function log($level, $message, array $context = [])
    {
        \WP_CLI::log($this->withTime($message));
    }

}
