 <?php
 /**
* Exemple d'implementació de patró de disseny COMPOSITE
* @author sergi.grau@fje.edu
* @version 1.0 18.10.2015
*/

/**
* Interfície que correspon al Component, i que les classes que l'implementaran
* seran diversos elements HTML
*/
interface Component_HtmlElement
{
     /**
      * @ Return representació de cadena
      */
    public function __toString();
    public function add(Component_HtmlElement $element);
}

/**
* Implementació d'exemple Leaf.
* Representa un element h1.
*/

class H1 implements Component_HtmlElement
{
     private $text;

     public function __construct($t)
     {
         $this->text=$t;
     }

     public function __toString()
     {
         return "<h1> {$this->text} </h1>";
     }
     public function add(Component_HtmlElement $element){}
}

/**
* Implementació d'exemple Leaf.
* Representa un element <p>.
*/
class P implements Component_HtmlElement
 {
     private $text;

     public function __construct($t)
     {
         $this->text = $t;
     }

     public function __toString()
     {
         return "<p> {$this->text } </p>";
     }
     public function add(Component_HtmlElement $element){}

 }

/**
* Una aplicació composta, que accepta com a components secundaris genèrics.
* Aquests fills poden ser H1, P o fins i tot altres DIVs.
*/
 class Composite_DIV implements Component_HtmlElement
 {
     private $fills = array();

     public function add(Component_HtmlElement $element)
     {
         $this->fills [] = $element;
     }

     public function __toString()
     {
         $html = "<div>\n";
         foreach ($this->fills as $fill) {
             $CadenaFill = (string) $fill;
             //$ChildRepresentation = str_replace("\n",$childRepresentation);
             $html.=$CadenaFill."\n";
         }
         $html.= "</div>";
         return $html;
     }
 }

 //Programa principal
 $div = new Composite_DIV();
 $div->add(new H1 ('Titol'));
 $div->add(new P("Lorem ipsum ... "));
 $sub = new Composite_DIV();
 $sub->add(new P('dolor sit amet ...'));
 $div->add($sub);
 echo $div, "\n"; 
?>