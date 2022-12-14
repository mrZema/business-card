<?php

namespace core\entities\rbac\rules;

use yii\rbac\Item;
use yii\rbac\Rule;

class ExampleRule extends Rule
{
    public $name = 'exampleRule';

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated width.
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params): bool
    {
        return true;
    }
}
