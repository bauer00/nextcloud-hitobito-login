<?php
namespace OCA\HitobitoLogin\Sections;

use OCP\IL10N;
use OCP\IURLGenerator;
use OCP\Settings\IIconSection;

class HitobitoLogin implements IIconSection {
    private IL10N $l;
    private IURLGenerator $urlGenerator;

    public function __construct(IL10N $l, IURLGenerator $urlGenerator) {
        $this->l = $l;
        $this->urlGenerator = $urlGenerator;
    }

    public function getIcon(): string {
        return $this->urlGenerator->imagePath('hitobitologin', 'app-dark.svg');
    }

    public function getID(): string {
        return 'hitobitologin';
    }

    public function getName(): string {
        return $this->l->t('Hitobito Login');
    }

    public function getPriority(): int {
        return 98;
    }
}
