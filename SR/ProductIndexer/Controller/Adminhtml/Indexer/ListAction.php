<?php
namespace SR\ProductIndexer\Controller\Adminhtml\Indexer;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class ListAction extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->_setActiveMenu('Magento_Indexer::system_index');
        $resultPage->getConfig()->getTitle()->prepend(__('Product Index Management'));

        return $resultPage;
    }
}
