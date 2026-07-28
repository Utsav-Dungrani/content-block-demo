<?php

declare(strict_types=1);

namespace NitsanAi\Demo\ContentSecurityPolicy\EventListener;

use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Directive;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Event\PolicyMutatedEvent;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\UriValue;

/**
 * Allows Google Maps embeds in the contact Content Block backend preview.
 */
#[AsEventListener(identifier: 'demo/google-maps-backend-policy')]
final readonly class GoogleMapsBackendPolicyListener
{
    public function __invoke(PolicyMutatedEvent $event): void
    {
        if (!$event->scope->type->isBackend()) {
            return;
        }

        $event->getCurrentPolicy()->extend(
            Directive::FrameSrc,
            new UriValue('www.google.com'),
            new UriValue('maps.google.com'),
        );
    }
}
