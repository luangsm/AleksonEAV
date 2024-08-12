<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
declare(strict_types=1);

namespace Alekseon\AlekseonEav\Model\Attribute\InputType;

/**
 * Class AbstractBackendType
 * @package Alekseon\AlekseonEav\Model\Attribute\BackendType
 */
class Image extends AbstractInputType
{
    /**
     * @var string
     */
    protected $inputFieldType = 'image';
    /**
     * @var bool
     */
    protected $backendModel = 'Alekseon\AlekseonEav\Model\Attribute\Backend\Image';

    /**
     * @param $columnConfig
     * @return $this
     */
    public function prepareGridColumnConfig(&$columnConfig)
    {
        $columnConfig['sortable'] = false;
        $columnConfig['filter'] = false;
        $columnConfig['renderer'] = \Alekseon\AlekseonEav\Block\Adminhtml\Entity\Grid\Renderer\Image::class;
        return $this;
    }
}
