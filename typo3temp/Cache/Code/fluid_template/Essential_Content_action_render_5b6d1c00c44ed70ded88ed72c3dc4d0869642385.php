<?php
class FluidCache_Essential_Content_action_render_5b6d1c00c44ed70ded88ed72c3dc4d0869642385 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments6 = array();
$arguments6['name'] = 'socialMedia';
$arguments6['label'] = 'Social Media';
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;
$arguments6['inherit'] = false;
$arguments6['inheritEmpty'] = false;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments9 = array();
$arguments9['name'] = 'socialNetwork';
$arguments9['label'] = 'Social Network';
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['inherit'] = false;
$arguments9['inheritEmpty'] = false;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments12 = array();
$arguments12['name'] = 'link';
$arguments12['label'] = 'Link';
$arguments12['default'] = NULL;
$arguments12['required'] = false;
$arguments12['exclude'] = false;
$arguments12['transform'] = NULL;
$arguments12['enabled'] = true;
$arguments12['requestUpdate'] = false;
$arguments12['displayCond'] = NULL;
$arguments12['inherit'] = true;
$arguments12['inheritEmpty'] = true;
$arguments12['clear'] = false;
$arguments12['variables'] = array (
);
$arguments12['extensionName'] = NULL;
$arguments12['eval'] = 'trim';
$arguments12['size'] = 32;
$arguments12['maxCharacters'] = NULL;
$arguments12['minimum'] = NULL;
$arguments12['maximum'] = NULL;
$arguments12['placeholder'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output11 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$arguments14 = array();
$arguments14['name'] = 'name';
$arguments14['label'] = 'Name';
// Rendering Array
$array15 = array();
// Rendering Array
$array16 = array();
$array16['0'] = 'None';
$array16['1'] = 'null';
$array15['0'] = $array16;
// Rendering Array
$array17 = array();
$array17['0'] = 'Facebook';
$array17['1'] = 'icon-facebook';
$array15['1'] = $array17;
// Rendering Array
$array18 = array();
$array18['0'] = 'Linkedin';
$array18['1'] = 'icon-linkedin';
$array15['2'] = $array18;
// Rendering Array
$array19 = array();
$array19['0'] = 'Instagram';
$array19['1'] = 'icon-instagram';
$array15['3'] = $array19;
// Rendering Array
$array20 = array();
$array20['0'] = 'Twitter';
$array20['1'] = 'icon-twitter';
$array15['4'] = $array20;
$arguments14['items'] = $array15;
$arguments14['default'] = NULL;
$arguments14['required'] = false;
$arguments14['exclude'] = false;
$arguments14['transform'] = NULL;
$arguments14['enabled'] = true;
$arguments14['requestUpdate'] = false;
$arguments14['displayCond'] = NULL;
$arguments14['inherit'] = true;
$arguments14['inheritEmpty'] = true;
$arguments14['clear'] = false;
$arguments14['variables'] = array (
);
$arguments14['extensionName'] = NULL;
$arguments14['validate'] = 'trim';
$arguments14['size'] = 1;
$arguments14['multiple'] = false;
$arguments14['minItems'] = 0;
$arguments14['maxItems'] = 1;
$arguments14['itemListStyle'] = NULL;
$arguments14['selectedListStyle'] = NULL;
$arguments14['renderMode'] = NULL;
$arguments14['emptyOption'] = false;
$arguments14['translateCsvItems'] = NULL;
$arguments14['renderType'] = 'selectSingle';
$arguments14['showIconTable'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output11 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments14, $renderChildrenClosure21, $renderingContext);

$output11 .= '
            ';
return $output11;
};

$output8 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
        ';
return $output8;
};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

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

$output22 = '';

$output22 .= '
    <h1 style="color: #999999;">Footer Copyright</h1>
    <p><b>Copyright Claim: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output22 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output22 .= '</p>
';


return $output22;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output26 = '';

$output26 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output26 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output26 .= '</small>
        </p>
        <p>
            <ul class="fh5co-social-icons">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments30 = array();
