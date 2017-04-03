# php_structure_mvc
The model view controller pattern is the most used pattern for today’s world web applications. It has been used for the first time in Smalltalk and then adopted and popularized by Java. At present there are more than a dozen PHP web frameworks based on MVC pattern.

Despite the fact that the MVC pattern is very popular in PHP, is hard to find a proper tutorial accompanied by a simple source code example. That is the purpose of this tutorial.

The MVC pattern separates an application in 3 modules: Model, View and Controller:
The model is responsible to manage the data; it stores and retrieves entities used by an application, usually from a database, and contains the logic implemented by the application.
The view (presentation) is responsible to display the data provided by the model in a specific format. It has a similar usage with the template modules present in some popular web applications, like wordpress, joomla, …
The controller handles the model and view layers to work together. The controller receives a request from the client, invokes the model to perform the requested operations and sends the data to the View. The view formats the data to be presented to the user, in a web application as an html output.

EXAMPLE :

1.)

// index.php file  
include_once("controller/Controller.php");  
  
$controller = new Controller();  
$controller->invoke();  


2.) view plaincopy to clipboardprint?
include_once("model/Model.php");  
  
class Controller {  
     public $model;   
  
     public function __construct()    
     {    
          $this->model = new Model();  
     }   
      
     public function invoke()  
     {  
          if (!isset($_GET['book']))  
          {  
               // no special book is requested, we'll show a list of all available books  
               $books = $this->model->getBookList();  
               include 'view/booklist.php'; 
          } 
          else 
          { 
               // show the requested book 
               $book = $this->model->getBook($_GET['book']); 
               include 'view/viewbook.php';  
          }  
     }  
}  


3). 
include_once("model/Book.php");  
  
class Model {  
    public function getBookList()  
    {  
        // here goes some hardcoded values to simulate the database  
        return array(  
            "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),  
            "Moonwalker" => new Book("Moonwalker", "J. Walker", ""),  
            "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")  
        );  
    }  
      
    public function getBook($title)  
    {  
        // we use the previous function to get all the books and then we return the requested one.  
        // in a real life scenario this will be done through a db select command  
        $allBooks = $this->getBookList();  
        return $allBooks[$title];  
    }        
}  

Thanks & Regards,
Jignesh M. Mehta | Software Engineer 

