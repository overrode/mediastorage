<?php

namespace Omitsis\MediaStorage\Controller\Adminhtml\Index;;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Omitsis\MediaStorage\Controller\Adminhtml\Index
 */
class Index extends Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     *
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
	 * @return ResponseInterface|ResultInterface|Page
	 */
    public function execute()
    {
	    return $this->resultPageFactory->create();
    }
}