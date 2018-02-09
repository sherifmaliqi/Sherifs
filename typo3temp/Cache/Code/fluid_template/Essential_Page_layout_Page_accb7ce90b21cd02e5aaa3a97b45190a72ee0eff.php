<?php
class FluidCache_Essential_Page_layout_Page_accb7ce90b21cd02e5aaa3a97b45190a72ee0eff extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments1 = array();
$arguments1['name'] = 'Page';
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'Header';
$arguments4['section'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments6 = array();
$arguments6['section'] = 'Main';
$arguments6['partial'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments8 = array();
$arguments8['partial'] = 'Footer';
$arguments8['section'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1518192421    2709      