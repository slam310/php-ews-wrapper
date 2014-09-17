<?php
/**
 * The Exists element represents a search expression that returns true if the
 * supplied property exists on an item.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ExistsType type.
 */
class ExistsType extends EWSType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
}