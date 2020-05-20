<?php

namespace Container3E68nE2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class App_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'twig' => 'getTwigService',
        ];

        $this->aliases = [];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\KernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Kernel\\MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'\\src\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ErrorListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\event-dispatcher\\src\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher-contracts\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\container\\src\\ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Environment.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\UrlHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src\\MissingExtensionSuggestor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ControllerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\TemplateListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Templating\\TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\AbstractLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Log\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\DefaultMarshaller.php';

        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('89GCrcmsdV', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';

        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('0ldQIXP82E', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 1 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
        }, 2), true, ($this->targetDir.''.'/App_KernelDevDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService', false],
            'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService', false],
            'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService', false],
            'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService', false],
            'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService', false],
            'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService', false],
            'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService', false],
            'maker.auto_command.make_functional_test' => ['privates', 'maker.auto_command.make_functional_test', 'getMaker_AutoCommand_MakeFunctionalTestService', false],
            'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService', false],
            'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService', false],
            'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService', false],
            'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService', false],
            'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService', false],
            'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService', false],
            'maker.auto_command.make_unit_test' => ['privates', 'maker.auto_command.make_unit_test', 'getMaker_AutoCommand_MakeUnitTestService', false],
            'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService', false],
            'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService', false],
            'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_functional_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_unit_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ErrorController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\ErrorRenderer\\TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, true)));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 4 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 5 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 6)));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2)));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)));
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ])));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (false) {
                yield 'cache.annotations' => null;
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (false) + (int) (false);
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Session.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'strict_variables' => true]);

        $b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('dev');
        $c->setDebug(true);
        if ($this->has('request_stack')) {
            $c->setRequestStack($b);
        }
        $d = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), NULL));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addGlobal('app', $c);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
        ])));
        $instance->registerUndefinedFilterCallback([0 => $d, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $d, 1 => 'suggestFunction']);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
        }, 1));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\yaml\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\EventListener\\ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), true);
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()))), NULL);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'maker.auto_command.make_auth' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeAuthService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Security\\SecurityConfigUpdater.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\DoctrineHelper.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), $b, ($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL)))), $a, $b);

        $instance->setName('make:auth');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeCommand.php';

        $this->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:command');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeController.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:controller');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_crud' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCrudService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeCrud.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\DoctrineHelper.php';

        $this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL))), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:crud');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeEntityService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeEntity.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\DoctrineHelper.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL))), \dirname(__DIR__, 4), $b), $a, $b);

        $instance->setName('make:entity');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_fixtures' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFixturesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeFixtures.php';

        $this->privates['maker.auto_command.make_fixtures'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFixtures(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:fixtures');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFormService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeForm.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\DoctrineHelper.php';

        $this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? ($this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', NULL))), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_functional_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFunctionalTestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeFunctionalTest.php';

        $this->privates['maker.auto_command.make_functional_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFunctionalTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:functional-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_migration' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMigrationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\ApplicationAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeMigration.php';

        $this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:migration');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeRegistrationFormService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeRegistrationForm.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_registration_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm($a, ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService()), ($this->services['router'] ?? $this->getRouterService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:registration-form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeSerializerEncoder.php';

        $this->privates['maker.auto_command.make_serializer_encoder'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:encoder');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_normalizer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerNormalizerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeSerializerNormalizer.php';

        $this->privates['maker.auto_command.make_serializer_normalizer'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:normalizer');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeSubscriber.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\EventRegistry.php';

        $this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:subscriber');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_twig_extension' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTwigExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeTwigExtension.php';

        $this->privates['maker.auto_command.make_twig_extension'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:twig-extension');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_unit_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUnitTestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeUnitTest.php';

        $this->privates['maker.auto_command.make_unit_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUnitTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:unit-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUserService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeUser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Security\\UserClassBuilder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Security\\SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater()))), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:user');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_validator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeValidator.php';

        $this->privates['maker.auto_command.make_validator'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeValidator(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:validator');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeVoter.php';

        $this->privates['maker.auto_command.make_voter'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeVoter(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:voter');

        return $instance;
    }

    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    protected function getMaker_FileManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\FileManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Util\\AutoloaderUtil.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Util\\ComposerAutoloaderFinder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        return $this->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), \dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    protected function getMaker_GeneratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Generator.php';

        return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), 'App');
    }

    /**
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    protected function getMaker_Renderer_FormTypeRendererService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Renderer\\FormTypeRenderer.php';

        return $this->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(NULL, NULL), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Command\\LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\LazyLoadingFragmentHandler.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), [], (\dirname(__DIR__, 4).'/templates')));
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'debug.container.dump' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/App_KernelDevDebugContainer.xml'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'\\log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'App_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'console.command.ids' => [

            ],
        ];
    }
}
