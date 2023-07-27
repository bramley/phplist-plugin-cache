<?php
/**
 * Cache Plugin for phplist.
 *
 * This file is a part of Cache Plugin.
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @category  phplist
 *
 * @author    Duncan Cameron
 * @copyright 2023 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 */
class Cache extends phplistPlugin
{
    const VERSION_FILE = 'version.txt';

    public $name = 'Cache Plugin';
    public $authors = 'Duncan Cameron';
    public $description = 'Cache plugin';
    public $coderoot = __DIR__ . '/' . __CLASS__ . '/';

    public function __construct()
    {
        $this->version = file_get_contents($this->coderoot . self::VERSION_FILE);
        parent::__construct();
    }

    public function dependencyCheck()
    {
        return [
            'PHP version 8 or greater' => version_compare(PHP_VERSION, '8') > 0,
        ];
    }
}
