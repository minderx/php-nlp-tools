<?php

namespace NlpTools;

/*
 * http://en.wikipedia.org/wiki/Stemming
 * */
abstract class Stemmer
{
	
	/*
	 * Remove the suffix from $word
	 * 
	 * name: stem
	 * @return string
	 * */
	abstract public function stem($word);
	
	/*
	 * Apply the stemmer to every single token.
	 * 
	 * name: stemAll
	 * @return array
	 * */
	public function stemAll(array $tokens) {
		return array_map(array($this,'stem'),$tokens);
	}
	
}

?>