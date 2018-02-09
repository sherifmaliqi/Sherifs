<?php
class FluidCache_Essential_Page_partial_Header_f923435743d0515d85058111bafa3a2bc53f8483 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '


<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container-wrap">
            <div class="top-menu">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="index.html">Neat</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments1 = array();
$arguments1['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'rootPageUid', $renderingContext);
$arguments1['as'] = 'page';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['forceClosingTag'] = false;
$arguments1['hideIfEmpty'] = false;
$arguments1['contenteditable'] = NULL;
$arguments1['contextmenu'] = NULL;
$arguments1['draggable'] = NULL;
$arguments1['dropzone'] = NULL;
$arguments1['translate'] = NULL;
$arguments1['spellcheck'] = NULL;
$arguments1['hidden'] = NULL;
$arguments1['showAccessProtected'] = false;
$arguments1['classAccessProtected'] = 'protected';
$arguments1['classAccessGranted'] = 'access-granted';
$arguments1['useShortcutUid'] = NULL;
$arguments1['useShortcutTarget'] = NULL;
$arguments1['useShortcutData'] = false;
$arguments1['tagName'] = 'ul';
$arguments1['tagNameChildren'] = 'li';
$arguments1['entryLevel'] = 0;
$arguments1['levels'] = 1;
$arguments1['expandAll'] = false;
$arguments1['classFirst'] = '';
$arguments1['classLast'] = '';
$arguments1['classActive'] = 'active';
$arguments1['classCurrent'] = 'current';
$arguments1['classHasSubpages'] = 'sub';
$arguments1['substElementUid'] = false;
$arguments1['showHiddenInMenu'] = false;
$arguments1['showCurrent'] = true;
$arguments1['linkCurrent'] = true;
$arguments1['linkActive'] = true;
$arguments1['titleFields'] = 'nav_title,title';
$arguments1['includeAnchorTitle'] = true;
$arguments1['includeSpacers'] = false;
$arguments1['deferred'] = false;
$arguments1['rootLineAs'] = 'rootLine';
$arguments1['excludePages'] = '';
$arguments1['forceAbsoluteUrl'] = false;
$arguments1['doktypes'] = '';
$arguments1['divider'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
                                <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments5 = array();
$arguments5['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'active', $renderingContext);
$arguments5['keepQuotes'] = false;
$arguments5['encoding'] = NULL;
$arguments5['doubleEncode'] = true;
$renderChildrenClosure6 = function() {return NULL;};
$value7 = ($arguments5['value'] !== NULL ? $arguments5['value'] : $renderChildrenClosure6());
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value7) ? $value7 : htmlspecialchars($value7, ($arguments5['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments5['encoding'] !== NULL ? $arguments5['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments5['doubleEncode'])), 1);
$arguments4['then'] = 'active';
$arguments4['else'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure8, $renderingContext);

$output3 .= '">
                                    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments9 = array();
$arguments9['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'rootPageUid', $renderingContext);
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['showAccessProtected'] = false;
$arguments9['classAccessProtected'] = 'protected';
$arguments9['classAccessGranted'] = 'access-granted';
$arguments9['useShortcutUid'] = NULL;
$arguments9['useShortcutTarget'] = NULL;
$arguments9['useShortcutData'] = false;
$arguments9['target'] = NULL;
$arguments9['rel'] = NULL;
$arguments9['additionalParams'] = array (
);
$arguments9['pageType'] = 0;
$arguments9['noCache'] = false;
$arguments9['noCacheHash'] = false;
$arguments9['section'] = '';
$arguments9['linkAccessRestrictedPages'] = NULL;
$arguments9['absolute'] = false;
$arguments9['addQueryString'] = false;
$arguments9['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments9['titleFields'] = 'nav_title,title';
$arguments9['pageTitleAs'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output3 .= $viewHelper11->initializeArgumentsAndRender();

$output3 .= '
                                </li>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments12 = array();
$arguments12['each'] = $currentVariableContainer->getOrNull('page');
$arguments12['as'] = 'pageItem';
$arguments12['key'] = '';
$arguments12['reverse'] = false;
$arguments12['iteration'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'hasSubPages', $renderingContext));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
                                            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments21 = array();
$arguments21['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'uid', $renderingContext);
$arguments21['as'] = 'subpage';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['forceClosingTag'] = false;
$arguments21['hideIfEmpty'] = false;
$arguments21['contenteditable'] = NULL;
$arguments21['contextmenu'] = NULL;
$arguments21['draggable'] = NULL;
$arguments21['dropzone'] = NULL;
$arguments21['translate'] = NULL;
$arguments21['spellcheck'] = NULL;
$arguments21['hidden'] = NULL;
$arguments21['showAccessProtected'] = false;
$arguments21['classAccessProtected'] = 'protected';
$arguments21['classAccessGranted'] = 'access-granted';
$arguments21['useShortcutUid'] = NULL;
$arguments21['useShortcutTarget'] = NULL;
$arguments21['useShortcutData'] = false;
$arguments21['tagName'] = 'ul';
$arguments21['tagNameChildren'] = 'li';
$arguments21['entryLevel'] = 0;
$arguments21['levels'] = 1;
$arguments21['expandAll'] = false;
$arguments21['classFirst'] = '';
$arguments21['classLast'] = '';
$arguments21['classActive'] = 'active';
$arguments21['classCurrent'] = 'current';
$arguments21['classHasSubpages'] = 'sub';
$arguments21['substElementUid'] = false;
$arguments21['showHiddenInMenu'] = false;
$arguments21['showCurrent'] = true;
$arguments21['linkCurrent'] = true;
$arguments21['linkActive'] = true;
$arguments21['titleFields'] = 'nav_title,title';
$arguments21['includeAnchorTitle'] = true;
$arguments21['includeSpacers'] = false;
$arguments21['deferred'] = false;
$arguments21['rootLineAs'] = 'rootLine';
$arguments21['excludePages'] = '';
$arguments21['forceAbsoluteUrl'] = false;
$arguments21['doktypes'] = '';
$arguments21['divider'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                                                <li class="has-dropdown">
                                                    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments24 = array();
$arguments24['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'uid', $renderingContext);
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['showAccessProtected'] = false;
$arguments24['classAccessProtected'] = 'protected';
$arguments24['classAccessGranted'] = 'access-granted';
$arguments24['useShortcutUid'] = NULL;
$arguments24['useShortcutTarget'] = NULL;
$arguments24['useShortcutData'] = false;
$arguments24['target'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['additionalParams'] = array (
);
$arguments24['pageType'] = 0;
$arguments24['noCache'] = false;
$arguments24['noCacheHash'] = false;
$arguments24['section'] = '';
$arguments24['linkAccessRestrictedPages'] = NULL;
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['titleFields'] = 'nav_title,title';
$arguments24['pageTitleAs'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output23 .= $viewHelper26->initializeArgumentsAndRender();

$output23 .= '
                                                    <ul class="dropdown">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments27 = array();
$arguments27['each'] = $currentVariableContainer->getOrNull('subpage');
$arguments27['as'] = 'subItem';
$arguments27['key'] = '';
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                                                            <li>
                                                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments30 = array();
$arguments30['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'uid', $renderingContext);
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['showAccessProtected'] = false;
$arguments30['classAccessProtected'] = 'protected';
$arguments30['classAccessGranted'] = 'access-granted';
$arguments30['useShortcutUid'] = NULL;
$arguments30['useShortcutTarget'] = NULL;
$arguments30['useShortcutData'] = false;
$arguments30['target'] = NULL;
$arguments30['rel'] = NULL;
$arguments30['additionalParams'] = array (
);
$arguments30['pageType'] = 0;
$arguments30['noCache'] = false;
$arguments30['noCacheHash'] = false;
$arguments30['section'] = '';
$arguments30['linkAccessRestrictedPages'] = NULL;
$arguments30['absolute'] = false;
$arguments30['addQueryString'] = false;
$arguments30['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments30['titleFields'] = 'nav_title,title';
$arguments30['pageTitleAs'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output29 .= $viewHelper32->initializeArgumentsAndRender();

$output29 .= '
                                                            </li>
                                                        ';
return $output29;
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output23 .= '
                                                    </ul>
                                                </li>
                                            ';
return $output23;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper33->setArguments($arguments21);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output20 .= $viewHelper33->initializeArgumentsAndRender();

$output20 .= '
                                        ';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'active', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode'])), 1);
$arguments37['then'] = 'active';
$arguments37['else'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure41, $renderingContext);

$output36 .= '">
                                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments42 = array();
$arguments42['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'uid', $renderingContext);
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['showAccessProtected'] = false;
$arguments42['classAccessProtected'] = 'protected';
$arguments42['classAccessGranted'] = 'access-granted';
$arguments42['useShortcutUid'] = NULL;
$arguments42['useShortcutTarget'] = NULL;
$arguments42['useShortcutData'] = false;
$arguments42['target'] = NULL;
$arguments42['rel'] = NULL;
$arguments42['additionalParams'] = array (
);
$arguments42['pageType'] = 0;
$arguments42['noCache'] = false;
$arguments42['noCacheHash'] = false;
$arguments42['section'] = '';
$arguments42['linkAccessRestrictedPages'] = NULL;
$arguments42['absolute'] = false;
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['titleFields'] = 'nav_title,title';
$arguments42['pageTitleAs'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output36 .= $viewHelper44->initializeArgumentsAndRender();

$output36 .= '
                                            </li>
                                        ';
return $output36;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output17 .= '
                                    ';
return $output17;
};
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
                                            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments46 = array();
$arguments46['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'uid', $renderingContext);
$arguments46['as'] = 'subpage';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['forceClosingTag'] = false;
$arguments46['hideIfEmpty'] = false;
$arguments46['contenteditable'] = NULL;
$arguments46['contextmenu'] = NULL;
$arguments46['draggable'] = NULL;
$arguments46['dropzone'] = NULL;
$arguments46['translate'] = NULL;
$arguments46['spellcheck'] = NULL;
$arguments46['hidden'] = NULL;
$arguments46['showAccessProtected'] = false;
$arguments46['classAccessProtected'] = 'protected';
$arguments46['classAccessGranted'] = 'access-granted';
$arguments46['useShortcutUid'] = NULL;
$arguments46['useShortcutTarget'] = NULL;
$arguments46['useShortcutData'] = false;
$arguments46['tagName'] = 'ul';
$arguments46['tagNameChildren'] = 'li';
$arguments46['entryLevel'] = 0;
$arguments46['levels'] = 1;
$arguments46['expandAll'] = false;
$arguments46['classFirst'] = '';
$arguments46['classLast'] = '';
$arguments46['classActive'] = 'active';
$arguments46['classCurrent'] = 'current';
$arguments46['classHasSubpages'] = 'sub';
$arguments46['substElementUid'] = false;
$arguments46['showHiddenInMenu'] = false;
$arguments46['showCurrent'] = true;
$arguments46['linkCurrent'] = true;
$arguments46['linkActive'] = true;
$arguments46['titleFields'] = 'nav_title,title';
$arguments46['includeAnchorTitle'] = true;
$arguments46['includeSpacers'] = false;
$arguments46['deferred'] = false;
$arguments46['rootLineAs'] = 'rootLine';
$arguments46['excludePages'] = '';
$arguments46['forceAbsoluteUrl'] = false;
$arguments46['doktypes'] = '';
$arguments46['divider'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
                                                <li class="has-dropdown">
                                                    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments49 = array();
$arguments49['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'uid', $renderingContext);
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['showAccessProtected'] = false;
$arguments49['classAccessProtected'] = 'protected';
$arguments49['classAccessGranted'] = 'access-granted';
$arguments49['useShortcutUid'] = NULL;
$arguments49['useShortcutTarget'] = NULL;
$arguments49['useShortcutData'] = false;
$arguments49['target'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['additionalParams'] = array (
);
$arguments49['pageType'] = 0;
$arguments49['noCache'] = false;
$arguments49['noCacheHash'] = false;
$arguments49['section'] = '';
$arguments49['linkAccessRestrictedPages'] = NULL;
$arguments49['absolute'] = false;
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['titleFields'] = 'nav_title,title';
$arguments49['pageTitleAs'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output48 .= $viewHelper51->initializeArgumentsAndRender();

$output48 .= '
                                                    <ul class="dropdown">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments52 = array();
$arguments52['each'] = $currentVariableContainer->getOrNull('subpage');
$arguments52['as'] = 'subItem';
$arguments52['key'] = '';
$arguments52['reverse'] = false;
$arguments52['iteration'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
                                                            <li>
                                                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments55 = array();
$arguments55['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subItem'), 'uid', $renderingContext);
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['showAccessProtected'] = false;
$arguments55['classAccessProtected'] = 'protected';
$arguments55['classAccessGranted'] = 'access-granted';
$arguments55['useShortcutUid'] = NULL;
$arguments55['useShortcutTarget'] = NULL;
$arguments55['useShortcutData'] = false;
$arguments55['target'] = NULL;
$arguments55['rel'] = NULL;
$arguments55['additionalParams'] = array (
);
$arguments55['pageType'] = 0;
$arguments55['noCache'] = false;
$arguments55['noCacheHash'] = false;
$arguments55['section'] = '';
$arguments55['linkAccessRestrictedPages'] = NULL;
$arguments55['absolute'] = false;
$arguments55['addQueryString'] = false;
$arguments55['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments55['titleFields'] = 'nav_title,title';
$arguments55['pageTitleAs'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output54 .= $viewHelper57->initializeArgumentsAndRender();

$output54 .= '
                                                            </li>
                                                        ';
return $output54;
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output48 .= '
                                                    </ul>
                                                </li>
                                            ';
return $output48;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper58->setArguments($arguments46);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output45 .= $viewHelper58->initializeArgumentsAndRender();

$output45 .= '
                                        ';
return $output45;
};
$arguments15['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments60 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'active', $renderingContext);
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());
$arguments60['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode'])), 1);
$arguments60['then'] = 'active';
$arguments60['else'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure64, $renderingContext);

$output59 .= '">
                                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments65 = array();
$arguments65['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'uid', $renderingContext);
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['showAccessProtected'] = false;
$arguments65['classAccessProtected'] = 'protected';
$arguments65['classAccessGranted'] = 'access-granted';
$arguments65['useShortcutUid'] = NULL;
$arguments65['useShortcutTarget'] = NULL;
$arguments65['useShortcutData'] = false;
$arguments65['target'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['additionalParams'] = array (
);
$arguments65['pageType'] = 0;
$arguments65['noCache'] = false;
$arguments65['noCacheHash'] = false;
$arguments65['section'] = '';
$arguments65['linkAccessRestrictedPages'] = NULL;
$arguments65['absolute'] = false;
$arguments65['addQueryString'] = false;
$arguments65['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments65['titleFields'] = 'nav_title,title';
$arguments65['pageTitleAs'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper67->setArguments($arguments65);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output59 .= $viewHelper67->initializeArgumentsAndRender();

$output59 .= '
                                            </li>
                                        ';
return $output59;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
                                ';
return $output14;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
                            ';
return $output3;
};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper68->setArguments($arguments1);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output0 .= $viewHelper68->initializeArgumentsAndRender();

$output0 .= '
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>';


return $output0;
}


}
#1518192421    33307     