<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing CalendarEventType
 *
 *
 * XSD Type: CalendarEvent
 *
 * @method CalendarEventType getStartTime()
 * @method CalendarEventType setStartTime(\DateTime $startTime)
 * @method CalendarEventType getEndTime()
 * @method CalendarEventType setEndTime(\DateTime $endTime)
 * @method CalendarEventType getBusyType()
 * @method CalendarEventType setBusyType(string $busyType)
 * @method CalendarEventType getCalendarEventDetails()
 * @method CalendarEventType setCalendarEventDetails(CalendarEventDetailsType $calendarEventDetails)
 */
class CalendarEventType extends TypeTest
{

    /**
     * @property \DateTime $startTime
     */
    protected $startTime = null;

    protected $_typeMap = array(
        'startTime' => 'dateTime',
        'endTime' => 'dateTime',
    );

    /**
     * @property \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @property string $busyType
     */
    protected $busyType = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarEventDetailsType
     * $calendarEventDetails
     */
    protected $calendarEventDetails = null;


}

