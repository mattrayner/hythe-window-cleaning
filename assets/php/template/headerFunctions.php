<?php
/**                                                             **
 * FUNCTIONS FOR GENERATING TITLE, DESCRIPTION ETC FOR EACH PAGE *
 **                                                             **/
 
//Base variables
$btitle = "Hythe Window Cleaning";
$bdescription = "Professional, personal window, gutter, fascia and cladding cleaners. Jet washing service available for both business and personal addresses. Inside and out finishing service.";
$bauthor = "Matt Rayner - mattrayner.co.uk";

/**
 * Generate a title using a prefix passed
 **/
function generateTitle($pref){
	if(isset($pref)){
		echo($pref + " - " + $btitle);
	}else{
		echo($btitle);
	}
}

/**
 * Generate a description using the one provided or the default description
 **/
function generateDescription($desc){
	if(isset($desc)){
		echo($desc);
	}else{
		echo($bdescription);
	}
}

/**
 * Generate a author string using the one provided or the default author
 **/
function generateAuthor($auth){
	if(isset($auth)){
		echo($auth);
	}else{
		echo($bauthor);
	}
}
?>