// Rendering Boolean node
$arguments30['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('socialMedia'));
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments33 = array();
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments36 = array();
$arguments36['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments36['as'] = 'socialItem';
$arguments36['key'] = '';
$arguments36['reverse'] = false;
$arguments36['iteration'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output38 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output38 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output38 .= '"></i></a>
                        </li>
                    ';
return $output38;
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                ';
return $output35;
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments45 = array();
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output32 .= '
            ';
return $output32;
};
$arguments30['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments48 = array();
$arguments48['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments48['as'] = 'socialItem';
$arguments48['key'] = '';
$arguments48['reverse'] = false;
$arguments48['iteration'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output50 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output50 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output50 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output50 .= '"></i></a>
                        </li>
                    ';
return $output50;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                ';
return $output47;
};
$arguments30['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output26 .= '
            </ul>
        </p>
    </div>
';


return $output26;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output57 = '';

$output57 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments58 = array();
$arguments58['name'] = 'Content';
$renderChildrenClosure59 = function() {return NULL;};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output57 .= $viewHelper60->initializeArgumentsAndRender();

$output57 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments61 = array();
$arguments61['name'] = 'Configuration';
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments64 = array();
$arguments64['id'] = 'footerCopyright';
$arguments64['label'] = 'Footer Copyright';
$arguments64['wizardTab'] = 'Footer';
$arguments64['description'] = NULL;
$arguments64['icon'] = NULL;
$arguments64['mergeValues'] = false;
$arguments64['enabled'] = true;
$arguments64['compact'] = false;
$arguments64['variables'] = array (
);
$arguments64['options'] = NULL;
$arguments64['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments64['extensionName'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments67 = array();
$arguments67['name'] = 'copyrightClaim';
$arguments67['label'] = 'Copyright Claim';
$arguments67['default'] = NULL;
$arguments67['required'] = false;
$arguments67['exclude'] = false;
$arguments67['transform'] = NULL;
$arguments67['enabled'] = true;
$arguments67['requestUpdate'] = false;
$arguments67['displayCond'] = NULL;
$arguments67['inherit'] = true;
$arguments67['inheritEmpty'] = true;
$arguments67['clear'] = false;
$arguments67['variables'] = array (
);
$arguments67['extensionName'] = NULL;
$arguments67['eval'] = 'trim';
$arguments67['size'] = 32;
$arguments67['maxCharacters'] = NULL;
$arguments67['minimum'] = NULL;
$arguments67['maximum'] = NULL;
$arguments67['placeholder'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output66 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments69 = array();
$arguments69['name'] = 'socialMedia';
$arguments69['label'] = 'Social Media';
$arguments69['variables'] = array (
);
$arguments69['extensionName'] = NULL;
$arguments69['inherit'] = false;
$arguments69['inheritEmpty'] = false;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output71 = '';

$output71 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments72 = array();
$arguments72['name'] = 'socialNetwork';
$arguments72['label'] = 'Social Network';
$arguments72['variables'] = array (
);
$arguments72['extensionName'] = NULL;
$arguments72['inherit'] = false;
$arguments72['inheritEmpty'] = false;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments75 = array();
$arguments75['name'] = 'link';
$arguments75['label'] = 'Link';
$arguments75['default'] = NULL;
$arguments75['required'] = false;
$arguments75['exclude'] = false;
$arguments75['transform'] = NULL;
$arguments75['enabled'] = true;
$arguments75['requestUpdate'] = false;
$arguments75['displayCond'] = NULL;
$arguments75['inherit'] = true;
$arguments75['inheritEmpty'] = true;
$arguments75['clear'] = false;
$arguments75['variables'] = array (
);
$arguments75['extensionName'] = NULL;
$arguments75['eval'] = 'trim';
$arguments75['size'] = 32;
$arguments75['maxCharacters'] = NULL;
$arguments75['minimum'] = NULL;
$arguments75['maximum'] = NULL;
$arguments75['placeholder'] = NULL;
$renderChildrenClosure76 = function() {return NULL;};

$output74 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$arguments77 = array();
$arguments77['name'] = 'name';
$arguments77['label'] = 'Name';
// Rendering Array
$array78 = array();
// Rendering Array
$array79 = array();
$array79['0'] = 'None';
$array79['1'] = 'null';
$array78['0'] = $array79;
// Rendering Array
$array80 = array();
$array80['0'] = 'Facebook';
$array80['1'] = 'icon-facebook';
$array78['1'] = $array80;
// Rendering Array
$array81 = array();
$array81['0'] = 'Linkedin';
$array81['1'] = 'icon-linkedin';
$array78['2'] = $array81;
// Rendering Array
$array82 = array();
$array82['0'] = 'Instagram';
$array82['1'] = 'icon-instagram';
$array78['3'] = $array82;
// Rendering Array
$array83 = array();
$array83['0'] = 'Twitter';
$array83['1'] = 'icon-twitter';
$array78['4'] = $array83;
$arguments77['items'] = $array78;
$arguments77['default'] = NULL;
$arguments77['required'] = false;
$arguments77['exclude'] = false;
$arguments77['transform'] = NULL;
$arguments77['enabled'] = true;
$arguments77['requestUpdate'] = false;
$arguments77['displayCond'] = NULL;
$arguments77['inherit'] = true;
$arguments77['inheritEmpty'] = true;
$arguments77['clear'] = false;
$arguments77['variables'] = array (
);
$arguments77['extensionName'] = NULL;
$arguments77['validate'] = 'trim';
$arguments77['size'] = 1;
$arguments77['multiple'] = false;
$arguments77['minItems'] = 0;
$arguments77['maxItems'] = 1;
$arguments77['itemListStyle'] = NULL;
$arguments77['selectedListStyle'] = NULL;
$arguments77['renderMode'] = NULL;
$arguments77['emptyOption'] = false;
$arguments77['translateCsvItems'] = NULL;
$arguments77['renderType'] = 'selectSingle';
$arguments77['showIconTable'] = false;
$renderChildrenClosure84 = function() {return NULL;};

$output74 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments77, $renderChildrenClosure84, $renderingContext);

$output74 .= '
            ';
return $output74;
};

$output71 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
        ';
return $output71;
};

$output66 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output66 .= '
    ';
return $output66;
};

$output63 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
';
return $output63;
};

$output57 .= '';

$output57 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments85 = array();
$arguments85['name'] = 'Preview';
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
    <h1 style="color: #999999;">Footer Copyright</h1>
    <p><b>Copyright Claim: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments88 = array();
$arguments88['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments88['keepQuotes'] = false;
$arguments88['encoding'] = NULL;
$arguments88['doubleEncode'] = true;
$renderChildrenClosure89 = function() {return NULL;};
$value90 = ($arguments88['value'] !== NULL ? $arguments88['value'] : $renderChildrenClosure89());

$output87 .= (!is_string($value90) ? $value90 : htmlspecialchars($value90, ($arguments88['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments88['encoding'] !== NULL ? $arguments88['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments88['doubleEncode']));

$output87 .= '</p>
';
return $output87;
};

$output57 .= '';

$output57 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments91 = array();
$arguments91['name'] = 'Main';
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() {return NULL;};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());

$output93 .= (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments94['encoding'] !== NULL ? $arguments94['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments94['doubleEncode']));

$output93 .= '</small>
        </p>
        <p>
            <ul class="fh5co-social-icons">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments97 = array();
// Rendering Boolean node
$arguments97['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('socialMedia'));
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments100 = array();
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments103 = array();
$arguments103['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments103['as'] = 'socialItem';
$arguments103['key'] = '';
$arguments103['reverse'] = false;
$arguments103['iteration'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output105 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output105 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments109 = array();
$arguments109['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments109['keepQuotes'] = false;
$arguments109['encoding'] = NULL;
$arguments109['doubleEncode'] = true;
$renderChildrenClosure110 = function() {return NULL;};
$value111 = ($arguments109['value'] !== NULL ? $arguments109['value'] : $renderChildrenClosure110());

$output105 .= (!is_string($value111) ? $value111 : htmlspecialchars($value111, ($arguments109['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments109['encoding'] !== NULL ? $arguments109['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments109['doubleEncode']));

$output105 .= '"></i></a>
                        </li>
                    ';
return $output105;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
                ';
return $output102;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output99 .= '
            ';
return $output99;
};
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments115 = array();
$arguments115['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments115['as'] = 'socialItem';
$arguments115['key'] = '';
$arguments115['reverse'] = false;
$arguments115['iteration'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments118 = array();
$arguments118['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments118['keepQuotes'] = false;
$arguments118['encoding'] = NULL;
$arguments118['doubleEncode'] = true;
$renderChildrenClosure119 = function() {return NULL;};
$value120 = ($arguments118['value'] !== NULL ? $arguments118['value'] : $renderChildrenClosure119());

$output117 .= (!is_string($value120) ? $value120 : htmlspecialchars($value120, ($arguments118['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments118['encoding'] !== NULL ? $arguments118['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments118['doubleEncode']));

$output117 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = NULL;
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() {return NULL;};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());

$output117 .= (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments121['encoding'] !== NULL ? $arguments121['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments121['doubleEncode']));

$output117 .= '"></i></a>
                        </li>
                    ';
return $output117;
};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
                ';
return $output114;
};
$arguments97['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output93 .= '
            </ul>
        </p>
    </div>
';
return $output93;
};

$output57 .= '';


return $output57;
}


}
#1518193885    34473     