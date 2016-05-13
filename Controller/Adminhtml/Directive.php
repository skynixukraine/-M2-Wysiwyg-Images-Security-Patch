<?php
/**
 * Created by Skynix.
 * User: Wolf
 * Date: 13.05.2016
 * Time: 11:06
 */

namespace Skynix\Wysiwyg\Controller\Adminhtml;

class Directive extends \Magento\Cms\Controller\Adminhtml\Wysiwyg\Directive
{
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magento_Catalog::products');
    }
}