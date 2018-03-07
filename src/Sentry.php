<?php

namespace Nails\Common\ErrorHandler;

use Nails\Common\Interfaces\ErrorHandlerDriver;

class Sentry implements ErrorHandlerDriver
{
    /**
     * Instantiates the driver
     * @return void
     */
    public static function init()
    {
        //  @todo (Pablo - 2018-03-07) - implement
    }

    // --------------------------------------------------------------------------

    /**
     * Called when a PHP error occurs
     *
     * @param  int    $iErrorNumber The error number
     * @param  string $sErrorString The error message
     * @param  string $sErrorFile   The file where the error occurred
     * @param  int    $iErrorLine   The line number where the error occurred
     *
     * @return void
     */
    public static function error($iErrorNumber, $sErrorString, $sErrorFile, $iErrorLine)
    {
        //  @todo (Pablo - 2018-03-07) - implement
    }

    // --------------------------------------------------------------------------

    /**
     * Catches uncaught exceptions
     *
     * @param  \Exception $oException The caught exception
     *
     * @return void
     */
    public static function exception($oException)
    {
        //  @todo (Pablo - 2018-03-07) - implement
    }

    // --------------------------------------------------------------------------

    /**
     * Catches fatal errors on shut down
     * @return void
     */
    public static function fatal()
    {
        //  @todo (Pablo - 2018-03-07) - implement
    }
}
