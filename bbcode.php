<?php
/**
 * BBcode helper class
 *
 * @package    BBcode
 * @category   Helper
 * @author     Chema <chema@garridodiaz.com>
 * @copyright  (c) 2012
 * @license    GPL v3
 */
class bbcode {
	/**
	 *
	 * This function parses BBcode tag to HTML code (XHTML transitional 1.0)
	 *
	 * It parses (only if it is in valid format e.g. an email must to be
	 * as example@example.ext or similar) the text with BBcode and
	 * translates in the relative html code.
	 *
	 * @param string $text
	 * @param boolean $advanced his var describes if the parser run in advanced mode (only *simple* bbcode is parsed).
	 * @return string
	 */
	public static function tohtml($text,$advanced=FALSE,$charset='UTF-8'){
		//special chars
		$text  = htmlspecialchars($text, ENT_QUOTES,$charset);
		/**
		 * This array contains the main static bbcode
		 * @var array $basic_bbcode
		 */
		$basic_bbcode = array(
								'[b]', '[/b]',
'[B]', '[/B]',
								'[i]', '[/i]',
								'[u]', '[/u]',
								'[s]','[/s]',
								'[ul]','[/ul]',
								'[li]', '[/li]',
								'[ol]', '[/ol]',
								'[center]', '[/center]',
'[CENTER]', '[/CENTER]',
								'[left]', '[/left]',
								'[right]', '[/right]',
								'[br]', '[/br]',
'<br>', '<br />',
								'[RIGHT]', '[/RIGHT]',
									'[I]', '[/I]',
									'[LIST]', '[/LIST]',
									'[U]', '[/U]',
									'[*]', '[*]',
									'[quote]', '[/quote]',
								
		);
		/**
		 * This array contains the main static bbcode's html
		 * @var array $basic_html
		 */
		$basic_html = array(
								'<b>', '</b>',
'<b>', '</b>',
								'<i>', '</i>',
								'<u>', '</u>',
								'<s>', '</s>',
								'<ul>','</ul>',
								'<li>','</li>',
								'<ol>','</ol>',
								'<div style="text-align: center;">', '</div>',
'<div style="text-align: center;">', '</div>',
								'<div style="text-align: left;">',   '</div>',
								'<div style="text-align: right;">',  '</div>',
								'<br>','</br>',
'', '',
'<div style="text-align: right;">',  '</div>',
'<i>', '</i>',
'<ul>', '</ul>',
'<span style="text-decoration:underline;"', '</span>',
'<li>', '</li>',
'<blockquote>', '</blockquote>',
		);
		/**
		 *
		 * Parses basic bbcode, used str_replace since seems to be the fastest
		 */
		$text = str_replace($basic_bbcode, $basic_html, $text);
		//advanced BBCODE
		if ($advanced)
		{
			/**
			 * This array contains the advanced static bbcode
			 * @var array $advanced_bbcode
			 */
			$advanced_bbcode = array(
									 '#\[color=([a-zA-Z]*|\#?[0-9a-fA-F]{6})](.+)\[/color\]#Usi',
									 '#\[size=([0-9][0-9]?)](.+)\[/size\]#Usi',
									 '#\[quote](\r\n)?(.+?)\[/quote]#si',
									 '#\[quote=(.*?)](\r\n)?(.+?)\[/quote]#si',
									 '#\[url](.+)\[/url]#Usi',
									 '#\[url=(.+)](.+)\[/url\]#Usi',
									 '#\[email]([\w\.\-]+@[a-zA-Z0-9\-]+\.?[a-zA-Z0-9\-]*\.\w{1,4})\[/email]#Usi',
									 '#\[email=([\w\.\-]+@[a-zA-Z0-9\-]+\.?[a-zA-Z0-9\-]*\.\w{1,4})](.+)\[/email]#Usi',
									 '#\[img](.+)\[/img]#Usi',
									 '#\[img=(.+)](.+)\[/img]#Usi',
									 '#\[code](\r\n)?(.+?)(\r\n)?\[/code]#si',
									 '#\[youtube]https://[a-z]{0,3}.youtube.com/watch\?v=([0-9a-zA-Z]{1,11})\[/youtube]#Usi',
									 '#\[youtube]([0-9a-zA-Z]{1,11})\[/youtube]#Usi',
									 '#\[FONT=([a-zA-Z]*|\#?[0-9a-fA-F]{6})](.+)\[/FONT\]#Usi',
								

			);
			/**
			 * This array contains the advanced static bbcode's html
			 * @var array $advanced_html
			 */
			$advanced_html = array(
									 '<span style="color: $1">$2</span>',
									 '<span style="font-size: $1px">$2</span>',
									 "<div class=\"quote\"><span class=\"quoteby\">Disse:</span>\r\n$2</div>",
									 "<div class=\"quote\"><span class=\"quoteby\">Disse <b>$1</b>:</span>\r\n$3</div>",
									 '<a rel="nofollow" target="_blank" href="/proxy.php?url=$1">$1</a>',
									 '<a rel="nofollow" target="_blank" href="/proxy.php?url=$1">$2</a>',
									 '<a href="mailto: $1">$1</a>',
									 '<a href="mailto: $1">$2</a>',
									 '<center><img src="$1" alt="$1" width="500"/></center>',
									 '<center><img src="$1" alt="$2" width="500"/></center>',
									 '<div class="code">$2</div>',
									 '<object type="application/x-shockwave-flash" style="width: 450px; height: 366px;" data="https://www.youtube.com/v/$1"><param name="movie" value="https://www.youtube.com/v/$1" /><param name="wmode" value="transparent" /></object>',
									 '<object type="application/x-shockwave-flash" style="width: 450px; height: 366px;" data="https://www.youtube.com/v/$1"><param name="movie" value="https://www.youtube.com/v/$1" /><param name="wmode" value="transparent" /></object>',
									  '<span style="font-family: $1">$2</span>',
									 
									 
			);
			$text = preg_replace($advanced_bbcode, $advanced_html,$text);
		}
		//before return convert line breaks to HTML
		return bbcode::nl2br($text);
	}
	/**
	 *
	 * removes bbcode from text
	 * @param string $text
	 * @return string text cleaned
	 */
	public static function remove($text)
	{
		return strip_tags(str_replace(array('[',']'), array('<','>'), $text));
	}
	/**
	 *
	 * Inserts HTML line breaks before all newlines in a string
	 * @param string $var
	 */
	public static function nl2br($var)
	{
		return str_replace(array('\\r\\n','\r\\n','r\\n','\r\n', '\n', '\r'), '<br />', nl2br($var));
	}
}