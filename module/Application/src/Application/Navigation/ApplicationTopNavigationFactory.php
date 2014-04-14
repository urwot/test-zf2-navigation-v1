<?php
namespace Application\Navigation;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ApplicationTopNavigationFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$navigation = new ApplicationTopNavigation();
		return $navigation->createService($serviceLocator);
	}
}