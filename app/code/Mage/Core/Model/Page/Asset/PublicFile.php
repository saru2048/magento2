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
 * @package     Mage_Core
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Page asset representing a local file that already has public access
 */
class Mage_Core_Model_Page_Asset_PublicFile implements Mage_Core_Model_Page_Asset_AssetInterface
{
    /**
     * @var Mage_Core_Model_Design_Package
     */
    private $_designPackage;

    /**
     * @var string
     */
    private $_file;

    /**
     * @var string
     */
    private $_contentType;

    /**
     * @param Mage_Core_Model_Design_Package $designPackage
     * @param string $file
     * @param string $contentType
     */
    public function __construct(Mage_Core_Model_Design_Package $designPackage, $file, $contentType)
    {
        $this->_designPackage = $designPackage;
        $this->_file = $file;
        $this->_contentType = $contentType;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->_designPackage->getPublicFileUrl($this->_file);
    }

    /**
     * {@inheritdoc}
     */
    public function getContentType()
    {
        return $this->_contentType;
    }
}
