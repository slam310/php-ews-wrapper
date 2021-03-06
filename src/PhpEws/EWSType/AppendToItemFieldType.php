<?php
/**
 * Definition of the AppendToItemFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AppendToItemFieldType type
 */
class AppendToItemFieldType extends EWSType
{
    /**
     * Item property
     *
     * ItemType
     */
    public $Item;

    /**
     * Message property
     *
     * MessageType
     */
    public $Message;

    /**
     * CalendarItem property
     *
     * CalendarItemType
     */
    public $CalendarItem;

    /**
     * Contact property
     *
     * ContactItemType
     */
    public $Contact;

    /**
     * DistributionList property
     *
     * DistributionListType
     */
    public $DistributionList;

    /**
     * MeetingMessage property
     *
     * MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * MeetingRequest property
     *
     * MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * MeetingResponse property
     *
     * MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * MeetingCancellation property
     *
     * MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Task property
     *
     * TaskType
     */
    public $Task;

    /**
     * PostItem property
     *
     * PostItemType
     */
    public $PostItem;
}
