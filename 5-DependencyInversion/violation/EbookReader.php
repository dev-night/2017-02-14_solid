<?php

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:43
 * @copyright 2017 solutionDrive GmbH
 */
class EbookReader
{
    protected $book;

    public function __construct(PdfBook $book)
    {
        $this->book = $book;
    }

    public function read()
    {
        return $this->book->read();
    }
}