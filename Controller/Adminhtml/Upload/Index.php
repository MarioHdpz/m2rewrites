<?php

namespace Pengo\Rewrites\Controller\Adminhtml\Upload;

use Pengo\Rewrites\Controller\Adminhtml\Upload as UploadController;
use Magento\Framework\Controller\ResultFactory;

class Index extends UploadController
{
    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /*$this->messageManager->addNotice(
            $this->_objectManager->get('Magento\ImportExport\Helper\Data')->getMaxUploadSizeMessage()
        );*/
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Pengo_Rewrites::pengo_menu_rewrites');
        $resultPage->getConfig()->getTitle()->prepend(__('Rewrites'));
        $resultPage->getConfig()->getTitle()->prepend(__('Upload File'));
        $resultPage->addBreadcrumb(__('Rewrites'), __('Upload File'));
        return $resultPage;
    }
}
