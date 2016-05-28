<?php
namespace SR\ProductIndexer\Block\Backend;

class Container extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Initialize object state with incoming parameters
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'indexer';
        $this->_blockGroup = 'SR_ProductIndexer';
        $this->_headerText = __('Indexer Management');
        parent::_construct();
        $this->buttonList->remove('add');
    }
}