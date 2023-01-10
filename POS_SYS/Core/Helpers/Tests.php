<?php

namespace Core\Helpers;

use Exception;

trait Tests
{
    /**
     *  function check if exists date
     *
     * @param [type] $expr
     * @param [type] $msg
     */
    protected static function check_if_exists($expr, $msg)
    {
        try {
            if (!$expr) {
                throw new \Exception($msg);
            }
        } catch (\Exception $error) {
            echo $error->getMessage();
            die;
        }
    }
/**
 *  function check if empty date
 *
 * @param [type] $var
 * @return void
 */
    protected static function check_if_empty($var)
    {
        try {
            if (empty($var)) {
                throw new \Exception("Empty data");
            }
        } catch (\Exception $error) {
            echo $error->getMessage();
            die;
        }
    }
}
