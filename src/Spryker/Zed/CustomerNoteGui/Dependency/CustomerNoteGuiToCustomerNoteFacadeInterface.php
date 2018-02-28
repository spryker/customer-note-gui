<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerNoteGui\Dependency;

use Generated\Shared\Transfer\CustomerNotesCollectionTransfer;
use Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer;

interface CustomerNoteGuiToCustomerNoteFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer $customerNoteEntityTransfer
     *
     * @return \Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer
     */
    public function addNote(SpyCustomerNoteEntityTransfer $customerNoteEntityTransfer): SpyCustomerNoteEntityTransfer;

    /**
     * @param int $idCustomer
     *
     * @return \Generated\Shared\Transfer\CustomerNotesCollectionTransfer
     */
    public function getNotes(int $idCustomer): CustomerNotesCollectionTransfer;
}
