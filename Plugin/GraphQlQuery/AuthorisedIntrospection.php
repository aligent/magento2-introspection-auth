<?php
/*
 * @author Aligent Consulting Team
 * @copyright Copyright (c) 2023 Aligent Consulting. (http://www.aligent.com.au)
 */

declare(strict_types=1);
namespace Aligent\IntrospectionAuth\Plugin\GraphQlQuery;

use Aligent\IntrospectionAuth\Model\Config;
use Magento\Framework\GraphQl\Query\IntrospectionConfiguration;
use Magento\Framework\Webapi\Authorization;

class AuthorisedIntrospection
{
    private const ADMIN_RESOURCE = 'Aligent_Introspection::introspection_allowed';

    /**
     * @param Authorization $authorization
     * @param Config $config
     */
    public function __construct(
        private readonly Authorization $authorization,
        private readonly Config $config
    ) {
    }

    /**
     * Only allow introspection for authorised users
     *
     * @param IntrospectionConfiguration $subject
     * @param bool $result
     * @return bool
     */
    public function afterIsIntrospectionDisabled(IntrospectionConfiguration $subject, bool $result): bool
    {
        if (!$this->config->getIntrospectionAuthEnabled() || $result) {
            return $result;
        }

        if (!$this->authorization->isAllowed([self::ADMIN_RESOURCE])) {
            return true;
        }
        return false;
    }
}
