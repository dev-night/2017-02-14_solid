<?php
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:48
 * @copyright 2017 solutionDrive GmbH
 */

namespace example;


class EpubBook implements EbookInterface
{

    public function read()
    {
        return 'read some lines of ePub';
    }
}