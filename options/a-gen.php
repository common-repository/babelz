<?php
// Retrieve Options
$BabelZ_G_Lang1 = get_option('BabelZ_G_Lang1');
$BabelZ_G_Lang2 = get_option('BabelZ_G_Lang2');
$BabelZ_G_Mode = get_option('BabelZ_G_Mode');

// General Settings
if (get_option('BabelZ_Hide1') == 'show') $vis = 'show';
else $vis = 'hide';
_e('<input type="hidden" target="BabelZ-Hide1" name="BabelZ-Hide1" class="BabelZ-SH" value="'.$vis.'">');
// Stored Values
_e('<input type="hidden" id="BabelZ-Stored-Value2" value="'.$BabelZ_G_Mode.'">');

// Languages
$langs[] = array("af", ' Afrikaans');
$langs[] = array("sq", ' Albanian');
$langs[] = array("am", ' Amharic');
$langs[] = array("ar", ' Arabic');
$langs[] = array("hy", ' Armenian');
$langs[] = array("az", ' Azerbaijani');
$langs[] = array("eu", ' Basque');
$langs[] = array("be", ' Belarusian');
$langs[] = array("bn", ' Bengali');
$langs[] = array("bs", ' Bosnian');
$langs[] = array("bg", ' Bulgarian');
$langs[] = array("my", ' Burmese');
$langs[] = array("ca", ' Catalan');
$langs[] = array("ceb", ' Cebuano');
$langs[] = array("zh-CN", ' Chinese');
$langs[] = array("zh-TW", ' Chinese (Traditional)');
$langs[] = array("co", ' Corsican');
$langs[] = array("hr", ' Croatian');
$langs[] = array("cs", ' Czech');
$langs[] = array("da", ' Danish');
$langs[] = array("nl", ' Dutch');
$langs[] = array("en", ' English');
$langs[] = array("eo", ' Esperanto');
$langs[] = array("et", ' Estonian');
$langs[] = array("tl", ' Filipino');
$langs[] = array("fi", ' Finnish');
$langs[] = array("fr", ' French');
$langs[] = array("gl", ' Galician');
$langs[] = array("ka", ' Georgian');
$langs[] = array("de", ' German');
$langs[] = array("el", ' Greek');
$langs[] = array("gu", ' Gujarati');
$langs[] = array("ht", ' Haitian Creole');
$langs[] = array("ha", ' Hausa');
$langs[] = array("haw", ' Hawaiian');
$langs[] = array("iw", ' Hebrew');
$langs[] = array("hi", ' Hindi');
$langs[] = array("hmn", ' Hmong');
$langs[] = array("hu", ' Hungarian');
$langs[] = array("is", ' Icelandic');
$langs[] = array("ig", ' Igbo');
$langs[] = array("id", ' Indonesian');
$langs[] = array("ga", ' Irish');
$langs[] = array("it", ' Italian');
$langs[] = array("ja", ' Japanese');
$langs[] = array("jv", ' Javanese');
$langs[] = array("kn", ' Kannada');
$langs[] = array("kk", ' Kazakh');
$langs[] = array("km", ' Khmer');
$langs[] = array("ko", ' Korean');
$langs[] = array("ku", ' Kurdish');
$langs[] = array("ky", ' Kyrgyz');
$langs[] = array("lo", ' Lao');
$langs[] = array("la", ' Latin');
$langs[] = array("lv", ' Latvian');
$langs[] = array("lt", ' Lithuanian');
$langs[] = array("lb", ' Luxembourgish');
$langs[] = array("mk", ' Macedonian');
$langs[] = array("mg", ' Malagasy');
$langs[] = array("ms", ' Malay');
$langs[] = array("ml", ' Malayalam');
$langs[] = array("mt", ' Maltese');
$langs[] = array("mi", ' Maori');
$langs[] = array("mr", ' Marathi');
$langs[] = array("mn", ' Mongolian');
$langs[] = array("ne", ' Nepali');
$langs[] = array("no", ' Norwegian');
$langs[] = array("ny", ' Nyanja');
$langs[] = array("ps", ' Pashto');
$langs[] = array("fa", ' Persian');
$langs[] = array("pl", ' Polish');
$langs[] = array("pt", ' Portuguese');
$langs[] = array("pa", ' Punjabi');
$langs[] = array("ro", ' Romanian');
$langs[] = array("ru", ' Russian');
$langs[] = array("sm", ' Samoan');
$langs[] = array("gd", ' Scottish Gaelic');
$langs[] = array("sr", ' Serbian');
$langs[] = array("sn", ' Shona');
$langs[] = array("sd", ' Sindhi');
$langs[] = array("si", ' Sinhala');
$langs[] = array("sk", ' Slovak');
$langs[] = array("sl", ' Slovenian');
$langs[] = array("so", ' Somali');
$langs[] = array("es", ' Spanish');
$langs[] = array("su", ' Sundanese');
$langs[] = array("sw", ' Swahili');
$langs[] = array("sv", ' Swedish');
$langs[] = array("tg", ' Tajik');
$langs[] = array("ta", ' Tamil');
$langs[] = array("te", ' Telugu');
$langs[] = array("th", ' Thai');
$langs[] = array("tr", ' Turkish');
$langs[] = array("uk", ' Ukrainian');
$langs[] = array("ur", ' Urdu');
$langs[] = array("uz", ' Uzbek');
$langs[] = array("vi", ' Vietnamese');
$langs[] = array("cy", ' Welsh');
$langs[] = array("fy", ' Western Frisian');
$langs[] = array("xh", ' Xhosa');
$langs[] = array("yi", ' Yiddish');
$langs[] = array("yo", ' Yoruba');
$langs[] = array("zu", ' Zulu');
?>

