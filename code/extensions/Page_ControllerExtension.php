<?php
/**
 * Extends init() to add extra requirements
 *
 * @package plato-silverstripe-banners
 */
class Page_ControllerExtension extends DataExtension
{
    /**
     * Inject requirements after main init
     */
    public function onAfterInit()
    {
        if (!in_array($this->owner->ClassName, Config::inst()->get('Page', 'BannerExcludedPageTypes'))) {
            Requirements::css(BANNERS_DIR . '/css/banners.css');
        }
    }

}
