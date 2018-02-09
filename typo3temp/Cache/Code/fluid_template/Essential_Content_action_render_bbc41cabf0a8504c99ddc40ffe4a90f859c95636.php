<?php
class FluidCache_Essential_Content_action_render_bbc41cabf0a8504c99ddc40ffe4a90f859c95636 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <p><b>Social Media: </b></p>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments26 = array();
$arguments26['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments26['as'] = 'socialItem';
$arguments26['key'] = '';
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
        <p><b>Link: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
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

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output22 .= '
';


return $output22;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output32 = '';

$output32 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output32 .= '</small>
        </p>
        <p>
            <ul class="fh5co-social-icons">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('socialMedia'));
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments39 = array();
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments42 = array();
$arguments42['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments42['as'] = 'socialItem';
$arguments42['key'] = '';
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output44 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output44 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output44 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output44 .= '"></i></a>
                        </li>
                    ';
return $output44;
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                ';
return $output41;
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output38 .= '
            ';
return $output38;
};
$arguments36['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments54 = array();
$arguments54['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments54['as'] = 'socialItem';
$arguments54['key'] = '';
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output56 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));

$output56 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output56 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output56 .= '"></i></a>
                        </li>
                    ';
return $output56;
};

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                ';
return $output53;
};
$arguments36['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output32 .= '
            </ul>
        </p>
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

$output63 = '';

$output63 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments64 = array();
$arguments64['name'] = 'Content';
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output63 .= $viewHelper66->initializeArgumentsAndRender();

$output63 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments67 = array();
$arguments67['name'] = 'Configuration';
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments70 = array();
$arguments70['id'] = 'footerCopyright';
$arguments70['label'] = 'Footer Copyright';
$arguments70['wizardTab'] = 'Footer';
$arguments70['description'] = NULL;
$arguments70['icon'] = NULL;
$arguments70['mergeValues'] = false;
$arguments70['enabled'] = true;
$arguments70['compact'] = false;
$arguments70['variables'] = array (
);
$arguments70['options'] = NULL;
$arguments70['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments70['extensionName'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments73 = array();
$arguments73['name'] = 'copyrightClaim';
$arguments73['label'] = 'Copyright Claim';
$arguments73['default'] = NULL;
$arguments73['required'] = false;
$arguments73['exclude'] = false;
$arguments73['transform'] = NULL;
$arguments73['enabled'] = true;
$arguments73['requestUpdate'] = false;
$arguments73['displayCond'] = NULL;
$arguments73['inherit'] = true;
$arguments73['inheritEmpty'] = true;
$arguments73['clear'] = false;
$arguments73['variables'] = array (
);
$arguments73['extensionName'] = NULL;
$arguments73['eval'] = 'trim';
$arguments73['size'] = 32;
$arguments73['maxCharacters'] = NULL;
$arguments73['minimum'] = NULL;
$arguments73['maximum'] = NULL;
$arguments73['placeholder'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};

$output72 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper
$arguments75 = array();
$arguments75['name'] = 'socialMedia';
$arguments75['label'] = 'Social Media';
$arguments75['variables'] = array (
);
$arguments75['extensionName'] = NULL;
$arguments75['inherit'] = false;
$arguments75['inheritEmpty'] = false;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper
$arguments78 = array();
$arguments78['name'] = 'socialNetwork';
$arguments78['label'] = 'Social Network';
$arguments78['variables'] = array (
);
$arguments78['extensionName'] = NULL;
$arguments78['inherit'] = false;
$arguments78['inheritEmpty'] = false;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments81 = array();
$arguments81['name'] = 'link';
$arguments81['label'] = 'Link';
$arguments81['default'] = NULL;
$arguments81['required'] = false;
$arguments81['exclude'] = false;
$arguments81['transform'] = NULL;
$arguments81['enabled'] = true;
$arguments81['requestUpdate'] = false;
$arguments81['displayCond'] = NULL;
$arguments81['inherit'] = true;
$arguments81['inheritEmpty'] = true;
$arguments81['clear'] = false;
$arguments81['variables'] = array (
);
$arguments81['extensionName'] = NULL;
$arguments81['eval'] = 'trim';
$arguments81['size'] = 32;
$arguments81['maxCharacters'] = NULL;
$arguments81['minimum'] = NULL;
$arguments81['maximum'] = NULL;
$arguments81['placeholder'] = NULL;
$renderChildrenClosure82 = function() {return NULL;};

$output80 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$arguments83 = array();
$arguments83['name'] = 'name';
$arguments83['label'] = 'Name';
// Rendering Array
$array84 = array();
// Rendering Array
$array85 = array();
$array85['0'] = 'None';
$array85['1'] = 'null';
$array84['0'] = $array85;
// Rendering Array
$array86 = array();
$array86['0'] = 'Facebook';
$array86['1'] = 'icon-facebook';
$array84['1'] = $array86;
// Rendering Array
$array87 = array();
$array87['0'] = 'Linkedin';
$array87['1'] = 'icon-linkedin';
$array84['2'] = $array87;
// Rendering Array
$array88 = array();
$array88['0'] = 'Instagram';
$array88['1'] = 'icon-instagram';
$array84['3'] = $array88;
// Rendering Array
$array89 = array();
$array89['0'] = 'Twitter';
$array89['1'] = 'icon-twitter';
$array84['4'] = $array89;
$arguments83['items'] = $array84;
$arguments83['default'] = NULL;
$arguments83['required'] = false;
$arguments83['exclude'] = false;
$arguments83['transform'] = NULL;
$arguments83['enabled'] = true;
$arguments83['requestUpdate'] = false;
$arguments83['displayCond'] = NULL;
$arguments83['inherit'] = true;
$arguments83['inheritEmpty'] = true;
$arguments83['clear'] = false;
$arguments83['variables'] = array (
);
$arguments83['extensionName'] = NULL;
$arguments83['validate'] = 'trim';
$arguments83['size'] = 1;
$arguments83['multiple'] = false;
$arguments83['minItems'] = 0;
$arguments83['maxItems'] = 1;
$arguments83['itemListStyle'] = NULL;
$arguments83['selectedListStyle'] = NULL;
$arguments83['renderMode'] = NULL;
$arguments83['emptyOption'] = false;
$arguments83['translateCsvItems'] = NULL;
$arguments83['renderType'] = 'selectSingle';
$arguments83['showIconTable'] = false;
$renderChildrenClosure90 = function() {return NULL;};

$output80 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments83, $renderChildrenClosure90, $renderingContext);

$output80 .= '
            ';
return $output80;
};

