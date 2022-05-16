<?php

namespace App\Core\Bootstraps;

use App\Core\Adapters\BootstrapBase;
use App\Core\Adapters\Menu;
use App\Core\Adapters\Theme;

class BootstrapDemo6 extends BootstrapBase {
	// Private Properties
	private static $asideMenu;

	private static $horizontalMenu;

	// Private Methods
	private static function initPage() {
		if ( Theme::getOption('layout', 'main/body/background-image') ) {
			Theme::addHtmlAttribute('body', 'style', 'background-image: url(' . Theme::getOption('layout', 'main/body/background-image') . ')');
		}
	}

	private static function initHeader() {
        if (Theme::getOption('layout', 'header/width') == 'fluid') {
            Theme::addHtmlClass('header-container', 'container-fluid');
        } else {
            Theme::addHtmlClass('header-container', 'container-xxl');
        }

		if (Theme::getOption('layout', 'header/fixed/desktop') === true) {
			Theme::addHtmlClass('body', 'header-fixed');
		}

        if (Theme::getOption('layout', 'header/fixed/tablet-and-mobile') === true) {
			Theme::addHtmlClass('body', 'header-tablet-and-mobile-fixed');
		}
	}

	private static function initToolbar() {
		if (Theme::getOption('layout', 'toolbar/display') === false) {
			return;
		}

		Theme::addHtmlClass('body', 'toolbar-enabled');

		if (Theme::getOption('layout', 'toolbar/width') == 'fluid') {
			Theme::addHtmlClass('toolbar-container', 'container-fluid');
		} else {
			Theme::addHtmlClass('toolbar-container', 'container-xxl');
		}

		if (Theme::getOption('layout', 'toolbar/fixed/desktop') === true) {
			Theme::addHtmlClass('body', 'toolbar-fixed');
		}

		if (Theme::getOption('layout', 'toolbar/fixed/tablet-and-mobile') === true) {
			Theme::addHtmlClass('body', 'toolbar-tablet-and-mobile-fixed');
		}
	}

	private static function initPageTitle() {
		if (Theme::getOption('layout', 'page-title/display') === false) {
			return;
		}

		if (Theme::getOption('layout', 'header/left') === 'page-title') {
			Theme::setOption('layout', 'page-title/responsive-target', '#kt_header_nav');
		}

		if (Theme::getOption('layout', 'page-title/responsive') === true) {
			Theme::addHtmlClass('page-title', 'mb-5 mb-lg-0');

			$attr = array();
			$attr['data-kt-swapper'] = 'true';
			$attr['data-kt-swapper-mode'] = 'prepend';
			$attr['data-kt-swapper-parent'] = "{default: '#kt_content_container', '" . Theme::getOption('layout', 'page-title/responsive-breakpoint') . "': '" . Theme::getOption('layout', 'page-title/responsive-target') . "'}";

			Theme::addHtmlAttributes('page-title', $attr);
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
		// Check if aside is displayed
		if (Theme::getOption('layout', 'aside/display') != true) {
			return;
		}

		Theme::addHtmlClass('body', 'aside-enabled');

		// Fixed aside
		if (Theme::getOption('layout', 'aside/fixed')) {
			Theme::addHtmlClass('body', 'aside-fixed');
		}
	}

	private static function initAsideMenu() {
		self::$asideMenu = new Menu( Theme::getOption('menu', 'demo6-aside'), Theme::getPagePath() );
		self::$asideMenu->setIconType(Theme::getOption('layout', 'aside/menu-icon'));
	}

	private static function initHorizontalMenu() {
		self::$horizontalMenu = new Menu( Theme::getOption('menu', 'horizontal'), Theme::getPagePath() );
		self::$horizontalMenu->setItemLinkClass('py-3');
		self::$horizontalMenu->setIconType(Theme::getOption('layout', 'header/menu-icon', 'svg'));
	}

	private static function initFooter() {
		if (Theme::getOption('layout', 'footer/width') == 'fluid') {
			Theme::addHtmlClass('footer-container', 'container-fluid');
		} else {
			Theme::addHtmlClass('footer-container', 'container-xxl');
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
	public static function getAsideMenu() {
		return self::$asideMenu;
	}

	public static function getHorizontalMenu() {
		return self::$horizontalMenu;
	}

	public static function getBreadcrumb() {
		$options = array(
			'skip-active' => false
		);

		return self::getHorizontalMenu()->getBreadcrumb($options);
	}

	public static function initLayout() {
		self::initPage();
		self::initHeader();
		self::initPageTitle();
		self::initToolbar();
		self::initContent();
		self::initAside();
		self::initFooter();
		self::initAsideMenu();
		self::initHorizontalMenu();
		self::initScripts();
	}
}
