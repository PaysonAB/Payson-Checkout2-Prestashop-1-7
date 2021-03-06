<?php
/**
 * 2019 Payson AB
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 *  @author    Payson AB <integration@payson.se>
 *  @copyright 2019 Payson AB
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

namespace Payson\Payments\Validation;

/**
 * @package Payson\Payments\Validation
 */
class ValidateListRecurringPaymentsData extends ValidationService
{
    /**
     * @param mixed $data
     */
    public function validate($data)
    {
        $this->mustBeSet($data, 'subscriptionid', 'Recurring subscription ID');
        $this->mustBeString($data['subscriptionid'], 'Recurring subscription ID');

        if (isset($data['page'])) {
            $this->mustBeInteger($data['page'], 'Page number');
        }
    }
}
