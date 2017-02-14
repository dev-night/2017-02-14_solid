<?php
namespace violation;
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     14:23
 * @copyright 2017 solutionDrive GmbH
 */
class HtmlDiv
{
    private $text;
    private $id;
    private $class;

    public function __construct($text, $id = null, $class = null) {
        $this->setText($text);
        if ($id !== null) {
            $this->setId($id);
        }
        if ($class !== null) {
            $this->setClass($class);
        }
    }

    public function setText($text) {
        if (!is_string($text) || empty($text)) {
            throw new InvalidArgumentException(
                "The text of the element is invalid.");
        }
        $this->text = $text;
        return $this;
    }

    public function setId($id) {
        if (!preg_match('/^[a-z0-9_-]+$/', $id)) {
            throw new InvalidArgumentException(
                "The attribute value is invalid.");
        }
        $this->id = $id;
        return $this;
    }

    public function setClass($class) {
        if (!preg_match('/^[a-z0-9_-]+$/', $id)) {
            throw new InvalidArgumentException(
                "The attribute value is invalid.");
        }
        $this->class = $class;
        return $this;
    }

    public function renderDiv() {
        return '<div' .
            ($this->id ? ' id="' . $this->id . '"' : '') .
            ($this->class ? ' class="' . $this->class . '"' : '') .
            '>' . $this->text . '</div>';
    }
}