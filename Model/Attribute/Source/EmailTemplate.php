<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
declare(strict_types=1);

namespace Alekseon\AlekseonEav\Model\Attribute\Source;

/**
 * Class EmailTemplate
 * @package Alekseon\AlekseonEav\Model\Attribute\Source
 */
class EmailTemplate extends AbstractSource
{
    /**
     * @var
     */
    private $path;
    /**
     * @var bool
     */
    protected $validateOptionKeyOnEntitySave = false;
    /**
     * @var \Magento\Config\Model\Config\Source\Email\Template
     */
    private $emailTemplateSource;

    /**
     * EmailTemplate constructor.
     * @param \Magento\Config\Model\Config\Source\Email\Template $emailTemplateSource
     */
    public function __construct(
        \Magento\Config\Model\Config\Source\Email\Template $emailTemplateSource
    )
    {
        $this->emailTemplateSource = $emailTemplateSource;
    }

    /**
     * @param $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return mixed|void
     */
    public function getOptions()
    {
        $options = [];

        if ($this->path) {
            $emailTemplateOptions = $this->emailTemplateSource->setPath($this->path)->toOptionArray();

            foreach ($emailTemplateOptions as $option) {
                $options[$option['value']] = $option['label'];
            }
        }

        return $options;
    }
}
