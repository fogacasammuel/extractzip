<?php

namespace FogacaSammuel\ExtractZip;

use ZipArchive;

class Zip
{   
    /** @var ZipArchive */
    private $zip;

    /** @var string */
    private $pathto;

    /** @var bool */
    private $callback;

    /**
     * Zip Construct
     * @param string $filename
     * @param string $pathto
     */
    public function __construct(string $filename, string $pathto)
    {
        $this->zip = new ZipArchive();
        $this->zip->open($filename);

        $this->pathto = $pathto;
    }

    /**
     * @return Zip
     */
    public function callback(): bool
    {
        return $this->callback;
    }

    /**
     * extract archive zip
     * @return Zip
     */
    public function execute(array $files = []): void
    {   
        if($files) {
            $extract = $this->zip->extractTo($this->pathto, $files);
        } else {
            $extract = $this->zip->extractTo($this->pathto);
        }

        if($extract == false) {
            $this->callback = false;
            return;
        }

        $this->callback = true;
        return;
    }

    /**
     * @param string $name
     * @return Zip
     */
    public function delete(string $name): void
    {
        $this->zip->deleteName($name);
        return;
    }

    /**
     * close zip archive
     * @return Zip
     */
    public function finish(): void
    {
        $this->zip->close();
        return;
    }
}