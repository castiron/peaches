<?php

namespace Castiron\Peaches\Support;

class Date
{


    public static $months = [
      'january',
      'february',
      'march',
      'april',
      'may',
      'june',
      'july',
      'august',
      'september',
      'october',
      'november',
      'december'
    ];

    /**
     * @param string $monthString
     * @param string $format
     * @return int
     */
    public static function monthStringToInteger($monthString, $format = 'n')
    {
        if (is_numeric($monthString)) {
            return (int) $monthString;
        }
        return (int) date_format(date_create("1 $monthString 2000"), $format);
    }

    /**
     * @param integer $monthInteger
     * @param string $format
     * @return bool|string
     */
    public static function monthIntegerToString($monthInteger, $format = 'F')
    {
        if (is_string($monthInteger) && in_array(strtolower($monthInteger), self::$months)) {
            return $monthInteger;
        }
        return date_format(date_create("2000-$monthInteger-01"), $format);
    }

    /**
     * @param integer $year
     * @param string|integer $month
     * @return int
     */
    public static function monthStartTimestamp($year, $month)
    {
        $month = self::monthStringToInteger($month);
        return strtotime("$month/1/$year 00:00");
    }

    /**
     * @param integer $year
     * @param string|integer $month
     * @param null|\DateTimeZone $tz
     * @return integer
     */
    public static function monthEndTimestamp($year, $month, $tz = null)
    {
        $nextMonth = self::monthStringToInteger($month) + 1;
        if ($nextMonth > 12) {
            $nextMonth = 1;
            ++$year;
        }
        $dt = new \DateTime("$nextMonth/1/$year 00:00", $tz);
        return (int)$dt->sub(new \DateInterval('PT1S'))->format('U');
    }

    /**
     * @param integer $year
     * @param string|integer $month
     * @param integer $day
     * @return int
     */
    public static function dayStartTimestamp($year, $month, $day)
    {
        $month = self::monthStringToInteger($month);
        return strtotime("$month/$day/$year 00:00");
    }

    /**
     * @param integer $year
     * @param string|integer $month
     * @param integer $day
     * @param null|\DateTimeZone $tz
     * @return integer
     */
    public static function dayEndTimestamp($year, $month, $day, $tz = null)
    {
        $month = self::monthStringToInteger($month);
        return strtotime("$month/$day/$year 23:59:59", $tz);
    }

    /**
     * @param \DateTime $dt
     * @return \DateTime
     */
    public static function dayStart(\DateTime $dt)
    {
        $updated = clone $dt;
        $updated->setTime(0, 0, 0);
        return $updated;
    }

    /**
     * @param \DateTime $dt
     * @return \DateTime
     */
    public static function dayEnd(\DateTime $dt)
    {
        $updated = clone $dt;
        $updated->setTime(23, 59, 59);
        return $updated;
    }

    /**
     * @param \DateTime $start
     * @param \DateTime $end
     * @return integer The number of days it spans
     */
    public static function spansMultipleDays(\DateTime $start, \DateTime $end)
    {
        return $end->diff($start)->format('%a');
    }

    /**
     * @param \DateTime $one
     * @param \DateTime $two
     * @return bool
     */
    public static function hasSameDay(\DateTime $one, \DateTime $two)
    {
        return $one->format('Y m d') == $two->format('Y m d');
    }

    /**
     * @param \DateTime $one
     * @param \DateTime $two
     * @return bool
     */
    public static function hasSameMonth(\DateTime $one, \DateTime $two)
    {
        return $one->format('Y m') == $two->format('Y m');
    }

    /**
     * @param \DateTime $one
     * @param \DateTime $two
     * @return bool
     */
    public static function hasSameYear(\DateTime $one, \DateTime $two)
    {
        return $one->format('Y') == $two->format('Y');
    }

    /**
     * @param \DateTime $one
     * @param \DateTime $two
     * @return bool TRUE if $two->year > $one->year
     */
    public static function hasLaterYear(\DateTime $one, \DateTime $two)
    {
        return intval($two->format('Y')) > intval($one->format('Y'));
    }

    /**
     * @param \DateTime $one
     * @param \DateTime $two
     * @return bool TRUE if $one->year > $two->year || ($one->year == $two->year && $one->month > $two->month)
     */
    public static function hasLaterMonth(\DateTime $one, \DateTime $two)
    {
        return static::hasLaterYear($one, $two) ||
        (static::hasSameYear($one, $two) &&
            intval($two->format('m')) > intval($one->format('m')));
    }

    /**
     * @param \DateTime $one
     * @param \DateTime $two
     * @return bool
     */
    public static function hasLaterDay(\DateTime $one, \DateTime $two)
    {
        return static::hasLaterMonth($one, $two) ||
        (static::hasSameMonth($one, $two) &&
            intval($two->format('d')) > intval($one->format('d')));
    }

    /**
     * Copies just the date portion from one DateTime to another
     *
     * @param \DateTime $target
     * @param \DateTime $source
     */
    public static function copyDate(\DateTime &$target, \DateTime $source)
    {
        call_user_func_array([$target, 'setDate'], explode('-', $source->format('Y-m-d')));
    }

    /**
     * Copies just the time portion from one DateTime to another
     *
     * @param \DateTime $target
     * @param \DateTime $source
     */
    public static function copyTime(\DateTime &$target, \DateTime $source)
    {
        call_user_func_array([$target, 'setTime'], explode('-', $source->format('H-i-s')));
    }

    /**
     * @param string $str
     * @param string $inFormat
     * @param string $outFormat
     * @return bool|string
     */
    public static function reformat($str, $inFormat, $outFormat)
    {
        return \DateTime::createFromFormat($inFormat, $str)->format($outFormat);
    }

}