<?php
/**
 * @author eturino
 */
interface EtuDev_Interfaces_ToArrayAbleFull extends EtuDev_Interfaces_ToArrayAble {

	public function toArray($level = null, $toArrayPseudoArraysAndRows = false);

	public function toArrayFull();
}