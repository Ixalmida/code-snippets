<?php
/**
 * Variable parser for parsing output (auto-included with all blade views)
 */
namespace App\Helpers;

class Parse
{
    /**
     * Parse value as currency
     */
    public static function currency($value)
    {
        if ($value === null || $value === '') {
            return $value;
        }

        if (!is_numeric($value)) {
            return 'NaN';
        }

        return number_format($value);
    }

    /**
     * Parse value as percentage
     */
    public static function percentage($value)
    {
        if ($value === null || $value === '') {
            return $value;
        }

        if (!is_numeric($value)) {
            return 'NaN';
        }

        return $value;
    }

    /**
     * Parse value as boolean Yes/No
     */
    public static function yesNo($value, $yes = 'Yes', $no = 'No')
    {
        if ($value === null || $value === '') {
            return $value;
        }

        if ($value == 1) {
            return $yes;
        }

        return $no;
    }

    /**
     * Reverse boolean Yes/No parser
     */
    public static function noYes($value, $yes = 'Yes', $no = 'No')
    {
        if ($value === null || $value === '') {
            return $value;
        }

        if ($value == 1) {
            return $no;
        }

        return $yes;
    }
}
