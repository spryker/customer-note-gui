<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerNoteGui\Dependency\Facade;

use Generated\Shared\Transfer\CustomerNoteCollectionTransfer;
use Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer;

class CustomerNoteGuiToCustomerNoteFacadeBridge implements CustomerNoteGuiToCustomerNoteFacadeInterface
{
    /**
     * @var \Spryker\Zed\CustomerNote\Business\CustomerNoteFacadeInterface
     */
    protected $customerNoteFacade;

    /**
     * @param \Spryker\Zed\CustomerNote\Business\CustomerNoteFacadeInterface $customerNoteFacade
     */
    public function __construct($customerNoteFacade)
    {
        $this->customerNoteFacade = $customerNoteFacade;
    }

    public function addNote(SpyCustomerNoteEntityTransfer $customerNoteEntityTransfer): SpyCustomerNoteEntityTransfer
    {
        return $this->customerNoteFacade->addNote($customerNoteEntityTransfer);
    }

    public function addNoteFromCurrentUser(SpyCustomerNoteEntityTransfer $customerNoteEntityTransfer): SpyCustomerNoteEntityTransfer
    {
        return $this->customerNoteFacade->addNoteFromCurrentUser($customerNoteEntityTransfer);
    }

    public function getNotes(int $idCustomer): CustomerNoteCollectionTransfer
    {
        return $this->customerNoteFacade->getNotes($idCustomer);
    }
}
