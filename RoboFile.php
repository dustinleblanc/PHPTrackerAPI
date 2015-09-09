<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{

    /**
     * Run tests whenever source changes.
     */
    public function watch()
    {
        $this->taskWatch()
             ->monitor('composer.json', function() {
                 $this->taskComposerUpdate()->run();
             })->monitor('src', function() {
              $this->taskPhpspec(__DIR__ . '/vendor/bin/phpspec')->run();
          })->run();
    }
}
