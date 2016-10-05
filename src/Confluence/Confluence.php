<?php
namespace Invigor\Confluence;
/**
 * Created by PhpStorm.
 * User: ivan.li
 * Date: 10/5/2016
 * Time: 4:18 PM
 */
class Confluence
{
    /**
     * Laravel application
     *
     * @var \Illuminate\Foundation\Application
     */
    public $app;

    /**
     * Create a new confide instance.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     */
    public function __construct($app)
    {
        $this->app = $app;
    }
}