$output77 .= FluidTYPO3\Flux\ViewHelpers\Form\ObjectViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
        ';
return $output77;
};

$output72 .= FluidTYPO3\Flux\ViewHelpers\Form\SectionViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output72 .= '
    ';
return $output72;
};

$output69 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
';
return $output69;
};

$output63 .= '';

$output63 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments91 = array();
$arguments91['name'] = 'Preview';
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output93 = '';

$output93 .= '
    <h1 style="color: #999999;">Footer Copyright</h1>
    <p><b>Copyright Claim: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() {return NULL;};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());

$output93 .= (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments94['encoding'] !== NULL ? $arguments94['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments94['doubleEncode']));

$output93 .= '</p>
    <p><b>Social Media: </b></p>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments97 = array();
$arguments97['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments97['as'] = 'socialItem';
$arguments97['key'] = '';
$arguments97['reverse'] = false;
$arguments97['iteration'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
        <p><b>Link: </b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output99 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output99 .= '</p>
    ';
return $output99;
};

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output93 .= '
';
return $output93;
};

$output63 .= '';

$output63 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments103 = array();
$arguments103['name'] = 'Main';
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
    <div class="col-md-12 text-center">
        <p>
            <small class="block">&copy;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = $currentVariableContainer->getOrNull('copyrightClaim');
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output105 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output105 .= '</small>
        </p>
        <p>
            <ul class="fh5co-social-icons">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments109 = array();
// Rendering Boolean node
$arguments109['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('socialMedia'));
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
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

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments124 = array();
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output111 .= '
            ';
return $output111;
};
$arguments109['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments127 = array();
$arguments127['each'] = $currentVariableContainer->getOrNull('socialMedia');
$arguments127['as'] = 'socialItem';
$arguments127['key'] = '';
$arguments127['reverse'] = false;
$arguments127['iteration'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
                        <li>
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments130 = array();
$arguments130['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.link', $renderingContext);
$arguments130['keepQuotes'] = false;
$arguments130['encoding'] = NULL;
$arguments130['doubleEncode'] = true;
$renderChildrenClosure131 = function() {return NULL;};
$value132 = ($arguments130['value'] !== NULL ? $arguments130['value'] : $renderChildrenClosure131());

$output129 .= (!is_string($value132) ? $value132 : htmlspecialchars($value132, ($arguments130['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments130['encoding'] !== NULL ? $arguments130['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments130['doubleEncode']));

$output129 .= '"><i class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('socialItem'), 'socialNetwork.name', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = NULL;
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() {return NULL;};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());

$output129 .= (!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments133['encoding'] !== NULL ? $arguments133['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments133['doubleEncode']));

$output129 .= '"></i></a>
                        </li>
                    ';
return $output129;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                ';
return $output126;
};
$arguments109['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '

                ';
};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output105 .= '
            </ul>
        </p>
    </div>
';
return $output105;
};

$output63 .= '';


return $output63;
}


}
#1518194210    37767     