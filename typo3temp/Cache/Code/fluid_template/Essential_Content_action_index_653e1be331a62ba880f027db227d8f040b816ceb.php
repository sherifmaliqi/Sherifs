<?php
class FluidCache_Essential_Content_action_index_653e1be331a62ba880f027db227d8f040b816ceb extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Page';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['id'] = 'mainPage';
$arguments1['label'] = 'Main Page';
$arguments1['description'] = NULL;
$arguments1['icon'] = NULL;
$arguments1['mergeValues'] = false;
$arguments1['enabled'] = true;
$arguments1['wizardTab'] = NULL;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments4 = array();
$arguments4['name'] = 'grid';
$arguments4['label'] = NULL;
$arguments4['variables'] = array (
);
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments7 = array();
$arguments7['name'] = 'bannerRow';
$arguments7['label'] = 'Banner Row';
$arguments7['variables'] = array (
);
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments10 = array();
$arguments10['name'] = 'bannerColumn';
$arguments10['colPos'] = '0';
$arguments10['label'] = 'Banner Column';
$arguments10['colspan'] = NULL;
$arguments10['rowspan'] = NULL;
$arguments10['style'] = NULL;
$arguments10['variables'] = array (
);
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
            ';
return $output9;
};

$output6 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments12 = array();
$arguments12['name'] = 'servicesRow';
$arguments12['label'] = 'Services Row';
$arguments12['variables'] = array (
);
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments15 = array();
$arguments15['name'] = 'servicesColumn';
$arguments15['colPos'] = '1';
$arguments15['label'] = 'Services Column';
$arguments15['colspan'] = NULL;
$arguments15['rowspan'] = NULL;
$arguments15['style'] = NULL;
$arguments15['variables'] = array (
);
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output14 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
            ';
return $output14;
};

$output6 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments17 = array();
$arguments17['name'] = 'workRow';
$arguments17['label'] = 'Work Row';
$arguments17['variables'] = array (
);
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments20 = array();
$arguments20['name'] = 'workColumn';
$arguments20['colPos'] = '2';
$arguments20['label'] = 'Work Column';
$arguments20['colspan'] = NULL;
$arguments20['rowspan'] = NULL;
$arguments20['style'] = NULL;
$arguments20['variables'] = array (
);
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};

$output19 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
            ';
return $output19;
};

$output6 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments22 = array();
$arguments22['name'] = 'statsRow';
$arguments22['label'] = 'Stats Row';
$arguments22['variables'] = array (
);
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments25 = array();
$arguments25['name'] = 'statsColumn';
$arguments25['colPos'] = '3';
$arguments25['label'] = 'Stats Column';
$arguments25['colspan'] = NULL;
$arguments25['rowspan'] = NULL;
$arguments25['style'] = NULL;
$arguments25['variables'] = array (
);
$arguments25['extensionName'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};

$output24 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
            ';
return $output24;
};

$output6 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments27 = array();
$arguments27['name'] = 'newsRow';
$arguments27['label'] = 'News Row';
$arguments27['variables'] = array (
);
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments30 = array();
$arguments30['name'] = 'newsColumn';
$arguments30['colPos'] = '4';
$arguments30['label'] = 'News Column';
$arguments30['colspan'] = NULL;
$arguments30['rowspan'] = NULL;
$arguments30['style'] = NULL;
$arguments30['variables'] = array (
);
$arguments30['extensionName'] = NULL;
$renderChildrenClosure31 = function() {return NULL;};

$output29 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
            ';
return $output29;
};

$output6 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output6 .= '
        ';
return $output6;
};

$output3 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output32 = '';

