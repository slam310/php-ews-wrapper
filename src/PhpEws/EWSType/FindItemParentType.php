<?php
/**
 * Definition of the FindItemParentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FindItemParentType type
 */
class FindItemParentType extends EWSType
{
    /**
     * Items property
     *
     * ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Groups property
     *
     * ArrayOfGroupedItemsType
     */
    public $Groups;

    /**
     * IndexedPagingOffset property
     *
     * @var integer
     */
    public $IndexedPagingOffset;

    /**
     * NumeratorOffset property
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * AbsoluteDenominator property
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * TotalItemsInView property
     *
     * @var integer
     */
    public $TotalItemsInView;
}
