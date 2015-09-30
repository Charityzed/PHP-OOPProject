<?php


class formMain{

    public $formname;
    public $fields;
    public $buttons;
    public $fieldnames;
    public $buttonNames;

    public function formMain($formname, $fields, $buttons, $fieldnames, $buttonNames)
    {
        $this->formname=$formname;
        $this->fields=$fields;
        $this->buttons=$buttons;
        $this->fieldnames=$fieldnames;
        $this->buttonNames=$buttonNames;

    }


}