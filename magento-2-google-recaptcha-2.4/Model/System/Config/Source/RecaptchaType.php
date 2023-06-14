<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_GoogleRecaptcha
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\GoogleRecaptcha\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class RecaptchaType
 * @package Mageplaza\GoogleRecaptcha\Model\System\Config\Source
 */
class RecaptchaType implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $recaptchaTypeOptionArray = [
            ['label' => __('Visible'), 'value' => 'visible'],
            ['label' => __('Invisible'), 'value' => 'invisible']
        ];

        return $recaptchaTypeOptionArray;
    }
}
