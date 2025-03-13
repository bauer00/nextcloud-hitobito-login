<?php

declare(strict_types=1);

namespace OCA\HitobitoLogin\AppInfo;

use OCA\HitobitoLogin\AlternativeLogin\HitobitoLogin;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap {
    public const APP_ID = 'hitobitologin';

    /** @psalm-suppress PossiblyUnusedMethod */
    public function __construct() {
        parent::__construct(self::APP_ID);
    }

    public function register(IRegistrationContext $context): void {
        $context->registerAlternativeLogin(HitobitoLogin::class);
    }

    public function boot(IBootContext $context): void {
    }
}
