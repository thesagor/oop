<?php

class validator
{
    private $error = [];

    public function validate($data, $rules)
    {
        $this->error = "email has been required";
    }

    public function fails()
    {
        return !empty($this->error);
    }
}

$validate = new validator;
$validate->validate(['mail@temai.com'], ['Required']);
if ($validate->fails()) {
    die("has DIe");
}


