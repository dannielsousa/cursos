<?php

function tStr($string){
	return addslashes(htmlentities(utf8_decode(trim($string))));
}