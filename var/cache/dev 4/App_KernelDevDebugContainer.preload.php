<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerCaEkfeM\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerCaEkfeM/EntityManagerGhostEbeb667.php';
require __DIR__.'/ContainerCaEkfeM/RequestPayloadValueResolverGhost3590451.php';
require __DIR__.'/ContainerCaEkfeM/getValidator_WhenService.php';
require __DIR__.'/ContainerCaEkfeM/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerCaEkfeM/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/ContainerCaEkfeM/getValidator_ExpressionService.php';
require __DIR__.'/ContainerCaEkfeM/getValidator_EmailService.php';
require __DIR__.'/ContainerCaEkfeM/getValidator_BuilderService.php';
require __DIR__.'/ContainerCaEkfeM/getValidatorService.php';
require __DIR__.'/ContainerCaEkfeM/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerCaEkfeM/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerCaEkfeM/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerCaEkfeM/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerCaEkfeM/getTwigService.php';
require __DIR__.'/ContainerCaEkfeM/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerCaEkfeM/getSession_FactoryService.php';
require __DIR__.'/ContainerCaEkfeM/getServicesResetterService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_RouteLoader_LogoutService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_RememberMe_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_CheckRememberMeConditions_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Authenticator_RememberMeHandler_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Authenticator_RememberMe_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_Authenticator_FormLogin_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getSecrets_VaultService.php';
require __DIR__.'/ContainerCaEkfeM/getRouting_LoaderService.php';
require __DIR__.'/ContainerCaEkfeM/getPropertyAccessorService.php';
require __DIR__.'/ContainerCaEkfeM/getMailer_TransportsService.php';
require __DIR__.'/ContainerCaEkfeM/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerCaEkfeM/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerCaEkfeM/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerCaEkfeM/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerCaEkfeM/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_TypeExtension_Password_PasswordHasherService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_TypeExtension_Form_PasswordHasherService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_Type_FormService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_Type_FileService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_Type_EntityService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_Type_ColorService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_ServerParamsService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_RegistryService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_Listener_PasswordHasherService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_FactoryService.php';
require __DIR__.'/ContainerCaEkfeM/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerCaEkfeM/getErrorControllerService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerCaEkfeM/getDoctrineService.php';
require __DIR__.'/ContainerCaEkfeM/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerCaEkfeM/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerCaEkfeM/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerCaEkfeM/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerCaEkfeM/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerCaEkfeM/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerCaEkfeM/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerCaEkfeM/getCache_SystemClearerService.php';
require __DIR__.'/ContainerCaEkfeM/getCache_SystemService.php';
require __DIR__.'/ContainerCaEkfeM/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerCaEkfeM/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerCaEkfeM/getCache_AppClearerService.php';
require __DIR__.'/ContainerCaEkfeM/getCache_AppService.php';
require __DIR__.'/ContainerCaEkfeM/getTemplateControllerService.php';
require __DIR__.'/ContainerCaEkfeM/getRedirectControllerService.php';
require __DIR__.'/ContainerCaEkfeM/getUserRepositoryService.php';
require __DIR__.'/ContainerCaEkfeM/getRegistrationFormTypeService.php';
require __DIR__.'/ContainerCaEkfeM/getSecurityControllerService.php';
require __DIR__.'/ContainerCaEkfeM/getRegistrationControllerService.php';
require __DIR__.'/ContainerCaEkfeM/getLoginControllerService.php';
require __DIR__.'/ContainerCaEkfeM/getHomeControllerService.php';
require __DIR__.'/ContainerCaEkfeM/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerCaEkfeM/get_ServiceLocator_RSTd_NAService.php';
require __DIR__.'/ContainerCaEkfeM/get_ServiceLocator_JUv_ZyjService.php';
require __DIR__.'/ContainerCaEkfeM/get_ServiceLocator_V6D1oJYService.php';
require __DIR__.'/ContainerCaEkfeM/get_ServiceLocator_CIRxLN7Service.php';
require __DIR__.'/ContainerCaEkfeM/get_Security_RequestMatcher_KLbKLHaService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_Security_UserValueResolverService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_Security_SecurityTokenValueResolverService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerCaEkfeM/get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\SymfonyCastsVerifyEmailBundle';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Security\EmailVerifier';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper';
$classes[] = 'Symfony\Component\HttpFoundation\UriSigner';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Factory\UriSignerFactory';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler';
$classes[] = 'Symfony\Component\Security\Core\Signature\SignatureHasher';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\RememberMeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Core\User\ChainUserProvider';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Validator\\Mapping\\ClassMetadata';
$classes[] = 'Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form';
$preloaded = Preloader::preload($classes, $preloaded);