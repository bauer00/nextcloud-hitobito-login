<?php

declare(strict_types=1);

namespace OCA\HitobitoLogin\Controller;

use OCA\HitobitoLogin\AppInfo\Application;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\Attribute\FrontpageRoute;
use OCP\AppFramework\Http\JSONResponse;
use OCP\AppFramework\Http\Response;
use OCP\IRequest;

class SettingsController extends Controller {
    public function __construct(IRequest $request) {
        parent::__construct(Application::APP_ID, $request);
    }

    #[FrontpageRoute(verb: 'PUT', url: '/admin')]
    public function saveAdmin(): Response {
        return new JSONResponse(['success' => true]);
    }
}
