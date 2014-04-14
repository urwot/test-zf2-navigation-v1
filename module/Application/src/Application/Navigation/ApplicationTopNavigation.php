<?php
namespace Application\Navigation;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Navigation\Service\DefaultNavigationFactory;
use Zend\Debug\Debug;

class ApplicationTopNavigation extends DefaultNavigationFactory
{
	protected function getPages(ServiceLocatorInterface $serviceLocator)
	{
		$navigation = array();
		$countLevel1 = 0;
		$countLevel2 = 0;

		if (null === $this->pages) {
			
			$pages = $serviceLocator->get('Application\Model\MenuTable')->getMenu('top');

			if ($pages) {
				foreach ($pages as $key => $page) { 
					$navigation[$countLevel1] = array(
							'label' => $page->name,
							'uri'   => $page->link,
							'order' => $page->pos
					);
					
					// get submenus
					$subpages = $serviceLocator->get('Application\Model\MenuTable')->getSubmenus($page->id);

					if ($subpages) {
						foreach ($subpages as $keySub => $pageSub) {
							$navigation[$countLevel1]['pages'][$countLevel2] = array(
									'label' => $pageSub->name,
									'uri'   => $pageSub->link,
									'order' => $pageSub->pos
							);
							$countLevel2++;
							//Debug::dump($pageSub);
						}
					}
					$countLevel1++;
				}
			}

			$mvcEvent = $serviceLocator->get('Application')->getMvcEvent();

			$routeMatch = $mvcEvent->getRouteMatch();
			$router     = $mvcEvent->getRouter();
			$pages      = $this->getPagesFromConfig($navigation);

			$this->pages = $this->injectComponents(
					$pages,
					$routeMatch,
					$router
			);
		}

		return $this->pages;
	}
}