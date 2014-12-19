<?php
namespace Jbig3Base\Base\View\Helper;

use DateTime;
use IntlDateFormatter;
use Zend\View\Helper\AbstractHelper;

class Date extends AbstractHelper
{

    public function __invoke($date, $mode = 'medium')
    {

        if(is_string($date)){
            if ($date == '0000-00-00 00:00:00') {
                return '-';
            }

            $dateTime = new DateTime($date);
        }

        if(is_object($date)){

            $dateTime = $date;
        }

        switch ($mode) {
            case 'long':
                $dateType = IntlDateFormatter::LONG;
                $timeType = IntlDateFormatter::LONG;
                break;

            case 'short':
                $dateType = IntlDateFormatter::SHORT;
                $timeType = IntlDateFormatter::SHORT;
                break;

            case 'dateonly':
                $dateType = IntlDateFormatter::MEDIUM;
                $timeType = IntlDateFormatter::NONE;
                break;

            case 'timeonly':
                $dateType = IntlDateFormatter::NONE;
                $timeType = IntlDateFormatter::SHORT;
                break;

            default:
            case 'medium':
                $dateType = IntlDateFormatter::MEDIUM;
                $timeType = IntlDateFormatter::MEDIUM;
                break;
        }

        return $this->getView()->dateFormat($dateTime, $dateType, $timeType);
    }
}