<div id="poststuff">
    <div class="postbox">
	<h3 class="hndle BabelZ-H" target="BabelZ-Hide1"><span><?php _e('Widget Settings','BabelZ'); ?></span></h3>
	<div class="inside" id="BabelZ-Hide1">
	    <table width="100%" class="BabelZ-Pad">
		<tr>
		    <th scope="row">Display Mode</th>
		    <td>
			<select name="BabelZ-G-Mode" id="BabelZ-Toggle2">
			    <option value="google.translate.TranslateElement.InlineLayout.VERTICAL" <?php _e(substr($BabelZ_G_Mode,-3)=="CAL" ? "selected" : ""); ?> id="GMode1">Inline  - Vertical</option>
			    <option value="google.translate.TranslateElement.InlineLayout.HORIZONTAL" <?php _e(substr($BabelZ_G_Mode,-3)=="TAL" ? "selected" : ""); ?> id="GMode2">Inline - Horizontal</option>
			    <option value="google.translate.TranslateElement.InlineLayout.SIMPLE" <?php _e(substr($BabelZ_G_Mode,-3)=="PLE" ? "selected" : ""); ?> id="GMode3">Inline - Dropdown Only</option>
			    <?php
			    /*
			    <option value="google.translate.TranslateElement.FloatPosition.BOTTOM_RIGHT" <?php _e(substr($BabelZ_G_Mode,-7)=="M_RIGHT" ? "selected" : ""); ?> id="GMode4">Tabbed - Lower Right</option>
			    <option value="google.translate.TranslateElement.FloatPosition.BOTTOM_LEFT" <?php _e(substr($BabelZ_G_Mode,-6)=="M_LEFT" ? "selected" : ""); ?> id="GMode5">Tabbed - Lower Left</option>
			    <option value="google.translate.TranslateElement.FloatPosition.TOP_RIGHT" <?php _e(substr($BabelZ_G_Mode,-7)=="P_RIGHT" ? "selected" : ""); ?> id="GMode6">Tabbed - Upper Right</option>
			    <option value="google.translate.TranslateElement.FloatPosition.TOP_LEFT" <?php _e(substr($BabelZ_G_Mode,-6)=="P_LEFT" ? "selected" : ""); ?> id="GMode7">Tabbed - Upper Left</option>
			    */
			    ?>
			</select>
		    </td>
		    <td>
			<img src="<?php _e(BabelZ_Url()); ?>images/mode01.png" class="GMode1">
			<img src="<?php _e(BabelZ_Url()); ?>images/mode02.png" class="GMode2">
			<img src="<?php _e(BabelZ_Url()); ?>images/mode03.png" class="GMode3">
			<?php
			/*
			<img src="<?php _e(BabelZ_Url()); ?>images/mode04.png" class="GMode4">
			<img src="<?php _e(BabelZ_Url()); ?>images/mode05.png" class="GMode5">
			<img src="<?php _e(BabelZ_Url()); ?>images/mode06.png" class="GMode6">
			<img src="<?php _e(BabelZ_Url()); ?>images/mode07.png" class="GMode7">
			*/
			?>
		    </td>
		</tr>
		<tr>
		    <th scope="row">Translate From</th>
		    <td>
			<select name="BabelZ-G-Lang1">
			<?php
			if (is_array($langs)) {
			    for ($i = 0; $i < count($langs); $i++) {
				if ($langs[$i][0] == $BabelZ_G_Lang1) _e('<option value="'.htmlentities($langs[$i][0]).'" selected>'.$langs[$i][1].'</option>');
				else _e('<option value="'.htmlentities($langs[$i][0]).'">'.$langs[$i][1].'</option>');
			    }
			}
			?>
			</select>
		    </td>
		</tr>
		
		<tr><td colspan="3"><hr /></td></tr>
		
		<tr>
		    <th scope="row">
		    Translation Languages
		    <br><br><br>
		    <input type="button" id="checkToggle" value="Check all">
		    </th>
		    <td colspan="2">
			<?php
			if (is_array($langs)) {
			    $explo = explode(",", strval($BabelZ_G_Lang2));
			    for ($for1 = 0; $for1 < count($langs); $for1++) {
				$chk = "";
				for ($for2 = 0; $for2 < count($explo); $for2++) {
				    if (strval($langs[$for1][0]) == trim(strval($explo[$for2]))) {
					$chk = " checked";
					break;
				    }
				}
				if ($for1 == 0) _e('<div class="BabelZ-Countries">');
				else if ($for1 %26 == 0) _e('</div><div class="BabelZ-Countries">');
				_e('<label><input type="checkbox" name="BabelZ-G-Lang2[]" class="BabelZLanguageChecks" id="cc_'.htmlentities($langs[$for1][0]).'" value="'.htmlentities($langs[$for1][0]).'"'.$chk.'>'.$langs[$for1][1].'</label><br>');
			    }
			    _e('</div>');
			}
			?>
			<div class="BabelZ-Clear"></div>
			<br>
		    </td>
		</tr>
		
		<tr><td colspan="3"><hr /></td></tr>
		
		<tr>
		    <th scope="row">Advanced Setttings</th>
		    <td colspan="2">
			<label><input type="checkbox" name="BabelZ-G-Auto" id="BabelZ-G-Auto" <?php _e(get_option('BabelZ_G_Auto')); ?>> Automatically display translation banner to users speaking languages other than the language of your page.</label>
			<br><br>
			<label><input type="checkbox" name="BabelZ-G-Mult" id="BabelZ-G-Mult" <?php _e(get_option('BabelZ_G_Mult')); ?>> Your page contains content in multiple languages.</label>
			<br><br>
			<label><input type="checkbox" name="BabelZ-G-AnalyticsA" id="BabelZ-G-AnalyticsA" <?php _e(get_option('BabelZ_G_AnalyticsA')); ?>> Track translation traffic using Google Analytics.</label>
			<div id="analyticsID">
			<br>
			<label>Paste your Analytics Web Property ID here: (e.g., UA-12345-12)</label><br>
			<input type="text" name="BabelZ-G-AnalyticsB" id="BabelZ-G-AnalyticsB" value="<?php _e(get_option('BabelZ_G_AnalyticsB')); ?>">
			</div>
			<br><br>
			<label><input type="checkbox" name="BabelZ-Prom" id="BabelZ-Prom" <?php _e(get_option('BabelZ_Prom')); ?>> Display a support link under the widget. Thanks for your support!</label>
		    </td>
		</tr>
	    </table>
	</div>
    </div>

    <div class="postbox">
	<h3 class="hndle BabelZ-H" target="BabelZ-Hide2"><span><?php _e('Usage','BabelZ'); ?></span></h3>
	<div class="inside" id="BabelZ-Hide2">
	    <table width="100%" class="BabelZ-Pad">
		<tr>
		    <td>
		    <h3>How to add the widget to a sidebar</h3>
		    <ol>
			<li><a href="widgets.php">Go to your widgets</a></li>
			<li>On the left under Available Widgets you'll see BabelZ</li>
			<li>Drag and drop the BabelZ widget in to one of your available sidebars on the right.</li>
		    </ol>
		    </td>
		</tr>
	    </table>
	</div>
    </div>
