<?php
/**
 * This file is part of the Itabs_Invoice module.
 *
 * PHP version 5
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category  Itabs
 * @package   Itabs_Invoice
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2012 ITABS GmbH / Rouven Alexander Rieker (http://www.itabs.de)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://github.com/itabs/Itabs_Invoice
 */
/**
 * System Config Invoice States
 *
 * @category  Itabs
 * @package   Itabs_Invoice
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2012 ITABS GmbH / Rouven Alexander Rieker (http://www.itabs.de)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://github.com/itabs/Itabs_Invoice
 */
class Itabs_Invoice_Model_System_Config_Source_Sales_Invoice_State
{
    /**
     * @var array Invoice States
     */
    protected $_options;

    /**
     * Returns the invoice states as an array for system configuration
     *
     * @return array Invoice States
     */
    public function toOptionArray()
    {
        if (!$this->_options) {
            $options = array();
            $options[] = array(
                'value' => Mage_Sales_Model_Order_Invoice::STATE_OPEN,
                'label' => Mage::helper('invoice')->__('Open')
            );
            $options[] = array(
                'value' => Mage_Sales_Model_Order_Invoice::STATE_PAID,
                'label' => Mage::helper('invoice')->__('Paid')
            );
            $this->_options = $options;
        }
        return $this->_options;
    }
}