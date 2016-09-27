<?php
namespace Lcobucci\DependencyInjection\Generators;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 */
final class YamlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @covers Lcobucci\DependencyInjection\Generator::__construct
     * @covers Lcobucci\DependencyInjection\Generators\Yaml::getLoader
     */
    public function getLoaderShouldReturnAYamlLoader()
    {
        $container = $this->createMock(ContainerBuilder::class);
        $generator = new Yaml();

        self::assertInstanceOf(YamlFileLoader::class, $generator->getLoader($container, []));
    }
}
