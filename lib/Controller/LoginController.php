<?php

declare(strict_types=1);

namespace OCA\HitobitoLogin\Controller;

use OCA\HitobitoLogin\AppInfo\Application;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\Attribute\FrontpageRoute;
use OCP\AppFramework\Http\Response;
use OCP\IAppConfig;
use OCP\IConfig;
use OCP\IGroupManager;
use OCP\IRequest;

class LoginController extends Controller {
    public function __construct(
        IRequest $request,
        private IConfig $config,
        private IAppConfig $appConfig,
        private IGroupManager $groupManager,
    ) {
        parent::__construct(Application::APP_ID, $request);
    }

    #[FrontpageRoute(verb: 'GET', url: '/login/oauth')]
    public function oauth(): Response {
        return new Response();
    }
}
