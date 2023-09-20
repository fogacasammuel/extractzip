<?php

namespace FogacaSammuel\ExtractZip;

use Exception;
use SplFileObject;

class Config
{   
    /** @var string */
    private $json;

    /** @var string */
    private $dirmain;

    /** @var array*/
    private $callback;

    /** @var int */
    private $row;

    /**
     * Config construct
     *
     * @param string $json
     * @param string $dirmain
     */
    public function __construct(string $json, string $dirmain)
    {
        $this->json = $json;
        $this->dirmain = $dirmain;
        $this->row = 0;
    }

    /**
     * @return array
     */
    public function callback(): array
    {
        return $this->callback;
    }

    /**
     * @return Config
     */
    public function execute(): Config
    {
        $json = file_get_contents($this->json);
        $configs = json_decode($json);

        if(!$configs) {
            $this->callback = ["error" => true, "message" => "Não existe configurações para executar!"];
            return $this;
        }

        foreach($configs as $config) {
            $this->getRow($this->dirmain . $config->path);

            foreach($config->rows as $row) {
                $this->addRow($this->dirmain . $config->path, $this->row, $row);
                $this->row++;
            }
        }

        unlink($this->json);

        $this->callback = ["error" => false, "message" => "Todas as configurações foram feitas!"];
        return $this;
    }

    /**
     * get last row to file
     *
     * @param string $file
     * @return void
     */
    private function getRow(string $file)
    {
        $archive = new SplFileObject($file);
        $archive->seek(PHP_INT_MAX);
        $rowTotal = $archive->key();
        $this->row = ($rowTotal + 1);
    }

    /**
     * add new row to file
     *
     * @param string $file
     * @param integer $startRow
     * @param string $row
     * @return void
     */
    private function addRow(string $file, int $startRow, string $row)
    {
        try {
            $rows = explode(PHP_EOL, file_get_contents($file));
            $rows[$startRow + 1] = $row;
            file_put_contents($file, implode(PHP_EOL, $rows));
        } catch(Exception $e) {
            $this->callback = ["error" => true, "message" => $e->getMessage()];
        }
    }
}