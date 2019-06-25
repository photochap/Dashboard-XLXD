<?php
/*
Possible values for IPModus

HideIP
ShowFullIP
ShowLast1ByteOfIP
ShowLast2ByteOfIP
ShowLast3ByteOfIP

*/

$Service     = array();
$CallingHome = array();
$PageOptions = array();
$VNStat      = array();

$PageOptions['ContactEmail']                         = 'contact@xrf105.fr';		// Support E-Mail address

$PageOptions['DashboardVersion']                     = '2.3.9';       		// Dashboard Version

$PageOptions['PageRefreshActive']                    = true;   			// Activate automatic refresh
$PageOptions['PageRefreshDelay']                     = '5000';			// Page refresh time in miliseconds

$PageOptions['RepeatersPage'] = array();
$PageOptions['RepeatersPage']['LimitTo']             = 99;     			// Number of Repeaters to show
$PageOptions['RepeatersPage']['IPModus']             = 'ShowLast1ByteOfIP'; 	 	// See possible options above
$PageOptions['RepeatersPage']['MasqueradeCharacter'] = '*';    			// Character used for  masquerade

$PageOptions['PeerPage'] = array();
$PageOptions['PeerPage']['LimitTo']                  = 99;     			// Number of peers to show
$PageOptions['PeerPage']['IPModus']                  = 'ShowFullIP';		// See possible options above
$PageOptions['PeerPage']['MasqueradeCharacter']      = '*';         		// Character used for  masquerade

$PageOptions['LastHeardPage']['LimitTo']             = 39;                      // Number of stations to show

$PageOptions['ModuleNames'] = array();                              		// Module nomination
$PageOptions['ModuleNames']['A']                     = 'Interlink XLX';
$PageOptions['ModuleNames']['B']                     = 'France';
$PageOptions['ModuleNames']['C']                     = 'Local';
$PageOptions['ModuleNames']['D']                     = 'Francophone';
$PageOptions['ModuleNames']['I']                     = 'Toulouse';
$PageOptions['ModuleNames']['R']                     = 'Echolink';
$PageOptions['ModuleNames']['S']                     = 'DMR';
$PageOptions['ModuleNames']['T']                     = 'YSF(Yaesu Fusion)';
$PageOptions['ModuleNames']['U']                     = 'Urgence';
$PageOptions['ModuleNames']['X']                     = 'D-rats/SSTV/others';
$PageOptions['ModuleNames']['Z']                     = 'Experimental';

$PageOptions['MetaDescription']                      = 'XLX is a D-Star Reflector System for Ham Radio Operators.';  // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaKeywords']                         = 'Ham Radio, D-Star, XReflector, XLX, XRF, DCS, REF, ';        // Meta Tag Values, usefull forSearch Engine
$PageOptions['MetaAuthor']                           = 'F4HWB';                                                      // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRevisit']                          = 'After 30 Days';                                              // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRobots']                           = 'index,follow';                                               // Meta Tag Values, usefull for Search Engine

$PageOptions['UserPage']['ShowFilter']               = true;                                                         // Show Filter on Users page
$PageOptions['Traffic']['Show']                      = true;                                                        // Enable vnstat traffic statistics

$Service['PIDFile']                                  = '/var/log/xlxd.pid';
$Service['XMLFile']                                  = '/var/log/xlxd.xml';

$CallingHome['Active']                               = true;                                  // xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'http://xrf105.fr';		       // dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';         // database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;  	                               // push delay in seconds
$CallingHome['Country']                              = "FRANCE";                         // Country
$CallingHome['Comment']                              = "HotSpot D-Star - 73 de Christophe F4HWB";                         // Comment. Max 100 character
$CallingHome['HashFile']                             = "/tmp/callinghome.php";                 // Make sure the apache user has read and write permissions in this folder.
$CallingHome['LastCallHomefile']                     = "/tmp/lastcallhome.php";                // lastcallhome.php can remain in the tmp folder 
$CallingHome['OverrideIPAddress']                    = "";                                     // Insert your IP address here. Leave blank for autodetection. No need to enter a fake address.
$CallingHome['InterlinkFile']                        = "/xlxd/xlxd.interlink";                 // Path to interlink file

$VNStat['Interfaces']                                = array();
$VNStat['Interfaces'][0]['Name']                     = 'eth0';
$VNStat['Interfaces'][0]['Address']                  = 'eth0';
$VNStat['Binary']                                    = '/usr/bin/vnstat';

?>
