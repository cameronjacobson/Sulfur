<?php

namespace Sulfur\Twig;

class Extension extends \Twig_Extension
{
    public function getName()
    {
        return 'elasticsearch';
    }

	public function getTokenParsers(){
		return [
			new Sulfur\Parser\Queries\Match,
			new Sulfur\Parser\Queries\MultiMatch,
			new Sulfur\Parser\Queries\Bool,
			new Sulfur\Parser\Queries\Boosting,
			new Sulfur\Parser\Queries\Ids,
			new Sulfur\Parser\Queries\CustomScore,
			new Sulfur\Parser\Queries\CustomBoostFactor,
			new Sulfur\Parser\Queries\ConstantScore,
			new Sulfur\Parser\Queries\DisMax,
			new Sulfur\Parser\Queries\Field,
			new Sulfur\Parser\Queries\Filtered,
			new Sulfur\Parser\Queries\Flt,
			new Sulfur\Parser\Queries\FltField,
			new Sulfur\Parser\Queries\Fuzzy,
			new Sulfur\Parser\Queries\HasChild,
			new Sulfur\Parser\Queries\HasParent,
			new Sulfur\Parser\Queries\MatchAll,
			new Sulfur\Parser\Queries\Mlt,
			new Sulfur\Parser\Queries\MltField,
			new Sulfur\Parser\Queries\Prefix,
			new Sulfur\Parser\Queries\QueryString,
			new Sulfur\Parser\Queries\Range,
			new Sulfur\Parser\Queries\SpanFirst,
			new Sulfur\Parser\Queries\SpanNear,
			new Sulfur\Parser\Queries\SpanNot,
			new Sulfur\Parser\Queries\SpanOr,
			new Sulfur\Parser\Queries\SpanTerm,
			new Sulfur\Parser\Queries\Term,
			new Sulfur\Parser\Queries\Terms,
			new Sulfur\Parser\Queries\TopChildren,
			new Sulfur\Parser\Queries\Wildcard,
			new Sulfur\Parser\Queries\Nested,
			new Sulfur\Parser\Queries\CustomFiltersScore,
			new Sulfur\Parser\Queries\Indices,
			new Sulfur\Parser\Queries\Text,
			new Sulfur\Parser\Queries\GeoShape,

			new Sulfur\Parser\Filters\AndFilter,
			new Sulfur\Parser\Filters\Bool,
			new Sulfur\Parser\Filters\Exists,
			new Sulfur\Parser\Filters\Ids,
			new Sulfur\Parser\Filters\Limit,
			new Sulfur\Parser\Filters\Type,
			new Sulfur\Parser\Filters\GeoBbox,
			new Sulfur\Parser\Filters\GeoDistance,
			new Sulfur\Parser\Filters\GeoDistanceRange,
			new Sulfur\Parser\Filters\GeoPolygon,
			new Sulfur\Parser\Filters\GeoShape,
			new Sulfur\Parser\Filters\HasChild,
			new Sulfur\Parser\Filters\HasParent,
			new Sulfur\Parser\Filters\MatchAll,
			new Sulfur\Parser\Filters\Missing,
			new Sulfur\Parser\Filters\Not,
			new Sulfur\Parser\Filters\NumericRange,
			new Sulfur\Parser\Filters\OrFilter,
			new Sulfur\Parser\Filters\Prefix,
			new Sulfur\Parser\Filters\Query,
			new Sulfur\Parser\Filters\Range,
			new Sulfur\Parser\Filters\Script,
			new Sulfur\Parser\Filters\Term,
			new Sulfur\Parser\Filters\Terms,
			new Sulfur\Parser\Filters\Nested,
		];
	}
}
