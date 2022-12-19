<?php
namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Instance\Launcher;

class TestCase extends \PHPUnit\Framework\TestCase
{
	protected function setExecutable(Launcher $launcher)
	{
		if ($executable = getenv('CHROME_EXECUTABLE_PATH')) {
			$launcher->setExecutable($executable);
		}
	}
}
