<?php

namespace Sulfur\Parser\Filters;

class AndFilter extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $lineno = $token->getLine();
        $name = $this->parser->getStream()->expect(Twig_Token::NAME_TYPE)->getValue();
        $this->parser->getStream()->expect(Twig_Token::OPERATOR_TYPE, '=');
        $value = $this->parser->getExpressionParser()->parseExpression();

        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);
echo 'blah';
        return new \Sulfur\Node\Filters\AndFilter($name, $value, $lineno, $this->getTag());
    }

    public function getTag()
    {
        return 'sulfur.filters.and';
    }
}
