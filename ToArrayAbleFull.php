<?php
/**
 * @author eturino
 */
interface EtuDev_Interfaces_ToArrayAbleFull extends EtuDev_Interfaces_ToArrayAble {

	public function toArray($level = null, $toArrayToArrayables = false);

	public function toArrayFull();
}