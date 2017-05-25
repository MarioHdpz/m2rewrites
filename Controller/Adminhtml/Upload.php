<?php

namespace Pengo\Rewrites\Controller\Adminhtml;

use Magento\Backend\App\Action;

/**
 * Upload controller
 */
abstract class Upload extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Pengo_Rewrites::upload';
}
