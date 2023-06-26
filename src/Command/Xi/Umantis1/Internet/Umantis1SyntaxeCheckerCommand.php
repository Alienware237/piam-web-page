<?php

declare(strict_types=1);

namespace okpt\my\web\page\Command\Xi\Umantis1\Internet;

use DateTime;
use Pwrk\Controller\Service\RawServiceInterface;
use Pwrk\Xi\Ergo\Munichre\Bsc\Command\Xi\Basic\BasicImport;
use Symfony\Component\Console\Attribute\AsCommand;

use function count;
use function hash;
use function implode;
use function is_array;
use function is_integer;
use function json_decode;
use function json_encode;
use function serialize;
use function trim;

#[AsCommand(
    name: 'xi:ergo:umt1:inter:check:custum:stuctur',
    description: 'Abstracte Kommando für die syntaktische Prüfung von Jobs aus Umantis Import',
    aliases: [],
    hidden: false,
)]

class Umantis1SyntaxeCheckerCommand extends BasicImport
{
    public const OPTION_FULLIMPORT_AKTIVE = 'on';
    public const OPTION_FULLIMPORT_INAKTIVE = 'off';
    public const OPTION_FULLIMPORT_DEFAULT = self::OPTION_FULLIMPORT_INAKTIVE;
    public const OPTION_FULLIMPORT = 'fullImport';

    public function getCommandName(): string
    {
        return 'my:web:page:check:custum:stuctur';
    }

    protected function configure()
    {
        parent::configure();
    }

    protected function worke()
    {
        //$this->checkQuality(json_decode($this->raw, true));
    }

    public function store(array $toBeStoreJob)
    {
        if (empty($skipError)) {
            $parameter = RawServiceInterface::DEFAULT_STORE_RAW_PARAMETER;
            if (
                $this->input->hasOption(static::OPTION_FULLIMPORT) &&
                $this->input->getOption(static::OPTION_FULLIMPORT) == static::OPTION_FULLIMPORT_AKTIVE
            ) {
                $parameter .= ' --' . static::OPTION_FULLIMPORT . '=' . static::OPTION_FULLIMPORT_AKTIVE;
            }

            $toBeStoreJob['publishData'] = new DateTime();

            $remoteJob = json_encode($toBeStoreJob);
            $this->storeRAW($remoteJob, 'xi:ergo:umt1:inter:send:job', $parameter);
        }
    }

    /**
     * @param $remoteJob Job
     */
    protected function checkQuality($remoteJob)
    {
        echo 'checkQuality';
        // Define the nodes to check
        $checkGroup = [
            'general' => [
                'list' => [
                    'jobid' => 'jobid',
                    'bewerbenlink' => 'bewerbenlink',
                    'standorte' => 'standorte',
                    'einstiegslevel' => 'einstiegslevel',
                    'einleitungstext' => 'einleitungstext',
                    'stellentitel' => 'stellentitel',
                    'wirsuchen' => 'wirsuchen',
                    'titelaufgaben' => 'titelaufgaben',
                    'textaufgaben' => 'textaufgaben',
                    'titelprofil' => 'textprofil',
                    'abspann' => 'abspann',
                    'zielgruppenansprache' => 'zielgruppenansprache',
                    'publikation' => 'publikation',
                ],
            ],
        ];

        // Parse every job

            $skipError = [];
            // Perform every node check defined at $checkItem
        foreach ($checkGroup as $checkIndex => $checkItem) {
            // Check node with sub-levels
            if (isset($checkItem['primary']) && isset($checkItem['secondary'])) {
                $primary = $checkItem['primary'];
                $secondary = $checkItem['secondary'];
                $key = $checkItem['key'];

                if (!isset($remoteJob[$primary][$secondary])) {
                    $skipError[$checkIndex] = "'$checkIndex' not found";
                } else {
                    // Convert the keys from every checked node
                    $sortedFields = $this->sortCustomFields($remoteJob[$primary][$secondary], $key);

                    // Add to skipError jobs without mandatory fields
                    if (isset($checkItem['list'])) {
                        foreach ($checkItem['list'] as $checkSubIndex => $checkSubItem) {
                            if (is_array($checkSubItem)) {
                                $approved = 0;
                                $foundValues = 0;

                                foreach ($checkSubItem['values'] as $checkValue) {
                                    if (isset($sortedFields[$checkValue])) {
                                        ++$foundValues;
                                    }
                                }

                                if (
                                    $checkSubItem['operator'] == 'AND' &&
                                    $foundValues == count($checkSubItem['values'])
                                ) {
                                    $approved = 1;
                                }
                                if ($checkSubItem['operator'] == 'OR' && $foundValues > 0) {
                                    $approved = 1;
                                }

                                // By not aproved (0) skip the job
                                if ($approved == 0) {
                                    $skipError["$checkIndex.$checkSubIndex"] = "'" .
                                        $checkSubItem['message'] . "' not defined";
                                }
                            } elseif (!isset($sortedFields[$checkSubIndex])) {
                                $skipError["$checkIndex.$checkSubIndex"] = "'$checkSubItem' not defined";
                            }
                        }
                    }
                }
                // Check node without sub-levels
            } else {
                foreach ($checkItem['list'] as $checkSubIndex => $checkSubItem) {
                    if (empty($remoteJob[$checkSubIndex])) {
                        $skipError[$checkSubIndex] = "'$checkSubItem' empty";
                    }

                    if (!isset($remoteJob[$checkSubIndex])) {
                        $skipError[$checkSubIndex] = "'$checkSubItem' not found";
                    }
                }
            }
        }

            // Check the existence of the jobNumber
        if (!isset($remoteJob['jobid'])) {
            $skipError['jobId'] = 'jobNumber not found';
        }

        foreach ($skipError as $error) {
            echo " error: " . $error;
            echo "\n";
        }

        //Job is syntactically correct
        $this->store($remoteJob);
            //$resp = $this->getRawService()->storeJob('xi.ergo.umt1.inter', $remoteJob);
        //$response = $this->getRawService()->storeXI('xi:ergo:umt1:inter', 'obj', $remoteJob['jobid'], $remoteJob);
        //$res = $this->getRawService()->gotXI('xi:ergo:umt1:inter', 'obj', $remoteJob['jobid']);
    }

    /**
     * Sort the custom fields.
     *
     * @param string[] $customFields
     * @param string   $key
     * @param string   $value
     *
     * @return string[]
     */
    protected function sortCustomFields($customFields, $key, $value = null)
    {
        $newCustomFields = [];
        foreach ($customFields as $customFieldKey => $customField) {
            if (is_integer($customFieldKey)) {
                if (is_array($customField[$key])) {
                    $customField[$key] = implode(',', $customField[$key]);
                }

                if (isset($value)) {
                    $newCustomFields[trim($customField[$key])] = $customField[$value];
                } else {
                    $newCustomFields[trim($customField[$key])] = $customField;
                }
            } else {
                // If only one is present in array
                if ($customFieldKey == $key) {
                    //Save the complete array to the field as key specified in $key
                    $newCustomFields[trim($customField)] = $customFields;
                }
            }
        }

        return $newCustomFields;
    }

    /**
     * Generate Hash for checking update.
     *
     * @param string[][] $job
     *
     * @return string
     */
    protected function generateTemplateHash($job)
    {
        return hash('sha256', serialize($job));
    }
}
