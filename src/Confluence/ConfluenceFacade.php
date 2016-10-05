<?php
namespace Invigor\Confluence;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: ivan.li
 * Date: 10/5/2016
 * Time: 4:19 PM
 */
class ConfluenceFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'confluence';
    }
}