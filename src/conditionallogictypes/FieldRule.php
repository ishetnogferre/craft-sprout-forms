<?php

namespace barrelstrength\sproutforms\conditionallogictypes;

use barrelstrength\sproutforms\base\ConditionalLogic;
use Craft;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Add a conditional logic to show or hide a Form field
 */
class FieldRule extends ConditionalLogic
{
    /**
     * @inheritDoc
     */
    public static function displayName(): string
    {
        return Craft::t('sprout-forms', 'Field Rule');
    }

    /**
     * @return string|null
     */
    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate('sprout-forms/_components/conditionallogictypes/fieldrule/settings',
            [
                'conditional' => $this
            ]
        );
    }
}

