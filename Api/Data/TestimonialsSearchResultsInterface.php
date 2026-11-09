<?php
/**
 * Copyright © Priyank Jivani All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace PriyankJivani\CustomerTestimonials\Api\Data;

interface TestimonialsSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get Testimonials list.
     *
     * @return \PriyankJivani\CustomerTestimonials\Api\Data\TestimonialsInterface[]
     */
    public function getItems();

    /**
     * Set Testimonials list.
     *
     * @param \PriyankJivani\CustomerTestimonials\Api\Data\TestimonialsInterface[] $items
     *
     * @return $this
     */
    public function setItems(array $items);
}
