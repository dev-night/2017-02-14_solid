<?php

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     14:49
 * @copyright 2017 solutionDrive GmbH
 */
class HtmlDiv extends AbstractHtmlElement
{
    public function render()
    {
        return '<div' .
            ($this->id ? ' id="' . $this->id . '"' : '') .
            ($this->class ? ' class="' . $this->class . '"' : '') .
            '>' . $this->text . '</div>';
    }
}