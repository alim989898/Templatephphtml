<?php
/*
Автор: ШОЛОХАНОВ АЛИМЖАН
Mail: a.alim98@mail.ru
*/
class Templates {
    public $dir = '', $template = '', $data = [], $result = [];

    public function html($file) { $this->template = $file; }
    
    public function load($file) {
        if (!is_file(ROOT . $this->dir . '/' . $file)) die('File not found ' . $file);
        $this->template = file_get_contents(ROOT . $this->dir . '/' . $file);
    }
    
    public function set($search, $value) { $this->data[$search] = $value; }
    
    public function block($name, $type = true) {
        $pattern = $type ? "/\[$name\]|\[\/$name\]/si" : "/\[$name\](.*?)\[\/$name\]/si";
        $this->template = preg_replace($pattern, '', $this->template);
    }
    
    public function compile($name) {
        if ($this->data) {
            $this->template = str_ireplace(array_keys($this->data), array_values($this->data), $this->template);
        }
        $this->result[$name] = isset($this->result[$name]) ? $this->result[$name] . $this->template : $this->template;
    }
    
    public function result($name) { return $this->result[$name] ?? false; }
    
    public function clear() { $this->template = ''; $this->data = []; }
    
    public function set_for($array, $v1 = "{", $v2 = "}") {
        if (is_array($array)) foreach ($array as $key => $value) $this->set($v1 . $key . $v2, $value);
    }
    
    public function block_for($array) {
        if (is_array($array)) foreach ($array as $key => $value) $this->block($key, $value);
    }
    
    public function ardoc($array) {
        return is_array($array) ? array_reduce(array_keys($array), function ($carry, $key) use ($array) {
            return $carry . " " . htmlspecialchars($key, ENT_QUOTES, 'UTF-8') . "='" . htmlspecialchars($array[$key], ENT_QUOTES, 'UTF-8') . "'";
        }, '') : '';
    }
    
    public function DOCTYPE_html() { return '<!DOCTYPE html>'; }
    public function html_start($lang = 'ru') { return "<html lang='{$lang}'>"; }
    public function html_end() { return "</html>"; }
    public function head_start($array = []) { return "<head " . $this->ardoc($array) . ">"; }
    public function head_end() { return "</head>"; }
    public function body_start($array = []) { return "<body" . $this->ardoc($array) . ">"; }
    public function body_end() { return "</body>"; }
    public function meta($key, $val) { return "<meta {$key}='{$val}'>"; }
    public function title($val) { return "<title>{$val}</title>"; }
    public function div_start($array) { return "<div" . $this->ardoc($array) . ">"; }
    public function div_end() { return "</div>"; }
    public function a_start($href, $array = []) { return "<a href='{$href}'" . $this->ardoc($array) . ">"; }
    public function a_end() { return "</a>"; }
    public function h($level, $content, $array = []) {
        $level = max(1, min(6, (int)$level)); 
        return "<h{$level}" . $this->ardoc($array) . ">{$content}</h{$level}>";
    }
    public function br() { return "<br>"; }
    public function p($content, $array = []) { return "<p" . $this->ardoc($array) . ">{$content}</p>"; }
    public function ul_start($array = []) { return "<ul" . $this->ardoc($array) . ">"; }
    public function ul_end() { return "</ul>"; }
    public function ol_start($array = []) { return "<ol" . $this->ardoc($array) . ">"; }
    public function ol_end() { return "</ol>"; }
    public function li($content, $array = []) { return "<li" . $this->ardoc($array) . ">{$content}</li>"; }
    public function table_start($array = []) { return "<table" . $this->ardoc($array) . ">"; }
    public function table_end() { return "</table>"; }
    public function tr_start($array = []) { return "<tr" . $this->ardoc($array) . ">"; }
    public function tr_end() { return "</tr>"; }
    public function td($content, $array = []) { return "<td" . $this->ardoc($array) . ">{$content}</td>"; }
    public function th($content, $array = []) { return "<th" . $this->ardoc($array) . ">{$content}</th>"; }
    public function form_start($array = []) { return "<form" . $this->ardoc($array) . ">"; }
    public function form_end() { return "</form>"; }
    public function input($type, $array = []) { return "<input type='{$type}'" . $this->ardoc($array) . ">"; }
    public function button($content, $array = []) { return "<button" . $this->ardoc($array) . ">{$content}</button>"; }
    public function select_start($array = []) { return "<select" . $this->ardoc($array) . ">"; }
    public function select_end() { return "</select>"; }
    public function option($content, $array = []) { return "<option" . $this->ardoc($array) . ">{$content}</option>"; }
    public function textarea($content, $array = []) { return "<textarea" . $this->ardoc($array) . ">{$content}</textarea>"; }
    public function img($src, $array = []) { return "<img src='{$src}'" . $this->ardoc($array) . " />"; }
    public function audio($src, $array = []) { return "<audio src='{$src}'" . $this->ardoc($array) . "></audio>"; }
    public function video($src, $array = []) { return "<video src='{$src}'" . $this->ardoc($array) . "></video>"; }
}

$tpl = new Templates();
?>
