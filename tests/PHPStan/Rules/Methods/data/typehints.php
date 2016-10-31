<?php

namespace TestMethodTypehints;

class FooMethodTypehints
{

	function foo(FooMethodTypehints $foo, $bar, array $lorem): NonexistentClass
	{

	}

	function bar(BarMethodTypehints $bar): array
	{

	}

	function baz(...$bar): FooMethodTypehints
	{

	}

	/**
	 * @param FooMethodTypehints[] $foos
	 * @param BarMethodTypehints[] $bars
	 * @return BazMethodTypehints[]
	 */
	function lorem($foos, $bars)
	{

	}

}