<?php
//Promote BabelZ
if (get_option('BabelZ_Hide2') == 'show') $vis = 'show';
else $vis = 'hide';
_e('<input type="hidden" target="BabelZ-Hide2" name="BabelZ-Hide2" class="BabelZ-SH" value="'.$vis.'">');

//ChangeLog
if (get_option('BabelZ_Hide3') == 'show') $vis = 'show';
else $vis = 'hide';
_e('<input type="hidden" target="BabelZ-Hide3" name="BabelZ-Hide3" class="BabelZ-SH" value="'.$vis.'">');
?>

    <div class="postbox">
	<h3 class="hndle BabelZ-H" target="BabelZ-Hide3"><span><?php _e('ChangeLog','BabelZ'); ?></span></h3>
	<div class="inside" id="BabelZ-Hide3">
	    <table width="100%" class="BabelZ-Pad">
		<tr>
		    <td>
			<ul id="BabelZ-CLog">
			    <li>1.1.5 - 7/9/17
				<ul>
				    <li>Added Google Analytics tracking option</li>
				    <li>Updated list of languages to choose from to a total of 103 languages</li>
				    <li>Added a short how to in new usage section</li>
				    <li>Minified the JavaScript file</li>
				    <li>Cleaned Up HTML</li>
				    <li>Updated images and screenshot</li>
				</ul>
			    </li>
			    <li>1.1.4 - 6/23/17
				<ul>
				    <li>Fixed mixed content issue when using over HTTPS</li>
				    <li>Moved Settings page from WordPress settings to it's own admin menu item</li>
				</ul>
			    </li>
			    <li>1.1.3 - 3/28/13
				<ul>
				    <li>Added additional inline display modes; inline, tabbed, and automatic (Google translate)</li>
				    <li>Updated language list (Google translate)</li>
				    <li>Added option "Your page contains content in multiple languages." (Google translate)</li>
				    <li>Added option "Automatically display translation banner to users speaking languages other than the language of your page." (Google Translate)</li>
				</ul>
			    </li>
			    <li>1.1.2 - 1/23/13
				<ul>
				    <li>Updated compatibility to 3.5</li>
				    <li>Removed Yahoo Babelfish widgets</li>
				</ul>
			    </li>
			    <li>1.1.1 - 2/28/10
				<ul>
				    <li>Widget Setting Bug Fixes</li>
				</ul>
			    </li>
			    <li>1.1.0 - 2/25/10
				<ul>
				    <li>Added Google Translate Widget with options</li>
				    <li>Added BabelFish Text/URL combo box</li>
				</ul>
			    </li>
			    <li>1.0.2 - 6/13/09
				<ul>
				    <li>Updated the CSS for boxes to fix visual glitch in 2.8</li>
				</ul>
			    </li>
			    <li>1.0.1 - 2/26/09
				<ul>
				    <li>Link Fix</li>
				</ul>
			    </li>
			    <li>1.0.0 - 2/24/09
				<ul>
				    <li>Initial Release</li>
				</ul>
			    </li>
			</ul>
		    </td>
		</tr>
	    </table>
	</div>
    </div>
</div>
