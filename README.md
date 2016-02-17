### Quirky FourOFour Page for Magento
Simple module for adding a meta refresh to 404 pages that will redirect to a search results page made from the 404 pages url.
E.G. http://yoursite.com/something/random will be redirected to http://yoursite.com/catalogsearch/result/?q=something+random

### Installation
To install just download and copy the app directory into your Magento root directory.
Then on your 404 cms page add the block xml code:
```    <reference name="content">
    <block type="fourofour/fourofour" name="fourofour_fourofour" template="fourofour/fourofour.phtml"></block>
    </reference>```
