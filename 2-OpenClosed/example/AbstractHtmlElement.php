<?php

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     14:33
 * @copyright 2017 solutionDrive GmbH
 *
 */
abstract class AbstractHtmlElement implements HtmlElementInterface
{
    protected $text;
    protected $id;
    protected $class;

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
        $this->checkAttribute($id);
        $this->id = $id;
        return $this;
    }

    public function setClass($class) {
        $this->checkAttribute($class);
        $this->class = $class;
        return $this;
    }

    protected function checkAttribute($value) {
        if (!preg_match('/^[a-z0-9_-]+$/', $value)) {
            throw new InvalidArgumentException(
                "The attribute value is invalid.");
        }
    }
}