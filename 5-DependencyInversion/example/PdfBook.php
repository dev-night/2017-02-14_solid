<?php
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:47
 * @copyright 2017 solutionDrive GmbH
 */

namespace example;


class PdfBook implements EbookInterface
{

    public function read()
    {
        return 'reading some lines of pdf';
    }
}