<?php

declare(strict_types=1);

namespace okpt\my\web\page\Command\Xi\Umantis1\Internet;

use Pwrk\Controller\Service\RawService;
use Pwrk\Xi\Ergo\Munichre\Bsc\Command\Xi\Basic\BasicImport;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;

use function json_encode;
use function print_r;

#[AsCommand(
    name: 'xi:ergo:umt1:inter:fetchList',
    description: 'Abstracte Kommando für die Import von Jobs aus Umantis Import',
    aliases: [],
    hidden: false,
)]

class Umantis1Import extends BasicImport
{
    const OPTION_FULLIMPORT_AKTIVE = 'on';
    const OPTION_FULLIMPORT_INAKTIVE = 'off';
    const OPTION_FULLIMPORT_DEFAULT = self::OPTION_FULLIMPORT_INAKTIVE;
    const OPTION_FULLIMPORT = 'fullImport';

    public function getCommandName(): string
    {
        return 'xi:ergo:umt1:inter:fetchList';
    }

    protected function configure()
    {
        parent::configure();

        $this->addOption(
            static::OPTION_FULLIMPORT,
            '',
            InputArgument::OPTIONAL,
            'soll ein voller Import ausgeführt werden',
            static::OPTION_FULLIMPORT_DEFAULT,
        );
    }

    protected function worke()
    {
        //$this->xmlUrl = $_ENV['IMPORTER_ERGO_UMANTIS_1_IMPORT_XML_URL'];
        $this->xmlElementName = 'Job';
        $this->theirIdField = 'jobid';

        /*
        //$parameter = RawService::DEFAULT_STORE_RAW_PARAMETER;
        if (
            $this->input->hasOption(static::OPTION_FULLIMPORT) &&
            $this->input->getOption(static::OPTION_FULLIMPORT) == static::OPTION_FULLIMPORT_AKTIVE
        ) {
            //$parameter .= ' --' . static::OPTION_FULLIMPORT . '=' . static::OPTION_FULLIMPORT_AKTIVE;
        }

                //$xml_content = file_get_contents(__DIR__.'/file');

                //$jobList = $this->getJobsViaXML('GET');

                //file_put_contents( __DIR__.'/file.json', json_encode($this->getJobsViaXML('GET')));

                $count = 0;
        foreach ($jobList as $job) {
            print_r($job);
            $this->storeRAW(json_encode($job), 'xi:ergo:umt1:inter:check:custum:stuctur', $parameter);
            $count++;
            if ($count == 1) {
                break;
            }
        }*/
    }
}
