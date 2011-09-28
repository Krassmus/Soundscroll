<?php
/*
 *  Copyright (c) 2011  Rasmus Fuhse <fuhse@data-quest.de>
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License as
 *  published by the Free Software Foundation; either version 2 of
 *  the License, or (at your option) any later version.
 */

/**
 * A goddamn simple and small template engine.
 * Use it like
 *  Template::summon(dirname(__file__)."/view/template.php")
 *              ->with('var1', $foo)
 *              ->with('var2', $var2)
 *              ->render()
 * to get the template-output as a string.
 */
class Template {
    var $place;
    var $env = array();

    /**
     * returns an instance of a template
     * @param string $place : absolute server-path of the template mostly dirname(__file__)."/view.php"
     * @return Template
     */
    public static function summon($place) {
        return new Template($place);
    }

    /**
     * generate a template
     * @param string $place
     */
    public function __construct($place) {
        if (file_exists($place)) {
            $this->place = $place;
        } else {
            throw new Exception(sprintf("Template '%s' existiert nicht.", $place));
        }
    }

    /**
     * pass a variable to the template
     * @param string : $varname name of the variable as it should be used within the template
     * @param mixed $value : 
     * @return Template
     */
    public function with($varname, $value) {
        $this->env[$varname] = $value;
        return $this;
    }

    /**
     * process the template and return the output
     * @return string : output of the template
     */
    public function render() {
        foreach($this->env as $varname => $value) {
            ${$varname} = $value;
        }
        ob_start();
        include $this->place;
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }
    
}
