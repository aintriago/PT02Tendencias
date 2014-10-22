<?php
	 
function esc($string) {
  return htmlentities($string);
}
 
function anchor($url,$text) {
    if (isset($url, $text)) {
        return "<a href=\"$url\">$text</a>";
    }
}
 
function css($css) {
    if (isset($css)) {
        if (is_array($css)) {
            foreach ($css as $file) {
                echo '<link rel="stylesheet" href="'.$file.'" media="screen" />'."\n";
            }
        } else {
            echo '<link rel="stylesheet" href="'.$css.'" media="screen" />'."\n";
        }
    }
}
	 
function js($js) {
    if (isset($js)) {
        if (is_array($js)) {
            foreach ($js as $file) {
                echo '<script type="text/javascript" src="/'.TMVC_MYAPPNAME.'/'.$file.'"></script>'."\n";
            }
        } else {
            echo '<script type="text/javascript" src="/'.TMVC_MYAPPNAME.'/'.$js.'"></script>'."\n";
        }
    }
}
 
function block($bTemplate,$Vars = null) {
    if (isset($bTemplate)) {
        $tmvc = tmvc::instance();
        $template = $tmvc->controller->view->fetch($bTemplate,$Vars);
        if ($template) {
            echo $template;
            unset($template);
        }
    }
}
 
function arrp() {
    $arrs = func_get_args();
    if (isset($arrs) && is_array($arrs)) {
        echo '<pre style="padding: 5px; font-size: 11px; line-height: 16px;">';
        $o='';
        foreach ($arrs as $key=>$val) {
            ob_start();
            var_dump($val);
            $o.=ob_get_contents();
            ob_end_clean();
        }
        echo htmlspecialchars($o, ENT_QUOTES);
        echo '</pre>';
    }
}
 
function relativeTime($utimestamp){
    if (isset($utimestamp)) {
        $types = Array('second', 'minute', 'hour', 'day', 'week', 'month', 'years', 'decade');
        $duration = Array(60, 60, 24, 7, 4.35, 12, 10);
        $gap = (time() - $utimestamp);
        if ($gap > 0) {
            $end = "ago";
        } else {
            $gap =- $gap;
            $end = "to go";
        }
        for($i = 0; $gap >= $duration[$i]; $i++) {
            $gap /= $duration[$i];
            $gap = round($gap);
        }
        if($gap != 1) {
            $types[$i].= "s";
            $reltime = $gap.' '.$types[$i].' '. $end;
        }
        return $reltime;
    }
}

function IncludeOnReady($js) {
	if (isset($js)) {
		echo "<script type='text/javascript'>";
		echo "$( document ).ready(function() {";
		if (is_array($js)) {
			foreach ($js as $file) {
				echo "Module.".$file."();";
			}
		} else {
			echo "Module.".$js."();";
		}
		echo "});";
		echo "</script>";
	}
}