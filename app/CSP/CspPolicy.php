<?php
/**
 * Created by PhpStorm.
 * User: Hamza Zafer
 * Date: 05-Dec-18
 * Time: 1:58 PM
 */

namespace App\CSP;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class CspPolicy extends Basic
{

    public function configure()
    {
        parent::configure();
        $this->addDirectivesForBootstrap()
            ->addDirectivesForFontAwesome()
            ->addDirectivesForCloudFare()
            ->addDirectivesForGoogleFonts()
            ->addDirectivesForJquery()
        ;
    }


    protected function addDirectivesForBootstrap() :self
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->addDirective(Directive::FONT, ['*.bootstrapcdn.com'])
            ->addDirective(Directive::SCRIPT, ['*.bootstrapcdn.com'])
            ->addDirective(Directive::STYLE, ['*.bootstrapcdn.com']);
    }

    protected function addDirectivesForFontAwesome() :self
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->addDirective(Directive::FONT, ['*.fontawesome.com'])
            ->addDirective(Directive::SCRIPT, ['*.fontawesome.com'])
            ->addDirective(Directive::STYLE, ['*.fontawesome.com']);
    }

    protected function addDirectivesForCloudFare() :self
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->addDirective(Directive::SCRIPT, ['*.cloudflare']);
    }

    protected function addDirectivesForJquery() :self
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->addDirective(Directive::SCRIPT, ['*.jquery.com']);
    }

    protected function addDirectivesForGoogleFonts(): self
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->addDirective(Directive::FONT, 'fonts.gstatic.com')
            ->addDirective(Directive::SCRIPT, 'fonts.googleapis.com')
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com');
    }
}