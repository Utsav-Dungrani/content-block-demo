<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Type\Map;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Scope;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Mutation;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\UriValue;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Directive;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\MutationMode;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\MutationCollection;

return Map::fromEntries([
    // Provide declarations for the backend only
    Scope::backend(),
    new MutationCollection(
        new Mutation(
            MutationMode::Extend,
            // Note: it's "FrameSrc" not "IFrameSrc"
            Directive::FrameSrc,
            new UriValue('https://www.google.com'),
            new UriValue('https://maps.google.com'),
        ),
    ),
]);
