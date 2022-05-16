<?php

namespace App\Core\Bootstraps;

use App\Core\Adapters\BootstrapBase;
use App\Core\Adapters\Menu;
use App\Core\Adapters\Theme;

class BootstrapDemo8 extends BootstrapBase {
	// Private Properties
	private static $asideMenu;

	// Private Methods
	private static function initHeader() {
        if (Theme::getOption('layout', 'header/width') == 'fluid') {
            Theme::addHtmlClass('header-container', 'container-fluid');
        } else {
            Theme::addHtmlClass('header-container', 'container-xxl');
        }

        if (Theme::getOption('layout', 'header/fixed/tablet-and-mobile') === true) {
			Theme::addHtmlClass('body', 'header-tablet-and-mobile-fixed');
		}
	}

	private static function initContent() {
		if (Theme::getOption('layout', 'content/width') == 'fluid') {
            Theme::addHtmlClass('content-container', 'container-fluid');
        } else if (Theme::getOption('layout', 'content/width') == 'fixed') {
            Theme::addHtmlClass('content-container', 'container-xxl');
        }
	}

	private static function initAside() {
		Theme::addHtmlClass('body', 'aside-enabled');

		// Default minimized
		if (Theme::getOption('layout', 'aside/minimized')) {
			Theme::addHtmlAttribute('body', 'data-kt-aside-minimize', 'on');
		}
	}

	private static function initAsideMenu() {
		self::$asideMenu = new Menu( Theme::getOption('menu', 'main'), Theme::getPagePath() );
	}

	private static function initFooter() {
		if (Theme::getOption('layout', 'footer/width') == 'fluid') {
			Theme::addHtmlClass('footer-container', 'container-fluid');
		} else {
			Theme::addHtmlClass('footer-container', 'container');
		}
	}

	private static function initScripts() {
		Theme::addPageJs('js/custom/widgets.js');
		Theme::addPageJs('js/custom/apps/chat/chat.js');
		Theme::addPageJs('js/custom/modals/create-app.js');
		Theme::addPageJs('js/custom/modals/upgrade-plan.js');

		if (Theme::getViewMode() !== 'release') {
			Theme::addPageJs('js/custom/intro.js');
		}
	}

	// Public Methods
	public static function initLayout() {
		self::initHeader();
		self::initContent();
		self::initAside();
		self::initFooter();
		self::initAsideMenu();
		self::initScripts();
	}

	public static function getAsideMenu() {
		return self::$asideMenu;
	}

	public static function getBreadcrumb() {
		$options = array(
			'skip-active' => false
		);

		return self::getAsideMenu()->getBreadcrumb($options);
	}
}
