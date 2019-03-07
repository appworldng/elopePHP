# elopePHP
A simple lightweight, fast-processing PHP framework that utilizes the MVC approach from ground up and helps you build web applications faster.

## Introduction
The elopePHP uses the active record pattern for object relational mapping of its records to model objects, making it easier for you to access the column values of your RDBMS without having to worry about the new columns or changes to the database schema.

### Models
You can quickly create your own models by simply extending the parent **model** class. Your child model will able to utilize the already defined parent methods such as **fetchAll()**, **getRecord($id)**, **addRecord($args)**, **delRecord($id)**, **editRecord($id, $args)**:
```
//For e.g we define a Student Model from a "Student" Table as follows
class StudentModel extends Model {}

//Instantiate Object & get users
$StudentObject = new StudentModel();
$students = $StudentObject->fetchAll();
foreach($students as $student) {
    echo $student->ID.'<br/>';
    echo $student->firstname.'<br/>';
    echo $student->lastname.'<br/>';
}

//You can also access a specific user
$student = $students->getRecord(1);
echo $student->ID.'<br/>';
echo $student->firstname.'<br/>';
echo $student->lastname.'<br/>';
```

### Views
Create your own customizable view classes by simply extending the parent **view** class. An example is shown below:
```
//Instantiate View
class StudentView extends View {
    public $studentModel = null;
    public $students;

    public function __construct() {
        $this->studentModel = new StudentModel();
        $this->students = $this->studentModel->fetchAll();
        parent::$body = 'www-templates/student/index.php';
        $this->run();
    }

    private function run() {
        parent::__construct();
    }
}
```

In your template file, the **$this->students** can be further accessed and print further, like so:
```
<section class="text-center" style="padding: 3em 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Students</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <?php foreach($this->students as $student): ?>
                    <tr>
                        <td><?php echo $student->ID; ?></td>
                        <td><?php echo $student->name; ?></td>
                        <td><?php echo $student->email; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
```

### Controllers
For controllers, you can simply inherit the parent Controller class and start specifying appropriate actions to determine the messages passed to the models and subsequent actions.
```
class StudentModel extends Model {

}
```