$output32 .= '
    <div class="container-wrap">
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments33 = array();
$arguments33['column'] = '0';
$arguments33['order'] = 'sorting';
$arguments33['sortDirection'] = 'ASC';
$arguments33['pageUid'] = 0;
$arguments33['contentUids'] = NULL;
$arguments33['sectionIndexOnly'] = false;
$arguments33['loadRegister'] = NULL;
$arguments33['render'] = true;
$arguments33['hideUntranslated'] = false;
$arguments33['limit'] = NULL;
$arguments33['slide'] = 0;
$arguments33['slideCollect'] = 0;
$arguments33['slideCollectReverse'] = 0;
$arguments33['as'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output32 .= $viewHelper35->initializeArgumentsAndRender();

$output32 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments36 = array();
$arguments36['column'] = '1';
$arguments36['order'] = 'sorting';
$arguments36['sortDirection'] = 'ASC';
$arguments36['pageUid'] = 0;
$arguments36['contentUids'] = NULL;
$arguments36['sectionIndexOnly'] = false;
$arguments36['loadRegister'] = NULL;
$arguments36['render'] = true;
$arguments36['hideUntranslated'] = false;
$arguments36['limit'] = NULL;
$arguments36['slide'] = 0;
$arguments36['slideCollect'] = 0;
$arguments36['slideCollectReverse'] = 0;
$arguments36['as'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output32 .= $viewHelper38->initializeArgumentsAndRender();

$output32 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments39 = array();
$arguments39['column'] = '2';
$arguments39['order'] = 'sorting';
$arguments39['sortDirection'] = 'ASC';
$arguments39['pageUid'] = 0;
$arguments39['contentUids'] = NULL;
$arguments39['sectionIndexOnly'] = false;
$arguments39['loadRegister'] = NULL;
$arguments39['render'] = true;
$arguments39['hideUntranslated'] = false;
$arguments39['limit'] = NULL;
$arguments39['slide'] = 0;
$arguments39['slideCollect'] = 0;
$arguments39['slideCollectReverse'] = 0;
$arguments39['as'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output32 .= $viewHelper41->initializeArgumentsAndRender();

$output32 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments42 = array();
$arguments42['column'] = '3';
$arguments42['order'] = 'sorting';
$arguments42['sortDirection'] = 'ASC';
$arguments42['pageUid'] = 0;
$arguments42['contentUids'] = NULL;
$arguments42['sectionIndexOnly'] = false;
$arguments42['loadRegister'] = NULL;
$arguments42['render'] = true;
$arguments42['hideUntranslated'] = false;
$arguments42['limit'] = NULL;
$arguments42['slide'] = 0;
$arguments42['slideCollect'] = 0;
$arguments42['slideCollectReverse'] = 0;
$arguments42['as'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output32 .= $viewHelper44->initializeArgumentsAndRender();

$output32 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments45 = array();
$arguments45['column'] = '4';
$arguments45['order'] = 'sorting';
$arguments45['sortDirection'] = 'ASC';
$arguments45['pageUid'] = 0;
$arguments45['contentUids'] = NULL;
$arguments45['sectionIndexOnly'] = false;
$arguments45['loadRegister'] = NULL;
$arguments45['render'] = true;
$arguments45['hideUntranslated'] = false;
$arguments45['limit'] = NULL;
$arguments45['slide'] = 0;
$arguments45['slideCollect'] = 0;
$arguments45['slideCollectReverse'] = 0;
$arguments45['as'] = NULL;
$renderChildrenClosure46 = function() {return NULL;};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output32 .= $viewHelper47->initializeArgumentsAndRender();

$output32 .= '
    </div>
';


return $output32;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output48 = '';

$output48 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments49 = array();
$arguments49['name'] = 'Page';
$renderChildrenClosure50 = function() {return NULL;};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output48 .= $viewHelper51->initializeArgumentsAndRender();

$output48 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments52 = array();
$arguments52['name'] = 'Configuration';
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments55 = array();
$arguments55['id'] = 'mainPage';
$arguments55['label'] = 'Main Page';
$arguments55['description'] = NULL;
$arguments55['icon'] = NULL;
$arguments55['mergeValues'] = false;
$arguments55['enabled'] = true;
$arguments55['wizardTab'] = NULL;
$arguments55['compact'] = false;
$arguments55['variables'] = array (
);
$arguments55['options'] = NULL;
$arguments55['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments58 = array();
$arguments58['name'] = 'grid';
$arguments58['label'] = NULL;
$arguments58['variables'] = array (
);
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments61 = array();
$arguments61['name'] = 'bannerRow';
$arguments61['label'] = 'Banner Row';
$arguments61['variables'] = array (
);
$arguments61['extensionName'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments64 = array();
$arguments64['name'] = 'bannerColumn';
$arguments64['colPos'] = '0';
$arguments64['label'] = 'Banner Column';
$arguments64['colspan'] = NULL;
$arguments64['rowspan'] = NULL;
$arguments64['style'] = NULL;
$arguments64['variables'] = array (
);
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};

$output63 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
            ';
return $output63;
};

$output60 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments66 = array();
$arguments66['name'] = 'servicesRow';
$arguments66['label'] = 'Services Row';
$arguments66['variables'] = array (
);
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments69 = array();
$arguments69['name'] = 'servicesColumn';
$arguments69['colPos'] = '1';
$arguments69['label'] = 'Services Column';
$arguments69['colspan'] = NULL;
$arguments69['rowspan'] = NULL;
$arguments69['style'] = NULL;
$arguments69['variables'] = array (
);
$arguments69['extensionName'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};

$output68 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
            ';
return $output68;
};

$output60 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output60 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments71 = array();
$arguments71['name'] = 'workRow';
$arguments71['label'] = 'Work Row';
$arguments71['variables'] = array (
);
$arguments71['extensionName'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments74 = array();
$arguments74['name'] = 'workColumn';
$arguments74['colPos'] = '2';
$arguments74['label'] = 'Work Column';
$arguments74['colspan'] = NULL;
$arguments74['rowspan'] = NULL;
$arguments74['style'] = NULL;
$arguments74['variables'] = array (
);
$arguments74['extensionName'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};

$output73 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
            ';
return $output73;
};

$output60 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output60 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments76 = array();
$arguments76['name'] = 'statsRow';
$arguments76['label'] = 'Stats Row';
$arguments76['variables'] = array (
);
$arguments76['extensionName'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments79 = array();
$arguments79['name'] = 'statsColumn';
$arguments79['colPos'] = '3';
$arguments79['label'] = 'Stats Column';
$arguments79['colspan'] = NULL;
$arguments79['rowspan'] = NULL;
$arguments79['style'] = NULL;
$arguments79['variables'] = array (
);
$arguments79['extensionName'] = NULL;
$renderChildrenClosure80 = function() {return NULL;};

$output78 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
            ';
return $output78;
};

$output60 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output60 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments81 = array();
$arguments81['name'] = 'newsRow';
$arguments81['label'] = 'News Row';
$arguments81['variables'] = array (
);
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments84 = array();
$arguments84['name'] = 'newsColumn';
$arguments84['colPos'] = '4';
$arguments84['label'] = 'News Column';
$arguments84['colspan'] = NULL;
$arguments84['rowspan'] = NULL;
$arguments84['style'] = NULL;
$arguments84['variables'] = array (
);
$arguments84['extensionName'] = NULL;
$renderChildrenClosure85 = function() {return NULL;};

$output83 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
            ';
return $output83;
};

$output60 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output60 .= '
        ';
return $output60;
};

$output57 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
    ';
return $output57;
};

