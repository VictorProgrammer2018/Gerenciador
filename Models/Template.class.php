<?php

class Template extends SmartyBC{


    public function __construct(){
        parent::__construct();

        $this->setTemplateDir('Views/');
        $this->setCacheDir('Views/cache/');
        $this->setCompileDir('Views/compile/');
    }
}