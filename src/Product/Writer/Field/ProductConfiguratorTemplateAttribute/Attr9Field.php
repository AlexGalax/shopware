<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductConfiguratorTemplateAttribute;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\TextField;

class Attr9Field extends TextField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('attr9', 'attr9', 'product_configurator_template_attribute', $constraintBuilder);
    }
}