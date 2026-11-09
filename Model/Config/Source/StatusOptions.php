<?php
namespace PriyankJivani\CustomerTestimonials\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Status options for testimonials enable/disable dropdown.
 */
class StatusOptions implements OptionSourceInterface
{
    /**
     * Return array of status options.
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 1, 'label' => __('Enabled')],
            ['value' => 0, 'label' => __('Disabled')],
        ];
    }
}
