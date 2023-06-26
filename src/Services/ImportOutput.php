<?php

declare(strict_types=1);

namespace okpt\my\web\page\Services;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\ConsoleOutput;

use function fflush;
use function file_put_contents;
use function fwrite;
use function preg_replace;

use const FILE_APPEND;
use const PHP_EOL;

final class ImportOutput extends ConsoleOutput
{
    private $logPath = '';

    public function __construct(
        string $importLogPath,
        int $verbosity = self::VERBOSITY_NORMAL,
        ?bool $decorated = null,
        ?OutputFormatterInterface $formatter = null,
    ) {
        parent::__construct($verbosity, $decorated, $formatter);

        $this->logPath = $importLogPath;
    }

    protected function doWrite(string $message, bool $newline): void
    {
        if ($newline) {
            $message .= PHP_EOL;
        }

        @fwrite($this->getStream(), $message);

        fflush($this->getStream());

        file_put_contents($this->logPath, preg_replace('#\\x1b[[][^A-Za-z]*[A-Za-z]#', '', $message), FILE_APPEND);
    }
}
