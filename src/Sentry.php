<?php

namespace Nails\Common\ErrorHandler;

use Nails\Common\Exception\NailsException;
use Nails\Common\Interfaces\ErrorHandlerDriver;
use Nails\Factory;

class Sentry implements ErrorHandlerDriver
{
    /**
     * Whether the driver is configured or not
     * @var bool
     */
    protected static $bIsAvailable = false;

    // --------------------------------------------------------------------------

    /**
     * Instantiates the driver
     *
     * @throws NailsException
     * @return void
     */
    public static function init()
    {
        /**
         * If the Sentry token is provided then we'll instantiate the appropriate classes; if it's not
         * then we'll not do anything and let errors bubble through to the default handler.
         */
        if (defined('DEPLOY_SENTRY_ACCESS_TOKEN')) {
            static::$bIsAvailable = true;
            //  @todo (Pablo - 2018-03-07) - Configure the appropriate classes
        }
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
        if ($iErrorNumber == E_STRICT) {
            return;
        }

        if (static::$bIsAvailable) {
            //  @todo (Pablo - 2018-03-07) - Call the appropriate method
        }

        //  Bubble to the default driver
        $oErrorHandler        = Factory::service('ErrorHandler');
        $sDefaultHandlerClass = $oErrorHandler->getDefaultDriverClass();
        $sDefaultHandlerClass::error($iErrorNumber, $sErrorString, $sErrorFile, $iErrorLine);
    }

    // --------------------------------------------------------------------------

    /**
     * Catches uncaught exceptions
     *
     * @param \Exception $oException     The uncaught exception
     * @param bool       $bHaltExecution Whether to show the error screen and halt execution
     *
     * @return void
     */
    public static function exception($oException, $bHaltExecution = true)
    {
        if (static::$bIsAvailable) {
            //  @todo (Pablo - 2018-03-07) - Call the appropriate method
        }

        //  Bubble to the default driver
        $oErrorHandler        = Factory::service('ErrorHandler');
        $sDefaultHandlerClass = $oErrorHandler->getDefaultDriverClass();
        $sDefaultHandlerClass::exception($oException, $bHaltExecution);
    }

    // --------------------------------------------------------------------------

    /**
     * Catches fatal errors on shut down
     * @return void
     */
    public static function fatal()
    {
        if (static::$bIsAvailable) {
            //  @todo (Pablo - 2018-03-07) - Call the appropriate method
        }

        //  Bubble to the default driver
        $oErrorHandler        = Factory::service('ErrorHandler');
        $sDefaultHandlerClass = $oErrorHandler->getDefaultDriverClass();
        $sDefaultHandlerClass::fatal();
    }
}
