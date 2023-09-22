<?php

namespace FogacaSammuel\ExtractZip;

class Download
{   
    /** @var string */
    private $pathfrom;

    /** @var string */
    private $pathto;

    /**
     * Zip Construct
     * @param string $pathfrom
     * @param string $pathto
     */
    public function __construct(string $pathfrom, string $pathto)
    {
        $this->pathfrom = $pathfrom;
        $this->pathto = $pathto;
    }

    /**
     * extract archive zip
     * @return Zip
     */
    public function execute(): Download
    {   
        copy($this->pathfrom, $this->pathto . "/download.zip");
        return $this;
    }
}