<?php
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     14:26
 * @copyright 2017 solutionDrive GmbH
 */

namespace violation;


class HtmlRenderer
{
    private $elements = array();

    public function __construct(array $elements = array()) {
        if (!empty($elements)) {
            $this->addElements($elements);
        }
    }

    public function addElement($element) {
        $this->elements[] = $element;
        return $this;
    }

    public function addElements(array $elements) {
        foreach ($elements as $element) {
            $this->addElement($element);
        }
        return $this;
    }

    public function render() {
        $html = "";
        foreach ($this->elements as $element) {
            if ($element instanceof HtmlDiv) {
                $html .= $element->renderDiv();
            }
            else if ($element instanceof HtmlParagraph) {
                $html .= $element->renderParagraph();
            }
        }
        return $html;
    }
}