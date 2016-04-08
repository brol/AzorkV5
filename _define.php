<?php
# ***** BEGIN LICENSE BLOCK *****
#
#  	AzorkV5
#  	Theme by Azork (http://xtradotfreedotfr.free.fr/blog/)
#   Contributor : Pierre Van Glabeke
#   Icones by Fam Fam Fam (www.famfamfam.com)
#   License : public domain
#
# ***** END LICENSE BLOCK *****
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			    "AzorkV5",
	/* Description*/		"Adaptation du kit Aorakit-3B de Kozlika",
	/* Author */			  "Azork, Pierre Van Glabeke",
	/* Version */			  '0.7',
	array(
		'type'		=>		'theme',
		'tplset' => 'mustek',
		'dc_min' => '2.9'
	)
);