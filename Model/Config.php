<?php
/*
 * @author Aligent Consulting Team
 * @copyright Copyright (c) 2023 Aligent Consulting. (http://www.aligent.com.au)
 */

declare(strict_types=1);
namespace Aligent\IntrospectionAuth\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    private const XML_PATH_INTROSPECTION_AUTH_ENABLED = 'system/security/introspection_auth';

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {
    }

    /**
     * Indicates if introspection authorisation is enabled or disabled
     *
     * @return bool
     */
    public function getIntrospectionAuthEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_INTROSPECTION_AUTH_ENABLED);
    }
}
