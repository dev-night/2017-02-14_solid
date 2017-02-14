<?php

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     14:50
 * @copyright 2017 solutionDrive GmbH
 */
class HtmlParagraph extends AbstractHtmlElement
{
    public function render() {
        return '<p' .
            ($this->id ? ' id="' . $this->id . '"' : '') .
            ($this->class ? ' class="' . $this->class . '"' : '') .
            '>' . $this->text . '</p>';
    }
}