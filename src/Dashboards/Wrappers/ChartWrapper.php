<?php

namespace Khill\Lavacharts\Dashboards\Wrappers;

use \Khill\Lavacharts\Charts\Chart;
use \Khill\Lavacharts\Values\ElementId;

/**
 * Class ChartWrapper
 *
 * Used for wrapping charts to use in dashboards.
 *
 * @package   Khill\Lavacharts\Dashboards\Wrappers
 * @since     3.0.0
 * @author    Kevin Hill <kevinkhill@gmail.com>
 * @copyright (c) 2016, KHill Designs
 * @link      http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link      http://lavacharts.com                   Official Docs Site
 * @license   http://opensource.org/licenses/MIT      MIT
 */
class ChartWrapper extends Wrapper
{
    /**
     * Javascript chart class.
     *
     * @var string
     */
    const VIZ_CLASS = 'google.visualization.ChartWrapper';

    /**
     * Builds a ChartWrapper object.
     *
     * @param  \Khill\Lavacharts\Charts\Chart     $chart
     * @param  \Khill\Lavacharts\Values\ElementId $containerId
     */
    public function __construct(Chart $chart, ElementId $containerId)
    {
        parent::__construct($chart, $containerId);
    }
}
