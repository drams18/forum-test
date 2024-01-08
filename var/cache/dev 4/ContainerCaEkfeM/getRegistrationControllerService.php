<?php

namespace ContainerCaEkfeM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RegistrationController.php';
        include_once \dirname(__DIR__, 4).'/src/Security/EmailVerifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UriSigner.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Factory/UriSignerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Util/VerifyEmailQueryUtility.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Generator/VerifyEmailTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $container->services['App\\Controller\\RegistrationController'] = $instance = new \App\Controller\RegistrationController(new \App\Security\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($container->services['router'] ?? self::getRouterService($container)), (new \SymfonyCasts\Bundle\VerifyEmail\Factory\UriSignerFactory($container->getEnv('APP_SECRET'), 'signature'))->createUriSigner(), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600), new \Symfony\Component\Mailer\Mailer(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')), NULL, ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'))));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\RegistrationController', $container));

        return $instance;
    }
}
