<?php
/*
 * @author Aligent Consulting Team
 * @copyright Copyright (c) 2023 Aligent Consulting. (http://www.aligent.com.au)
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Aligent_IntrospectionAuth',
    __DIR__
);
