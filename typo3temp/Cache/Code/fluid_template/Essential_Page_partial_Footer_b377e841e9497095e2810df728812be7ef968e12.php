<?php
class FluidCache_Essential_Page_partial_Footer_b377e841e9497095e2810df728812be7ef968e12 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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


<div class="container-wrap">
    <footer id="fh5co-footer" role="contentinfo">
        <div class="row">
            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments1 = array();
$arguments1['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'footerPageUid', $renderingContext);
$arguments1['column'] = '0';
$arguments1['order'] = 'sorting';
$arguments1['sortDirection'] = 'ASC';
$arguments1['contentUids'] = NULL;
$arguments1['sectionIndexOnly'] = false;
$arguments1['loadRegister'] = NULL;
$arguments1['render'] = true;
$arguments1['hideUntranslated'] = false;
$arguments1['limit'] = NULL;
$arguments1['slide'] = 0;
$arguments1['slideCollect'] = 0;
$arguments1['slideCollectReverse'] = 0;
$arguments1['as'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

            <!--';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments4 = array();
$arguments4['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'footerPageUid', $renderingContext);
$arguments4['column'] = '1';
$arguments4['order'] = 'sorting';
$arguments4['sortDirection'] = 'ASC';
$arguments4['contentUids'] = NULL;
$arguments4['sectionIndexOnly'] = false;
$arguments4['loadRegister'] = NULL;
$arguments4['render'] = true;
$arguments4['hideUntranslated'] = false;
$arguments4['limit'] = NULL;
$arguments4['slide'] = 0;
$arguments4['slideCollect'] = 0;
$arguments4['slideCollectReverse'] = 0;
$arguments4['as'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '-->
            <div class="col-md-3 col-md-push-1">
                <h4>Latest Posts</h4>
                <ul class="fh5co-footer-links">
                    <li><a href="#">Amazing Templates</a></li>
                    <li><a href="#">100+ Free Download Templates</a></li>
                    <li><a href="#">Neat is now available</a></li>
                    <li><a href="#">Download 1000+ icons</a></li>
                    <li><a href="#">Big Deal for this month of March, Join Us here</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-md-push-1">
                <h4>Links</h4>
                <ul class="fh5co-footer-links">
                    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments7 = array();
$arguments7['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'rootPageUid', $renderingContext);
$arguments7['as'] = 'page';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['forceClosingTag'] = false;
$arguments7['hideIfEmpty'] = false;
$arguments7['contenteditable'] = NULL;
$arguments7['contextmenu'] = NULL;
$arguments7['draggable'] = NULL;
$arguments7['dropzone'] = NULL;
$arguments7['translate'] = NULL;
$arguments7['spellcheck'] = NULL;
$arguments7['hidden'] = NULL;
$arguments7['showAccessProtected'] = false;
$arguments7['classAccessProtected'] = 'protected';
$arguments7['classAccessGranted'] = 'access-granted';
$arguments7['useShortcutUid'] = NULL;
$arguments7['useShortcutTarget'] = NULL;
$arguments7['useShortcutData'] = false;
$arguments7['tagName'] = 'ul';
$arguments7['tagNameChildren'] = 'li';
$arguments7['entryLevel'] = 0;
$arguments7['levels'] = 1;
$arguments7['expandAll'] = false;
$arguments7['classFirst'] = '';
$arguments7['classLast'] = '';
$arguments7['classActive'] = 'active';
$arguments7['classCurrent'] = 'current';
$arguments7['classHasSubpages'] = 'sub';
$arguments7['substElementUid'] = false;
$arguments7['showHiddenInMenu'] = false;
$arguments7['showCurrent'] = true;
$arguments7['linkCurrent'] = true;
$arguments7['linkActive'] = true;
$arguments7['titleFields'] = 'nav_title,title';
$arguments7['includeAnchorTitle'] = true;
$arguments7['includeSpacers'] = false;
$arguments7['deferred'] = false;
$arguments7['rootLineAs'] = 'rootLine';
$arguments7['excludePages'] = '';
$arguments7['forceAbsoluteUrl'] = false;
$arguments7['doktypes'] = '';
$arguments7['divider'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
                        <li>
                            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments10 = array();
$arguments10['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'rootPageUid', $renderingContext);
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['showAccessProtected'] = false;
$arguments10['classAccessProtected'] = 'protected';
$arguments10['classAccessGranted'] = 'access-granted';
$arguments10['useShortcutUid'] = NULL;
$arguments10['useShortcutTarget'] = NULL;
$arguments10['useShortcutData'] = false;
$arguments10['target'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['additionalParams'] = array (
);
$arguments10['pageType'] = 0;
$arguments10['noCache'] = false;
$arguments10['noCacheHash'] = false;
$arguments10['section'] = '';
$arguments10['linkAccessRestrictedPages'] = NULL;
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['titleFields'] = 'nav_title,title';
$arguments10['pageTitleAs'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output9 .= $viewHelper12->initializeArgumentsAndRender();

$output9 .= '
                        </li>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments13 = array();
$arguments13['each'] = $currentVariableContainer->getOrNull('page');
$arguments13['as'] = 'pageItem';
$arguments13['key'] = '';
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
                            <li>
                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$arguments16 = array();
$arguments16['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageItem'), 'uid', $renderingContext);
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['showAccessProtected'] = false;
$arguments16['classAccessProtected'] = 'protected';
$arguments16['classAccessGranted'] = 'access-granted';
$arguments16['useShortcutUid'] = NULL;
$arguments16['useShortcutTarget'] = NULL;
$arguments16['useShortcutData'] = false;
$arguments16['target'] = NULL;
$arguments16['rel'] = NULL;
$arguments16['additionalParams'] = array (
);
$arguments16['pageType'] = 0;
$arguments16['noCache'] = false;
$arguments16['noCacheHash'] = false;
$arguments16['section'] = '';
$arguments16['linkAccessRestrictedPages'] = NULL;
$arguments16['absolute'] = false;
$arguments16['addQueryString'] = false;
$arguments16['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments16['titleFields'] = 'nav_title,title';
$arguments16['pageTitleAs'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '
                            </li>
                        ';
return $output15;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output9 .= '
                    ';
return $output9;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper19->setArguments($arguments7);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output0 .= $viewHelper19->initializeArgumentsAndRender();

$output0 .= '
                </ul>
            </div>

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments20 = array();
$arguments20['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'footerPageUid', $renderingContext);
$arguments20['column'] = '2';
$arguments20['order'] = 'sorting';
$arguments20['sortDirection'] = 'ASC';
$arguments20['contentUids'] = NULL;
$arguments20['sectionIndexOnly'] = false;
$arguments20['loadRegister'] = NULL;
$arguments20['render'] = true;
$arguments20['hideUntranslated'] = false;
$arguments20['limit'] = NULL;
$arguments20['slide'] = 0;
$arguments20['slideCollect'] = 0;
$arguments20['slideCollectReverse'] = 0;
$arguments20['as'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '

        </div>

        <div class="row copyright">
            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments23 = array();
$arguments23['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'footerPageUid', $renderingContext);
$arguments23['column'] = '3';
$arguments23['order'] = 'sorting';
$arguments23['sortDirection'] = 'ASC';
$arguments23['contentUids'] = NULL;
$arguments23['sectionIndexOnly'] = false;
$arguments23['loadRegister'] = NULL;
$arguments23['render'] = true;
$arguments23['hideUntranslated'] = false;
$arguments23['limit'] = NULL;
$arguments23['slide'] = 0;
$arguments23['slideCollect'] = 0;
$arguments23['slideCollectReverse'] = 0;
$arguments23['as'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output0 .= $viewHelper25->initializeArgumentsAndRender();

$output0 .= '
        </div>
    </footer>
</div><!-- END container-wrap -->
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>


</body>
</html>
';


return $output0;
}


}
#1518192579    14360     