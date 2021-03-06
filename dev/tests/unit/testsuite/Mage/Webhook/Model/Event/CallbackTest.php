<?php
/**
 * Magento
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Webhook
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Mage_Webhook_Model_Event_CallbackTest extends PHPUnit_Framework_TestCase
{
    public function testCreateCallbackEvent()
    {
        $status = 1;
        $mapping = 'default';
        $bodyData = array('data1'=>'test1');
        $headers = array('header1' => 'test2');
        $topic = 'order/created';
        $options = array();

        $object = new Mage_Webhook_Model_Event_Callback($mapping, $bodyData, $headers, $topic, $status, $options);

        $this->assertEquals($status, $object->getStatus());
        $this->assertEquals($mapping, $object->getMapping());
        $this->assertEquals($bodyData, $object->getBodyData());
        $this->assertEquals($headers, $object->getHeaders());
        $this->assertEquals($options, $object->getOptions());
    }
}
