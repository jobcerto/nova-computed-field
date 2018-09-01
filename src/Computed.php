<?php

namespace Jobcerto\Computed;

use Laravel\Nova\Fields\Field;

class Computed extends Field
{
    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = true;

    /**
     * Indicates if the element should be shown on the detail view.
     *
     * @var bool
     */
    public $showOnDetail = true;

    /**
     * Indicates if the element should be shown on the creation view.
     *
     * @var bool
     */
    public $showOnCreation = false;

    /**
     * Indicates if the element should be shown on the update view.
     *
     * @var bool
     */
    public $showOnUpdate = false;
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'computed';
}
