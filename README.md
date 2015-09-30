# plato-silverstripe-banners
Plato's Home Slides module for the base installer. Please see requirements before installing.

### Requirements
+ SilverStripe 3.1.*
+ Foundation 5 (html/css framework)

### Installation
```json
composer require plato-creative/plato-silverstripe-banners dev-master
```

### Configuration
There is currently a couple config option. One is to exclude the banner from both the CMS and frontend based on ClassName. The other is to change layout quickly.
```yaml
Page:
  BannerExcludedPageTypes:
    - HomePage
    - AnotherPage
  BannerLayout: 1
```
