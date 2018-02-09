<?php
class FluidCache_Essential_Content_action_index_dd28f913a3bc47dbab3bb9e831b1381ae3dde2d6 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'footer';
$arguments1['label'] = 'Footer';
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
$arguments7['name'] = 'aboutRow';
$arguments7['label'] = 'About Row';
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
$arguments10['name'] = 'aboutColumn';
$arguments10['colPos'] = '0';
$arguments10['label'] = 'About Column';
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
$arguments12['name'] = 'newsRow';
$arguments12['label'] = 'News Row';
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
$arguments15['name'] = 'newsColumn';
$arguments15['colPos'] = '1';
$arguments15['label'] = 'News Column';
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
$arguments17['name'] = 'contactRow';
$arguments17['label'] = 'Contact Row';
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
$arguments20['name'] = 'contactColumn';
$arguments20['colPos'] = '2';
$arguments20['label'] = 'Contact Column';
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
$arguments22['name'] = 'copyrightClaimRow';
$arguments22['label'] = 'Copyright Claim Row';
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
$arguments25['name'] = 'copyrightClaimColumn';
$arguments25['colPos'] = '3';
$arguments25['label'] = 'Copyright Claim Column';
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



return '

';
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output27 = '';

$output27 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments28 = array();
$arguments28['name'] = 'Page';
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output27 .= $viewHelper30->initializeArgumentsAndRender();

$output27 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments31 = array();
$arguments31['name'] = 'Configuration';
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments34 = array();
$arguments34['id'] = 'footer';
$arguments34['label'] = 'Footer';
$arguments34['description'] = NULL;
$arguments34['icon'] = NULL;
$arguments34['mergeValues'] = false;
$arguments34['enabled'] = true;
$arguments34['wizardTab'] = NULL;
$arguments34['compact'] = false;
$arguments34['variables'] = array (
);
$arguments34['options'] = NULL;
$arguments34['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments34['extensionName'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments37 = array();
$arguments37['name'] = 'grid';
$arguments37['label'] = NULL;
$arguments37['variables'] = array (
);
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments40 = array();
$arguments40['name'] = 'aboutRow';
$arguments40['label'] = 'About Row';
$arguments40['variables'] = array (
);
$arguments40['extensionName'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments43 = array();
$arguments43['name'] = 'aboutColumn';
$arguments43['colPos'] = '0';
$arguments43['label'] = 'About Column';
$arguments43['colspan'] = NULL;
$arguments43['rowspan'] = NULL;
$arguments43['style'] = NULL;
$arguments43['variables'] = array (
);
$arguments43['extensionName'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};

$output42 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
            ';
return $output42;
};

$output39 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments45 = array();
$arguments45['name'] = 'newsRow';
$arguments45['label'] = 'News Row';
$arguments45['variables'] = array (
);
$arguments45['extensionName'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments48 = array();
$arguments48['name'] = 'newsColumn';
$arguments48['colPos'] = '1';
$arguments48['label'] = 'News Column';
$arguments48['colspan'] = NULL;
$arguments48['rowspan'] = NULL;
$arguments48['style'] = NULL;
$arguments48['variables'] = array (
);
$arguments48['extensionName'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};

$output47 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
            ';
return $output47;
};

$output39 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output39 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments50 = array();
$arguments50['name'] = 'contactRow';
$arguments50['label'] = 'Contact Row';
$arguments50['variables'] = array (
);
$arguments50['extensionName'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments53 = array();
$arguments53['name'] = 'contactColumn';
$arguments53['colPos'] = '2';
$arguments53['label'] = 'Contact Column';
$arguments53['colspan'] = NULL;
$arguments53['rowspan'] = NULL;
$arguments53['style'] = NULL;
$arguments53['variables'] = array (
);
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};

$output52 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
            ';
return $output52;
};

$output39 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output39 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments55 = array();
$arguments55['name'] = 'copyrightClaimRow';
$arguments55['label'] = 'Copyright Claim Row';
$arguments55['variables'] = array (
);
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments58 = array();
$arguments58['name'] = 'copyrightClaimColumn';
$arguments58['colPos'] = '3';
$arguments58['label'] = 'Copyright Claim Column';
$arguments58['colspan'] = NULL;
$arguments58['rowspan'] = NULL;
$arguments58['style'] = NULL;
$arguments58['variables'] = array (
);
$arguments58['extensionName'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};

$output57 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
            ';
return $output57;
};

$output39 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output39 .= '
        ';
return $output39;
};

$output36 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
    ';
return $output36;
};

$output33 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
';
return $output33;
};

$output27 .= '';

$output27 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments60 = array();
$arguments60['name'] = 'Main';
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

';
};

$output27 .= '';

$output27 .= '

';


return $output27;
}


}
#1518192376    15679     