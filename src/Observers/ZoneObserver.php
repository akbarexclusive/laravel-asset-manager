<?php

namespace Drivezy\LaravelAssetManager\Observers;

use Drivezy\LaravelUtility\Observers\BaseObserver;

/**
 * Class Zone
 * @package Drivezy\LaravelAssetManager\Observer
 *
 * @see https://github.com/drivezy/laravel-asset-manager.
 * @author Ankit Tiwari <ankit19.alpha@gmail.com>
 */
class ZoneObserver extends BaseObserver
{
    /**
     * @var array Required parameters.
     */
    protected $rules = [
        'name'    => 'required',
        'zone_id' => 'required',
    ];
}