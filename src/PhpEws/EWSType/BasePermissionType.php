<?php
/**
 * Definition of the BasePermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BasePermissionType type
 */
class BasePermissionType extends EWSType
{
    /**
     * UserId property
     *
     * UserIdType
     */
    public $UserId;

    /**
     * CanCreateItems property
     *
     * @var boolean
     */
    public $CanCreateItems;

    /**
     * CanCreateSubFolders property
     *
     * @var boolean
     */
    public $CanCreateSubFolders;

    /**
     * IsFolderOwner property
     *
     * @var boolean
     */
    public $IsFolderOwner;

    /**
     * IsFolderVisible property
     *
     * @var boolean
     */
    public $IsFolderVisible;

    /**
     * IsFolderContact property
     *
     * @var boolean
     */
    public $IsFolderContact;

    /**
     * EditItems property
     *
     * PermissionActionType
     */
    public $EditItems;

    /**
     * DeleteItems property
     *
     * PermissionActionType
     */
    public $DeleteItems;
}
