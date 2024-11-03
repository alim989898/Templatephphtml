<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документация для класса Templates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
        }
        h1, h2, h3 {
            color: #333;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 4px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<h1>Документация для класса Templates</h1>

<h2>Обзор</h2>
<p>Класс <code>Templates</code> является утилитой для генерации HTML-контента на PHP. Он позволяет легко создавать HTML-документы с использованием гибкой системы шаблонов.</p>

<h2>Определение класса</h2>

<h3>Свойства</h3>
<ul>
    <li><code>public $dir</code>: Строка, представляющая директорию для шаблонов (по умолчанию — пустая строка).</li>
    <li><code>public $template</code>: Строка для текущего шаблона, который обрабатывается.</li>
    <li><code>public $data</code>: Ассоциативный массив для хранения данных заполнителей для шаблонов.</li>
    <li><code>public $result</code>: Ассоциативный массив для хранения скомпилированных результатов различных шаблонов.</li>
</ul>

<h3>Методы</h3>

<ul>
    <li><code>html($file)</code>: Устанавливает текущий шаблон на основе предоставленного имени файла.</li>
    <li><code>load($file)</code>: Загружает шаблон из указанного файла.</li>
    <li><code>set($search, $value)</code>: Устанавливает заполнитель в шаблоне с указанным значением.</li>
    <li><code>block($name, $type = true)</code>: Обрабатывает блочные элементы в шаблоне.</li>
    <li><code>compile($name)</code>: Компилирует данные, заменяя заполнители их значениями.</li>
    <li><code>result($name)</code>: Возвращает скомпилированный результат для указанного имени.</li>
    <li><code>clear()</code>: Очищает текущий шаблон и данные.</li>
    <li><code>set_for($array, $v1 = "{", $v2 = "}")</code>: Устанавливает множество заполнителей из ассоциативного массива.</li>
    <li><code>block_for($array)</code>: Обрабатывает массив блоков.</li>
    <li><code>ardoc($array)</code>: Создает строку атрибутов из ассоциативного массива.</li>
</ul>

<h3>Методы для генерации HTML</h3>
<ul>
    <li><code>DOCTYPE_html()</code>: Возвращает строку <code>&lt;!DOCTYPE html&gt;</code>.</li>
    <li><code>html_start($lang = 'ru')</code>: Возвращает начало HTML-документа с указанным языком.</li>
    <li><code>html_end()</code>: Возвращает закрывающий тег <code>&lt;/html&gt;</code>.</li>
    <li><code>head_start($array = [])</code>: Возвращает начало тега <code>&lt;head&gt;</code> с атрибутами.</li>
    <li><code>head_end()</code>: Возвращает закрывающий тег <code>&lt;/head&gt;</code>.</li>
    <li><code>body_start($array = [])</code>: Возвращает начало тега <code>&lt;body&gt;</code> с атрибутами.</li>
    <li><code>body_end()</code>: Возвращает закрывающий тег <code>&lt;/body&gt;</code>.</li>
    <li><code>meta($key, $val)</code>: Возвращает тег <code>&lt;meta&gt;</code> с указанными атрибутами.</li>
    <li><code>title($val)</code>: Возвращает тег <code>&lt;title&gt;</code> с указанным содержимым.</li>
    <li><code>div_start($array)</code>: Возвращает открывающий тег <code>&lt;div&gt;</code> с атрибутами.</li>
    <li><code>div_end()</code>: Возвращает закрывающий тег <code>&lt;/div&gt;</code>.</li>
    <li><code>a_start($href, $array = [])</code>: Возвращает открывающий тег <code>&lt;a&gt;</code> с указанным href и атрибутами.</li>
    <li><code>a_end()</code>: Возвращает закрывающий тег <code>&lt;/a&gt;</code>.</li>
    <li><code>h($level, $content, $array = [])</code>: Возвращает заголовок <code>&lt;h&gt;</code> с указанным уровнем, содержимым и атрибутами.</li>
    <li><code>p($content, $array = [])</code>: Возвращает тег <code>&lt;p&gt;</code> с указанным содержимым и атрибутами.</li>
    <li><code>ul_start($array = [])</code>: Возвращает открывающий тег <code>&lt;ul&gt;</code> с атрибутами.</li>
    <li><code>ul_end()</code>: Возвращает закрывающий тег <code>&lt;/ul&gt;</code>.</li>
    <li><code>li($content, $array = [])</code>: Возвращает тег <code>&lt;li&gt;</code> с указанным содержимым и атрибутами.</li>
    <li><code>table_start($array = [])</code>: Возвращает открывающий тег <code>&lt;table&gt;</code> с атрибутами.</li>
    <li><code>table_end()</code>: Возвращает закрывающий тег <code>&lt;/table&gt;</code>.</li>
    <li><code>tr_start($array = [])</code>: Возвращает открывающий тег <code>&lt;tr&gt;</code> с атрибутами.</li>
    <li><code>tr_end()</code>: Возвращает закрывающий тег <code>&lt;/tr&gt;</code>.</li>
    <li><code>td($content, $array = [])</code>: Возвращает тег <code>&lt;td&gt;</code> с указанным содержимым и атрибутами.</li>
    <li><code>th($content, $array = [])</code>: Возвращает тег <code>&lt;th&gt;</code> с указанным содержимым и атрибутами.</li>
    <li><code>form_start($array = [])</code>: Возвращает открывающий тег <code>&lt;form&gt;</code> с атрибутами.</li>
    <li><code>form_end()</code>: Возвращает закрывающий тег <code>&lt;/form&gt;</code>.</li>
    <li><code>input($type, $array = [])</code>: Возвращает тег <code>&lt;input&gt;</code> с указанным типом и атрибутами.</li>
    <li><code>button($content, $array = [])</code>: Возвращает тег <code>&lt;button&gt;</code> с указанным содержимым и атрибутами.</li>
    <li><code>select_start($array = [])</code>: Возвращает открывающий тег <code>&lt;select&gt;</code> с атрибутами.</li>
    <li><code>select_end()</code>: Возвращает закрывающий тег <code>&lt;/select&gt;</code>.</li>
    <li><code>option($content, $array = [])</code>: Возвращает тег <code>&lt;option&gt;</code> с указанным содержимым и атрибутами.</li>
    <li><code>textarea($content, $array = [])</code>: Возвращает тег <code>&lt;textarea&gt;</code> с указанным содержимым и атрибутами.</li>
    <li><code>img($src, $array = [])</code>: Возвращает тег <code>&lt;img&gt;</code> с указанным источником и атрибутами.</li>
    <li><code>audio($src, $array = [])</code>: Возвращает тег <code>&lt;audio&gt;</code> с указанным источником и атрибутами.</li>
    <li><code>video($src, $array = [])</code>: Возвращает тег <code>&lt;video&gt;</code> с указанным источником и атрибутами.</li>
</ul>

<h2>Пример использования</h2>
<pre><code>
$tpl = new Templates();

$form = []; // Используем массив для хранения контента

$form[] = $tpl->DOCTYPE_html();
$form[] = $tpl->html_start();
$form[] = $tpl->head_start();
$form[] = $tpl->meta('charset', 'UTF-8');
$form[] = $tpl->title('Пример страницы');
$form[] = $tpl->head_end();
$form[] = $tpl->body_start(['class' => 'main']);

// Использование <h> заголовка
$form[] = $tpl->h(1, 'Заголовок H1');
$form[] = $tpl->h(2, 'Заголовок H2', ['class' => 'subheading']);

// Использование <a> ссылки
$form[] = $tpl->a_start('https://example.com', ['target' => '_blank']);
$form[] = "Перейти на Example.com";
$form[] = $tpl->a_end();

// Использование <br> для переноса строки
$form[] = $tpl->br();
$form[] = "Контент страницы после переноса строки";

$form[] = $tpl->body_end();
$form[] = $tpl->html_end();

$tpl->html(implode('', $form)); // Установка файла шаблона
$tpl->compile('main'); // Компиляция данных
echo $tpl->result('main');

</code></pre>

<h2>Пример использования 2 </h2>
<pre><code>
$tpl = new Templates();
$tpl->html('<h1>{test}</h1>');
$tpl->set('{test}',"test"); 
$tpl->compile('main');
echo $tpl->result('main');
</code></pre>


<h2>Пример использования 3 </h2>


<pre><code>
define('ROOT', dirname(__FILE__));  
$tpl = new Templates();

$tpl->html('{test}');
$tpl->set('{test}',"test"); 
$tpl->compile('main_gen');
$tpl->clear();
  
$tpl->load('index.html');
$tpl->set('{test}',"тест-3333333"); 
$tpl->set('{test}',$tpl->result('main_gen')); 
$tpl->compile('main');
echo $tpl->result('main');
</code></pre>

</body>
</html>

#index.html
```html
<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="UTF-8">
      <title>{test_set_tohtml}</title>
   </head>
   <body>
      <p>
         <b>
            {test}
         </b>
      </p>
   </body>
</html>
