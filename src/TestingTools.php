<?php

namespace Illuminated\Testing;

use Illuminated\Testing\Asserts\ArtisanAsserts;
use Illuminated\Testing\Asserts\CollectionAsserts;
use Illuminated\Testing\Asserts\DatabaseAsserts;
use Illuminated\Testing\Asserts\EloquentAsserts;
use Illuminated\Testing\Asserts\ExceptionAsserts;
use Illuminated\Testing\Asserts\FilesystemAsserts;
use Illuminated\Testing\Asserts\LogFileAsserts;
use Illuminated\Testing\Asserts\ReflectionAsserts;
use Illuminated\Testing\Asserts\ScheduleAsserts;
use Illuminated\Testing\Asserts\ServiceProviderAsserts;
use Illuminated\Testing\Helpers\ApplicationHelpers;
use Illuminated\Testing\Helpers\ArtisanHelpers;

trait TestingTools
{
    use ApplicationHelpers;
    use ArtisanHelpers;

    use ArtisanAsserts;
    use CollectionAsserts;
    use DatabaseAsserts;
    use EloquentAsserts;
    use ExceptionAsserts;
    use FilesystemAsserts;
    use LogFileAsserts;
    use ReflectionAsserts;
    use ScheduleAsserts;
    use ServiceProviderAsserts;
}