$output54 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
';
return $output54;
};

$output48 .= '';

$output48 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments86 = array();
$arguments86['name'] = 'Main';
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
    <div class="container-wrap">
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments89 = array();
$arguments89['column'] = '0';
$arguments89['order'] = 'sorting';
$arguments89['sortDirection'] = 'ASC';
$arguments89['pageUid'] = 0;
$arguments89['contentUids'] = NULL;
$arguments89['sectionIndexOnly'] = false;
$arguments89['loadRegister'] = NULL;
$arguments89['render'] = true;
$arguments89['hideUntranslated'] = false;
$arguments89['limit'] = NULL;
$arguments89['slide'] = 0;
$arguments89['slideCollect'] = 0;
$arguments89['slideCollectReverse'] = 0;
$arguments89['as'] = NULL;
$renderChildrenClosure90 = function() {return NULL;};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments92 = array();
$arguments92['column'] = '1';
$arguments92['order'] = 'sorting';
$arguments92['sortDirection'] = 'ASC';
$arguments92['pageUid'] = 0;
$arguments92['contentUids'] = NULL;
$arguments92['sectionIndexOnly'] = false;
$arguments92['loadRegister'] = NULL;
$arguments92['render'] = true;
$arguments92['hideUntranslated'] = false;
$arguments92['limit'] = NULL;
$arguments92['slide'] = 0;
$arguments92['slideCollect'] = 0;
$arguments92['slideCollectReverse'] = 0;
$arguments92['as'] = NULL;
$renderChildrenClosure93 = function() {return NULL;};
$viewHelper94 = $self->getViewHelper('$viewHelper94', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper94->setArguments($arguments92);
$viewHelper94->setRenderingContext($renderingContext);
$viewHelper94->setRenderChildrenClosure($renderChildrenClosure93);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output88 .= $viewHelper94->initializeArgumentsAndRender();

$output88 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments95 = array();
$arguments95['column'] = '2';
$arguments95['order'] = 'sorting';
$arguments95['sortDirection'] = 'ASC';
$arguments95['pageUid'] = 0;
$arguments95['contentUids'] = NULL;
$arguments95['sectionIndexOnly'] = false;
$arguments95['loadRegister'] = NULL;
$arguments95['render'] = true;
$arguments95['hideUntranslated'] = false;
$arguments95['limit'] = NULL;
$arguments95['slide'] = 0;
$arguments95['slideCollect'] = 0;
$arguments95['slideCollectReverse'] = 0;
$arguments95['as'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output88 .= $viewHelper97->initializeArgumentsAndRender();

$output88 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments98 = array();
$arguments98['column'] = '3';
$arguments98['order'] = 'sorting';
$arguments98['sortDirection'] = 'ASC';
$arguments98['pageUid'] = 0;
$arguments98['contentUids'] = NULL;
$arguments98['sectionIndexOnly'] = false;
$arguments98['loadRegister'] = NULL;
$arguments98['render'] = true;
$arguments98['hideUntranslated'] = false;
$arguments98['limit'] = NULL;
$arguments98['slide'] = 0;
$arguments98['slideCollect'] = 0;
$arguments98['slideCollectReverse'] = 0;
$arguments98['as'] = NULL;
$renderChildrenClosure99 = function() {return NULL;};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper100->setArguments($arguments98);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output88 .= $viewHelper100->initializeArgumentsAndRender();

$output88 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments101 = array();
$arguments101['column'] = '4';
$arguments101['order'] = 'sorting';
$arguments101['sortDirection'] = 'ASC';
$arguments101['pageUid'] = 0;
$arguments101['contentUids'] = NULL;
$arguments101['sectionIndexOnly'] = false;
$arguments101['loadRegister'] = NULL;
$arguments101['render'] = true;
$arguments101['hideUntranslated'] = false;
$arguments101['limit'] = NULL;
$arguments101['slide'] = 0;
$arguments101['slideCollect'] = 0;
$arguments101['slideCollectReverse'] = 0;
$arguments101['as'] = NULL;
$renderChildrenClosure102 = function() {return NULL;};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output88 .= $viewHelper103->initializeArgumentsAndRender();

$output88 .= '
    </div>
';
return $output88;
};

$output48 .= '';

$output48 .= '

';


return $output48;
}


}
#1518194833    29189     