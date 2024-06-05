<?php

interface iCRUD
{
    public function create($params, $table);
    public function read($table);
}
