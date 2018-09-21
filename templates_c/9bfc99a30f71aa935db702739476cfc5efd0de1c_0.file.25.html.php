<?php
/* Smarty version 3.1.32, created on 2018-08-22 15:04:30
  from 'D:\UniServerZ\www\yukino\uploads\post\25\25.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d6d6eee98e1_79259213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bfc99a30f71aa935db702739476cfc5efd0de1c' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\uploads\\post\\25\\25.html',
      1 => 1534946668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d6d6eee98e1_79259213 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="plugin/prism/prism.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="plugin/prism/prism.js"><?php echo '</script'; ?>
>
<pre><code class="language-cpp line-numbers">#include&lt;iostream&gt;
#include&lt;iomanip&gt;
using namespace std;

int main () {
    char c;
    double x,y,z;
    
    cin &gt;&gt; x &gt;&gt; c &gt;&gt; y;
    
    switch(c) {
        case '+' :
            cout &lt;&lt; fixed &lt;&lt; setprecision(4) &lt;&lt; x &lt;&lt; " " &lt;&lt; '+' &lt;&lt; " " &lt;&lt; y &lt;&lt; " " &lt;&lt; '=' &lt;&lt; " " &lt;&lt; x+y &lt;&lt;endl;
            break;
        case '-' :
            cout &lt;&lt; fixed &lt;&lt; setprecision(4) &lt;&lt; x &lt;&lt; " " &lt;&lt; '-' &lt;&lt; " " &lt;&lt; y &lt;&lt; " " &lt;&lt; '=' &lt;&lt; " " &lt;&lt; x-y &lt;&lt;endl;
            break;
        case '*' :
            cout &lt;&lt; fixed &lt;&lt; setprecision(4) &lt;&lt; x &lt;&lt; " " &lt;&lt; '*' &lt;&lt; " " &lt;&lt; y &lt;&lt; " " &lt;&lt; '=' &lt;&lt; " " &lt;&lt; x*y &lt;&lt;endl;
            break;
        case '/' :
            if ( y!=0 ) {
                cout &lt;&lt; fixed &lt;&lt; setprecision(4) &lt;&lt; x &lt;&lt; " " &lt;&lt; '/' &lt;&lt; " " &lt;&lt; y &lt;&lt; " " &lt;&lt; '=' &lt;&lt; " " &lt;&lt; x/y &lt;&lt;endl;
            } else {
                cout &lt;&lt; "ERROR" &lt;&lt; endl;
            }
            break;
    }
    return 0;
}
</code></pre><?php }
}
