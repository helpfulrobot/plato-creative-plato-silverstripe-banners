<?php
/**
 * Adds a banner image and text to each page.
 *
 * @package plato-silverstripe-banners
 */
class PageExtension extends DataExtension
{
    /**
	 * @var array
	 */
    private static $db = array(
        "BannerTitle" => "Varchar(255)"
    );

    /**
	 * @var array
	 */
    private static $has_one = array(
		"BannerImage" => "Image"
	);

    /**
     * @return FieldList
     */
    public function updateCMSFields(FieldList $fields)
    {
        if (!in_array($this->owner->ClassName, $this->owner->config()->BannerExcludedPageTypes)) {
             $fields->addFieldToTab('Root.Banner', TextField::create("BannerTitle", "Title")->setDescription("Title of the banner"));
             $fields->addFieldToTab('Root.Banner', UploadField::create("BannerImage", "Banner Image")->setFolderName("Banners"));
        }

        return $fields;
    }
}
