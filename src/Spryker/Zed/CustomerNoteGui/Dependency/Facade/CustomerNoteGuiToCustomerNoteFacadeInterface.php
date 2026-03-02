<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerNoteGui\Dependency\Facade;

use Generated\Shared\Transfer\CustomerNoteCollectionTransfer;
use Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer;

interface CustomerNoteGuiToCustomerNoteFacadeInterface
{
    public function addNote(SpyCustomerNoteEntityTransfer $customerNoteEntityTransfer): SpyCustomerNoteEntityTransfer;

    public function addNoteFromCurrentUser(SpyCustomerNoteEntityTransfer $customerNoteEntityTransfer): SpyCustomerNoteEntityTransfer;

    public function getNotes(int $idCustomer): CustomerNoteCollectionTransfer;
}
