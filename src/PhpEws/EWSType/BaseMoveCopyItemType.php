<?php
/**
 * Definition of the BaseMoveCopyItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseMoveCopyItemType type
 */
class BaseMoveCopyItemType extends EWSType
{
    /**
     * ToFolderId property
     *
     * TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * ItemIds property
     *
     * NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
