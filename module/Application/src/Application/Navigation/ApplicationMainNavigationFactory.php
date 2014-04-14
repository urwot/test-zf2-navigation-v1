<?php
namespace Application\Navigation;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ApplicationMainNavigationFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$navigation = new ApplicationMainNavigation();
		return $navigation->createService($serviceLocator);
	}
}