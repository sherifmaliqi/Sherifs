<?php
class FluidCache_Essential_Standard_action_index_287dc9d6f8de6be5b8dc48dbaf455082e1715efa extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Content';
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
$arguments1['id'] = 'footerCopyright';
$arguments1['label'] = 'Footer Copyright';
$arguments1['wizardTab'] = 'Footer';
$arguments1['description'] = NULL;
$arguments1['icon'] = NULL;
$arguments1['mergeValues'] = false;
$arguments1['enabled'] = true;
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments4 = array();
$arguments4['name'] = 'copyrightClaim';
$arguments4['label'] = 'Copyright Claim';
$arguments4['default'] = NULL;
$arguments4['required'] = false;
$arguments4['exclude'] = false;
$arguments4['transform'] = NULL;
$arguments4['enabled'] = true;
$arguments4['requestUpdate'] = false;
$arguments4['displayCond'] = NULL;
$arguments4['inherit'] = true;
$arguments4['inheritEmpty'] = true;
$arguments4['clear'] = false;
$arguments4['variables'] = array (
);
$arguments4['extensionName'] = NULL;
$arguments4['eval'] = 'trim';
$arguments4['size'] = 32;
$arguments4['maxCharacters'] = NULL;
$arguments4['minimum'] = NULL;
$arguments4['maximum'] = NULL;
$arguments4['placeholder'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

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
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output6 = '';

$output6 .= '
    <h1 style="color: #999999;">Footer Copyright</h1>
    <p><b>Copyright Claim: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output6 .= '</p>
';


return $output6;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output10 = '';

$output10 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = NULL;
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() {return NULL;};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output10 .= (!is_string($value13) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments11['encoding'] !== NULL ? $arguments11['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments11['doubleEncode']));

$output10 .= '</small>
        </p>
        <p>
        <ul class="fh5co-social-icons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
        </ul>
        </p>
    </div>
';


return $output10;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output14 = '';

$output14 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments15 = array();
$arguments15['name'] = 'Content';
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output14 .= $viewHelper17->initializeArgumentsAndRender();

$output14 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments18 = array();
$arguments18['name'] = 'Configuration';
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments21 = array();
$arguments21['id'] = 'footerCopyright';
$arguments21['label'] = 'Footer Copyright';
$arguments21['wizardTab'] = 'Footer';
$arguments21['description'] = NULL;
$arguments21['icon'] = NULL;
$arguments21['mergeValues'] = false;
$arguments21['enabled'] = true;
$arguments21['compact'] = false;
$arguments21['variables'] = array (
);
$arguments21['options'] = NULL;
$arguments21['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments24 = array();
$arguments24['name'] = 'copyrightClaim';
$arguments24['label'] = 'Copyright Claim';
$arguments24['default'] = NULL;
$arguments24['required'] = false;
$arguments24['exclude'] = false;
$arguments24['transform'] = NULL;
$arguments24['enabled'] = true;
$arguments24['requestUpdate'] = false;
$arguments24['displayCond'] = NULL;
$arguments24['inherit'] = true;
$arguments24['inheritEmpty'] = true;
$arguments24['clear'] = false;
$arguments24['variables'] = array (
);
$arguments24['extensionName'] = NULL;
$arguments24['eval'] = 'trim';
$arguments24['size'] = 32;
$arguments24['maxCharacters'] = NULL;
$arguments24['minimum'] = NULL;
$arguments24['maximum'] = NULL;
$arguments24['placeholder'] = NULL;
$renderChildrenClosure25 = function() {return NULL;};

$output23 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
    ';
return $output23;
};

$output20 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
';
return $output20;
};

$output14 .= '';

$output14 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments26 = array();
$arguments26['name'] = 'Preview';
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
    <h1 style="color: #999999;">Footer Copyright</h1>
    <p><b>Copyright Claim: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output28 .= '</p>
';
return $output28;
};

$output14 .= '';

$output14 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments32 = array();
$arguments32['name'] = 'Main';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output34 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output34 .= '</small>
        </p>
        <p>
        <ul class="fh5co-social-icons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
        </ul>
        </p>
    </div>
';
return $output34;
};

$output14 .= '';


return $output14;
}


}
#1518193028    11678     