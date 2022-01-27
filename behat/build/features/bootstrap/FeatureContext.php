<?php
use PaulGibbs\WordpressBehatExtension\Context\RawWordpressContext;

use Behat\Behat\Tester\Exception\PendingException;

/**
 * Define application features from the specific context.
 */
class FeatureContext extends RawWordpressContext {

    /**
     * Initialise context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct() {
        parent::__construct();
    }
    /**
     * @Given some step with :arg1 argument
     */
    public function someStepWithArgument($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given number step with :arg1
     */
    public function numberStepWith($arg1)
    {
        throw new PendingException();
    }

}
